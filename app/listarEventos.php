<?php
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");

if (isset($_POST['email'])){
	if (strtoupper($_POST['email']) == 'ADMINJGD'){
		header("Location: ../admin/login.php");
	}
}
else{
	if (isset($_COOKIE['email']) and (!isset($_POST['email']))){
		$_POST['email'] = $_COOKIE['email'];
	}

	if (isset($_COOKIE['idCidade']) and (!isset($_POST['idCidade']))){
		$_POST['idCidade'] = $_COOKIE['idCidade'];
	}

	if (isset($_POST['email'])){
		setcookie('email', $_POST['email'], (time()+3600*24*365));
		// setcookie('email', $_POST['email']);
	}

	if (isset($_POST['idCidade'])){
		setcookie('idCidade', $_POST['idCidade'], (time()+3600*24*365));
		// setcookie('idCidade', $_POST['idCidade']);
	}
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Eventos Arte de Viver</title>
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/> -->
<link href="../css/meuestilo.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- <script src="js/jquery.min.js"></script> -->
<script src="../jquery/filtro.js"></script>
</head>
<body onLoad="reduzLogo();">
<div class="element">
	<div class="trocar_email"><a href='trocarEmail.php'><img src="../images/voltar.png" class="voltar"></a></div>
		<div class="element-block2-left">
			<?php 
				include_once("../classes/eventosQuery2.php");

				$eventosQuery = new EventosQuery2();

				$bEmailValido = $eventosQuery->TestarSeEmailValido($_POST['email']);

				if ($bEmailValido){
					echo "<div class='signin2'>";
				}else{
					echo "<div class='signin'>";
				}
		 	?>
		<!-- <div class="signin"> -->
				<!--div abaixo vira um includo de filtro -->
                <div class="div_filtro"><?php include("montaFiltro.php"); ?></div> 
				<div class="div_logo"><img src="../images/icone2.png" class="logo"></div>
				<div class="nome_cidade"><?php include("nomeCidade.php"); ?></div>		
				<div class="todos_eventos"><?php include("eventosConsulta.php"); ?></div>
			</div>
		</div>
</div>
</body>
</html>
