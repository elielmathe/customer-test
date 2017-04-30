<?php
	class Ticket{
		private $db_link;//Link to the database
		private $db_conn;//Connection database 
		
		public function __construct(){
			try{
				$this -> db_link = __DIR__."/../var/db.php";
				include_once $this -> db_link;
				$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
				$this -> db_conn = new PDO("mysql:host=".$host.";dbname=".$db,$user,$pwd,$pdo_options);
				
				
				
			}catch(Exception $err){$this -> process_exception($err);}
		}
		
		public function check_ticket_existance($id_ticket){
			if(!empty($id_ticket)){
				try{
					$query = $this -> db_conn -> prepare("SELECT idTickets FROM Tickets WHERE idTickets=?");
					$query -> execute(array($id_ticket));
					if($result = $query -> fetch()){
						$query -> closeCursor();
						return true;
					}
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		public function create_ticket($id_user,$content,$priority,$impact,$id_required_service){
			if(!empty($id_user) and !empty($content) and !empty($priority) and !empty($impact) and !empty($id_required_service)){
				try{
					$query = $this -> db_conn -> prepare("INSERT INTO Ticket(idTickets,content,openingDate,impact,priority,required_service,Customer_idCustomer) VALUES('',?,NOW(),?,?,?,?)");
					$i = $query -> execute(array($content,$impact,$priority,$id_required_service,$id_user));
					$query -> closeCursor();
					if($i > 0) return true;
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		public function attach_files($id_ticket,$file_link,$file_ext){
			if(!empty($id_ticket) and !empty($file_link) and !empty($file_ext) and $this -> check_ticket_existance($id_ticket) === true){
				try{
					$query = $this -> db_conn -> prepare("INSERT INTO TicketAttachedFiles(idTicketFiles,fileLink,extension,Tickets_idTickets) VALUES('',?,?,?)");
					$i = $query -> execute(array($file_ext,$file_ext,$id_ticket));
					$query -> closeCursor();
					if($i > 0) return true;
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		protected function process_exception($exception){
			die($exception -> getMessage());
		}
	}
