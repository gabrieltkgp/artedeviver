<?php
class Tools{
	function getConn(){
		require('config.php');
	  	$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn ->connect_error){
		    die("Connection Failed: ".$conn->connect_error);
		}

		$progress = "1";

		if (strrpos($_SERVER['REQUEST_URI'],'upload-files') <> 0) {
			$progress = "2";
		}

		return $conn;
	}

	function isUserLogged(){
		
		if (!isset($_SESSION)){
        	session_start();
		}
      
	    if (!isset($_SESSION['cust_id'])) {
	        session_destroy();
	        header("Location: p2-login.php"); 
	    } 
	}

	function isAdminLogged(){
		
		if (!isset($_SESSION)){
        	session_start();
		}
      
	    if (!isset($_SESSION['cust_id'])) {
	        session_destroy();
	        header("Location: p2-login.php"); 
	        return;
	    }

	    if ($_SESSION['cust_level'] <> ADMIN) {
	        header("Location: p2-upload-files-beta1.php?login=" . $_SESSION['cust_login'] . "&project=1");
	    }
	}
}
?> 