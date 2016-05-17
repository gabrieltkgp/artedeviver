<!DOCTYPE HTML>
<html>
<head>
<title>Eventos Arte de Viver</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="js/jquery.min.js"></script>
<script>$(document).ready(function(c) {
			$('.contact-close').on('click', function(c){
				$('.contact-text').fadeOut('slow', function(c){
					$('.contact-text').remove();
				});
				});	  
			});
</script>
<script>$(document).ready(function(c) {
		$('.small-contact-close').on('click', function(c){
			$('.small-contact-text').fadeOut('slow', function(c){
				$('.small-contact-text').remove();
			});
			});	  
		});
   </script>
</head>
<body>
<!--header strat here-->
<div class="element">
	<h1>Eventos Arte de viver</h1>
	<!-- <div class="element-block2"> -->
		<div class="element-block2-left">
			<div class="signin"
>				<?php
	            	include("classes/eventosQuery2.php");

                	$eventosQuery = new EventosQuery2();

                	$eventosArray = $eventosQuery->ConsultarEventosCadastrados($_GET['email'], $_GET['idCidade']);

              		if (empty($eventosArray)) {
              	    	exit;
              	  	}
                
               		foreach($eventosArray as $evento){  
			        	echo "<div id=''>";
			        	echo   "<div class='esquerda'>Evento: </div> <div class='direita'>". $evento->getNome() ."</div>";
			        	echo   "<div class='esquerda'>Endereço: </div> <div class='direita'>". $evento->getEndereco() ."</div>";
			        	echo   "<div class='esquerda'>Observação: </div> <div class='direita'>". $evento->getObservacao() ."</div>";
			        	echo   "<div class='esquerda'>Data: </div> <div class='direita'>". $evento->getData() ."</div>";
			        	echo   "<div class='esquerda'>Cidade: </div> <div class='direita'>". $evento->getNomeCidade() ."</div>";
			        	echo   "<div class='esquerda'>Estado: </div> <div class='direita'>". $evento->getNomeEstado() ."</div>";
			        	echo   "<br>";     
			        	echo "</div>";
					}
	       		?>
			
			</div>
		</div>
	<!-- </div> -->
</div>
<!--header end here-->
</body>
</html>