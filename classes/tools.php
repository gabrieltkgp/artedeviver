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
      
	    if (!isset($_SESSION['login'])) {
	        session_destroy();
	        header("Location: ../admin/login.php"); 
	    } 
	}
}
?> 