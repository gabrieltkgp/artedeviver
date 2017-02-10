<?php
include_once("../classes/eventosQuery2.php");

$eventosQuery = new EventosQuery2();

$filtroArray = $eventosQuery->MontarFiltro($_POST['email'], $_POST['idCidade']);

//print_r($filtroArray);

if (empty($filtroArray)) {
//        exit;
} else {

	$i = 1;

	foreach($filtroArray as $filtro){
	//	echo "Teeste de linha <br>";
	//	echo $filtro->getId() ." -- ". $filtro->getDescricao() ." <br>";
		echo "<input type=\"checkbox\" name=\"". $filtro->getDescricao() ."\" value=\"".$filtro->getId() ."\" ";
		echo " checked=\"checked\" onChange=\"escondeDiv(".$filtro->getId() .",this.checked);\" ";
		echo " class=\"checkbox\">". $filtro->getDescricao() ." ";
	}
}
?>
