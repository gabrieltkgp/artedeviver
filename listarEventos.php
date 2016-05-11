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
			<div class="signin">
				<?php
	            	include("/classes/eventosQuery.php");

                	$eventosQuery = new EventosQuery();

                	$eventosArray = $eventosQuery->getEventosCadastrados($_GET['email'], $_GET['idCidade']);

              		if (empty($eventosArray)) {
              	    	exit;
              	  	}
                
               		foreach($eventosArray as $evento){  
			        	echo "<div id=''>";
			        	echo             "<div class=''>".$evento->getNome()."</div>";
			        	echo             "<div class=''>".$evento->getEndereco()."</div>";
			        	echo             "<div class=''>".$evento->getObservacao()."</div>";
			        	echo             "<div class=''>".$evento->getData()."</div>";
			        	echo             "<div class=''>".$evento->getNomeCidade()."</div>";
			        	echo             "<div class=''>".$evento->getNomeEstado()."</div>";
			        	echo 	"<br>";     
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