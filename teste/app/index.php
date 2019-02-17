<?php
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");

if (isset($_COOKIE['email'])){
	header("Location: listarEventos.php");
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Eventos Arte de Viver</title>
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/> -->
<link href="../css/meuestilo.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- <script type="text/javascript" src="jquery-1.3.2.min.js"></script> -->
<!-- <script type="text/javascript" src="jquery-2.2.4.min.js"></script> -->
<script src="../jquery/jquery.js"></script>
</head>
<body>

<div class="element">
	<div class="element-block2-left">
		<div class="signin">	
			<div class="div_logo"><img src="../images/icone2.png" class="logo"></div>	
			<div class="titulo">Respira</div>
			<div class="texto">Aulas gratuitas de <b>Yoga</b> e <b>Meditação</b>, 
								Cursos para desenvolvimento pessoal e eventos da Arte de Viver. </div>
			<!-- <form action="listarEventos.php" method="post" id="form1" onSubmit="return ( valida_form() )"> -->
			 <form action="listarEventos.php" method="post" id="form1">
				<div class="dados_form">
					<div class="codigo">
						<div class="label">CÓDIGO DE ACESSO (OPCIONAL):</div>
						<input id="email" name="email" type="text" class="campo"/>
					</div>
		
					<!-- <div id="label_estado">Estado:</div> -->
					<!-- <?php
						// include_once("classes/components.php");
						// $oType = new Components();
						// echo $oType->createEstadosDropDown();
					?>  -->
	    
	    			<!-- <br> -->
	    			<div class="cidade">
				   		<div class="label">CIDADE:</div>
					    <?php 
					    	include_once("../classes/components.php");
					    	include_once("../classes/constants.php");
					    	$oType = new Components();
					    	// echo $oType->createCidadesDropDown(SANTA_CATARINA);
					    	echo $oType->createCidadesDropDown();
					    ?>
				    </div>
				    
				    <!-- <br> -->
				    <div class="botao">
				    	<button id="pesquisar" class="btn" type="submit" form="form1" value="Submit">Pesquisar</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>