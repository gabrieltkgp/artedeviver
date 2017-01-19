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

	function getClientIp() {
      $ipaddress = '';
      if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
      else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
      else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
      else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
      else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
      else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
      else
        $ipaddress = 'UNKNOWN';

     return $ipaddress; 
	}
}
?> 