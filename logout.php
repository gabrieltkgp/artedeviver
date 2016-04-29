<?php
    session_start(); 
    session_destroy(); 
    header("Location: p2-login.php"); 
    exit; 
?>