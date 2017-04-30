<?php
	if(!empty($_POST)){
		if(!empty($_POST['u']) and !empty($_POST['p'])){
			$username = htmlspecialchars(addslashes($_POST['u']));
			$password = htmlspecialchars(addslashes($_POST['p']));
			
			session_start();
			$_SESSION['status'] = "xEldf";
			if(strtolower($username) == "customer"){
				$_SESSION['status'] = "xEldfs";
				header("location:../user.ticket.zone.php");
			}else{
				header("location:../index.php");
			}			
		}else{
			header("location:../login.php");
		}
	}
