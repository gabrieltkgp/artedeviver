<?php
	if (isset($_POST['data'])){
		$idEstado = $_POST['data'];

		include_once("classes/components.php");
        $oComponent = new Components();
        echo $oComponent->createCidadesDropDown($idEstado);
	}
?>