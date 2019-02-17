<?php
    if (isset($_COOKIE['email'])) {
    	unset($_COOKIE['email']);
    	setcookie('email', '', time() - 3600);
    }
    if (isset($_COOKIE['idCidade'])) {
    	unset($_COOKIE['idCidade']);
    	setcookie('idCidade', '', time() - 3600);
    }

    header("Location: index.php"); 
    exit; 
?>