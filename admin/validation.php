<?php

include_once("../classes/tools.php");

validate();
    
function validate(){ 
    if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['password']))) {
        header("Location: ../login.php"); 
        exit;
    }

    $sLogin = $_POST['login'];
    $sPassword = $_POST['password'];

    if (!TestarLoginPasswordValidos($sLogin, $sPassword)){ 
        
        echo"<script language='javascript' type='text/javascript'>alert('Login invalido!');window.location.href='../login.php'</script>";
         
        exit;
    } else {   
        if (!isset($_SESSION)) session_start();
      
        // $_SESSION['id'] = $result['id'];
        $_SESSION['login'] = $sLogin;
      
        header("Location: index.php");

        exit;
    }
      
}

function getSelectLoginPassword($psLogin, $psPassword){
       return "SELECT " .
        "id, login " . 
        "FROM " . 
        "usuarios ".
        "WHERE " .
        "login = ? AND " . 
        "senha = '". SHA1($psPassword) ."' " . 
        "LIMIT 1";
    }

function TestarLoginPasswordValidos($psLogin, $psPassword){
     
    $oTools = new Tools();

    try {
    $oConn = $oTools->getConn();

    $sSql = getSelectLoginPassword($psLogin, $psPassword);

    $oStmt = $oConn->prepare($sSql);

    $oStmt->bind_param('s', $psLogin);

    $oStmt->execute();

    $oStmt->store_result();

    $bLoginPasswordValidos = $oStmt->num_rows > 0;

    $oStmt->free_result();

    $oStmt->close();

    $oConn->close();

    } catch(Exception $e){
    echo 'Caught exception: '.  $e->getMessage(). "\n";
    }

    return $bLoginPasswordValidos;
    }
?>