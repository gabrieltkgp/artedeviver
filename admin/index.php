<!DOCTYPE html>

<!-- <?php
// include_once("classes/tools.php");
// $oTools = new Tools();
// $oTools->isUserLogged();
?> -->


<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- <script type="text/javascript" src="jquery-1.3.2.min.js"></script> -->
<script src="../jquery/jquery.js"></script>
<script src="../jquery/admin.js"></script>

    <title>Arte de viver</title>
</head>
<body>
    <div class="p2-main-content-title">ADMIN</div>
    <div id="readData">
        <div id="label_id">Evento Id:</div>
        <input name="id" id="id" type="text" />
        <input value="Load" onclick="getById();" type="button" />
    </div>
    <hr />
    <h2>Inserir novo evento:</h2>
    <form action="admin.php">
        <div class="label">Nome:</div>
        <input name="evento_nome" type="text" />

        <div class="label">Local:</div>
        <input name="evento_local" type="text" />

        <div class="label">Endereco:</div>
        <input name="evento_endereco" type="text" />

        <div class="label">Observacao:</div>
        <input name="evento_observacao" type="text" />

        <!-- <div class="label">Estado:</div> -->
        <!-- <?php 
            //include_once("../classes/components.php");
           // $oType = new Components();
           // echo $oType->createEstadosDropDown();
        ?> -->
        <br>
        <div class="cidade">
            <div id="label_cidade">Cidade:</div>
            <?php 
                include_once("../classes/components.php");
                $oType = new Components();
                //echo $oType->createDropDownEmpty("selection_cidades", "idCidade");
                echo $oType->createCidadesDropDown();
            ?>
        </div>
        <div class="label">Data:</div>
        <input name="evento_data" type="date" />
        <input name="evento_hora" type="time" />

        <div class="label">Abrangencia:</div>
        <input type="radio" name="evento_privado" value="1" > Publico
        <input type="radio" name="evento_privado" value="2" checked> Privado
        
        <div class="label">Link:</div>
        <input name="evento_link" type="text" />
        
        <br>
        <input value="Inserir evento" onclick="insertData();" type="button" /><br/>
    </form>
    <hr />
    <h2>Registros:</h2>
    <div id="resultdiv"></div>
</body>
</html>