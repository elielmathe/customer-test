<?php
	class User{
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
		
		public function check_username_exists($username){
			if(!empty($username)){
				try{
					$query = $this -> db_conn -> prepare("SELECT idUser FROM User WHERE username=?");
					$query -> execute(array($username));
					if($result = $query -> fetch()){
						$query -> closeCursor();
						return true;
					}
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		public function check_user_id_exists($id_user){
			if(!empty($id_user)){
				try{
					$query = $this -> db_conn -> prepare("SELECT idUser FROM User WHERE idUser=?");
					$query -> execute(array($username));
					if($result = $query -> fetch()){
						$query -> closeCursor();
						return true;
					}
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		public function save_new_user($username,$password,$name){
			if(!empty($username) and !empty($password) and !empty($name) and !($this -> check_username_exists($username))){
				try{
					$query = $this -> db_conn -> prepare("INSERT INTO User(idUser,username,password,name,status) VALUES('',?,MD5(?),?,1))");
					$query -> execute(array($username,$password,$name));
					if($result = $query -> fetch()){
						$query -> closeCursor();
						return true;
					}
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		public function check_user_login($username,$password){
			if(!empty($username) and !empty($password)){
				try{
					$query = $this -> db_conn -> prepare("SELECT idUser FROM User WHERE username=? and password=?");
					$query -> execute(array($username,$password));
					if($result = $query -> fetch()){
						$query -> closeCursor();
						return true;
					}
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		public function changer_user_statuts($id_user,$new_status){
			if(!empty($id_user) and !empty($new_status)){
				try{
					$query = $this -> db_conn -> prepare("UPDATE User SET status=? WHERE idUser=?");
					$query -> execute(array($new_status,$id_user));
					if($result = $query -> fetch()){
						$query -> closeCursor();
						return true;
					}
				}catch(Exception $err){$this -> process_exception($err);}
			}
		}
		
		protected function process_exception($exception){
			die($exception -> getMessage());
		}
	}
