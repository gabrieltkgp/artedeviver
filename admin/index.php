<!DOCTYPE html>

 <?php
 include_once("../classes/tools.php");
 $oTools = new Tools();
 $oTools->isUserLogged();
?> 


<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- <script type="text/javascript" src="jquery-1.3.2.min.js"></script> -->
<script src="../jquery/jquery.js"></script>
<script src="../jquery/admin.js"></script>
<title>Admin Respira</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css/meuestilo.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<div class="element">
<div class="trocar_email"><a href='trocarEmail.php'>Voltar</a></div>
    <div class="element-block2-left">
        <div class="signin">
            <div id="readData">
                <b>PESQUISAR EVENTOS:</b>
                <div class="label" id="label_id">ID:</div>
                <input class="campo" name="id" id="id" type="text" />
                <div class="cidade">
                    <div class="label" id="label_cidade">CIDADE:</div>
                    <?php 
                        include_once("../classes/components.php");
                        $oType = new Components();
                        echo $oType->createCidadesDropDown();
                    ?>
                </div>
                <input class="btn" value="Pesquisar" onclick="getById();" type="button" />
            </div>
            <hr/>
            <b>INSERIR NOVO EVENTO:</b>
            <form action="admin.php">
                <div class="label">NOME:</div>
                <input class="campo" name="evento_nome" type="text" />

                <div class="label">LOCAL:</div>
                <input class="campo" name="evento_local" type="text" />

                <div class="label">ENDEREÇO:</div>
                <input class="campo" name="evento_endereco" type="text" />

                <div class="label">OBSERVAÇÃO:</div>
                <input class="campo" name="evento_observacao" type="text" />

                <!-- <div class="label">Estado:</div> -->
                <!-- <?php 
                    //include_once("../classes/components.php");
                   // $oType = new Components();
                   // echo $oType->createEstadosDropDown();
                ?> -->
                <div class="cidade">
                    <div class="label" id="label_cidade">CIDADE:</div>
                    <?php 
                        include_once("../classes/components.php");
                        $oType = new Components();
                        echo $oType->createCidadesDropDown();
                    ?>
                </div>
                <div class="label">DATA:</div>
                <input class="campo" name="evento_data" type="date" />
                <input class="campo" name="evento_hora" type="time" />

                <div class="label">ABRANGÊNCIA:</div>
                <input type="radio" name="evento_privado" value="0" checked> Publico
                <input type="radio" name="evento_privado" value="1"> Privado

                <div class="tipoEvento">
                    <div class="label" id="label_tipoEvento">TIPO DE EVENTO:</div>
                    <?php 
                        include_once("../classes/components.php");
                        $oType = new Components();
                        echo $oType->createTipoEventosDropDown();
                    ?>
                </div>
                
                <div class="label">LINK:</div>
                <input class="campo" name="evento_link" type="text" />

                <div class="label">GOOGLE MAPS:</div>
                <input class="campo" name="evento_map" type="text" />
                <br>
                <input class="btn" value="Inserir evento" onclick="insertData();" type="button" /><br/>
            </form>
            <hr />
            <b>RESULTADO: </b>
            <div id="resultdiv"></div>
        </div>
    </div>
</div>
</body>
</html>