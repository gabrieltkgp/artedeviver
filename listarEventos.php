<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Eventos Arte de Viver</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/meuestilo.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- <script src="js/jquery.min.js"></script> -->
</head>
<body>
<div class="element">
	
		<div class="element-block2-left">
			<div class="signin">
				<div class="div_logo"><img src="images/logo.png" class="logo"></div>
				<?php include("nomeCidade.php"); ?>		
				<?php include("eventosConsulta.php"); ?>
			</div>
		</div>
</div>
</body>
</html>