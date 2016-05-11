<?php
include_once("consultarCidades.php");

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    //header('WWW-Authenticate: Basic realm="My Realm"');
    //header('HTTP/1.0 401 Unauthorized');
    exit;
} 
	
if ($_SERVER['PHP_AUTH_USER'] != $auth_username){
	//header('WWW-Authenticate: Basic realm="My Realm"');
   // header('HTTP/1.0 401 Unauthorized');
    exit;
}

if (sha1($_SERVER['PHP_AUTH_PW']) != $auth_password){
	//header('WWW-Authenticate: Basic realm="My Realm"');
   // header('HTTP/1.0 401 Unauthorized');
    exit;
}

$oConsultarCidades = new ConsultarCidades();

$oConsultarCidades->Consultar();
?>