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
        <div id="label_nome">Nome:</div>
        <input name="evento_nome" type="text" />

        <div id="label_local">Local:</div>
        <input name="evento_local" type="text" />

        <div id="label_estado">Estado:</div>
        <?php 
            include_once("../classes/components.php");
            $oType = new Components();
            echo $oType->createEstadosDropDown();
        ?>
        <br>
        <div class="cidade">
            <div id="label_cidade">Cidade:</div>
            <?php 
                include_once("../classes/components.php");
                $oType = new Components();
                echo $oType->createDropDownEmpty("selection_cidades", "idCidade");
            ?>
        </div>
        <div id="label_data">Data:</div>
        <input name="evento_data" type="date" />
        <input name="evento_hora" type="time" />

        <div id="label_abrangencia">Abrangencia:</div>
        <input type="radio" name="evento_privado" value="1" > Publico
        <input type="radio" name="evento_privado" value="2" checked> Privado
        <br>
        <input value="Inserir evento" onclick="insertData();" type="button" /><br/>
    </form>
    <hr />
    <h2>Registros:</h2>
    <div id="resultdiv"></div>
</body>
</html>