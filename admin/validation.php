<?php

validate();
    
function validate(){ 
    if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['password']))) {
        header("Location: ../login.php"); 
        exit;
    }

    mysql_connect('localhost', 'root', 'asd') or trigger_error(mysql_error());
    
    mysql_select_db('webapi') or trigger_error(mysql_error());
      
    $login = mysql_real_escape_string($_POST['login']);
    $password = mysql_real_escape_string($_POST['password']);

    $sql = "SELECT " .
        "id, login " . 
        "FROM " . 
        "usuarios ".
        "WHERE " .
        "login = '".$login ."' AND " . 
        "senha = '". SHA1($password) ."' " . 
        "LIMIT 1";

    $query = mysql_query($sql);

    if (mysql_num_rows($query) != 1){ 
        
        echo"<script language='javascript' type='text/javascript'>alert('Login invalido!');window.location.href='../login.php'</script>";
         
        exit;
    } else {
        
        $result = mysql_fetch_assoc($query);
      
        if (!isset($_SESSION)) session_start();
      
        $_SESSION['id'] = $result['id'];
        $_SESSION['login'] = $result['login'];
      
        header("Location: index.php");

        exit;
    }
      
}
?>