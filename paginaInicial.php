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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script src="jquery/jquery.js"></script>
</head>
<body>

<div class="element">
	<div class="element-block2-left">
		<div class="signin">	
			<div class="div_logo"><img src="images/icone.jpg" class="logo"></div>	
			<form action="listarEventos.php" method="post" id="form1">
				<div>
					<div id="email_label">E-mail:</div>
					<input id="email_input" name="email" type="text" class="campo"/>
		
					<div id="label_estado">Estado:</div>
					<?php 
						include_once("classes/components.php");
						$oType = new Components();
						echo $oType->createEstadosDropDown();
					?>
	    
	    			<br>
	    
				    <div id="label_cidade">Cidade:</div>
				    <?php 
				    	include_once("classes/components.php");
				    	$oType = new Components();
				    	echo $oType->createDropDownEmpty("selection_cidades", "idCidade");
				    ?>
				    
				    <br>

				    <button type="submit" form="form1" value="Submit">Pesquisar</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>