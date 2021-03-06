
function updateEvento(id){
    if (!confirm("deseja confirmar?")){
        return;
    }
    
    //var form = document.getElementById(id);
    var form = $('#form_' + id)[0];
    var formData = new FormData(form);
    formData.append("evento_id", id);

    var result = document.getElementById("resultdiv");

    $.ajax({
        type: "POST",
        url: "../admin/updateEvento.php",
        data: formData,
        processData: false,
        contentType: false,
        
        success: function(data) {
            //alert("Evento alterado com sucesso.");
            result.innerHTML = "Evento alterado com sucesso";
        },
        error: function(e) {
            //alert("Erro!");
            result.innerHTML = "Erro ao alterar evento";
        }
    });
}

function generateXMLHttp() {
    if (typeof XMLHttpRequest != "undefined") {
        return new XMLHttpRequest();
    } else {
        if (window.ActiveXObject) {
            var versions = ["MSXML2.XMLHttp.5.0",
                "MSXML2.XMLHttp.4.0",
                "MSXML2.XMLHttp.3.0",
                "MSXML2.XMLHttp",
                "Microsoft.XMLHttp"
            ];
        }
    }
    for (var i = 0; i < versions.length; i++) {
        try {
            return new ActiveXObject(versions[i]);
        } catch (e) {}
    }
    alert('Your browser cannot work with Ajax!');
}

function getById() {
    var id = document.getElementById("id").value;
    var idCidade = document.getElementById("idCidade").value;

    var result = document.getElementById("resultdiv");
    var XMLHttp = generateXMLHttp();
    XMLHttp.open("get", "../admin/getDataAdmin.php?id=" + id + "&idCidade=" + idCidade, true);
    XMLHttp.onreadystatechange = function() {
        if (XMLHttp.readyState == 4)
            if (XMLHttp.status == 200) {
                result.innerHTML = XMLHttp.responseText;
            } else {
                result.innerHTML = "Error: " + XMLHttp.statusText;
            }
    };
    XMLHttp.send(null);
}

function generateFieldsValues(formInsert) {
    var strReturn = new Array();

    for (var i = 0; i < formInsert.elements.length; i++) {
        if (formInsert.elements[i].type == "radio"){
            if (formInsert.elements[i].checked == false){
                continue;
            }
        }

        var str = encodeURIComponent(formInsert.elements[i].name);
        str += "=";
        str += encodeURIComponent(formInsert.elements[i].value);
        strReturn.push(str);
    }
    return strReturn.join("&");
}

function insertData() {
    var formInsert = document.forms[0];
    var fieldsValues = generateFieldsValues(formInsert);
    var result = document.getElementById("resultdiv");

    var XMLHttp = generateXMLHttp();
    XMLHttp.open("post", "../admin/inserirEvento.php", true);
    XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    XMLHttp.onreadystatechange = function() {
        if (XMLHttp.readyState == 4)
            result.innerHTML = XMLHttp.responseText;
        else
            result.innerHTML = "Error: " + XMLHttp.statusText;
    };
    XMLHttp.send(fieldsValues);
}

function deleteEvento(id){
    if (!confirm("deseja confirmar?")){
        return;
    }
    
    //var form = document.getElementById(id);
    var form = $('#form_' + id)[0];
    var formData = new FormData(form);
    formData.append("evento_id", id);
    var result = document.getElementById("resultdiv");

    $.ajax({
        type: "POST",
        url: "../admin/deleteEvento.php",
        data: formData,
        processData: false,
        contentType: false,
        
        success: function(data) {
            //alert("Evento excluído com sucesso.");
            result.innerHTML = "Evento excluído com sucesso";
        },
        error: function(e) {
            //alert("Erro!");
            result.innerHTML = "Erro ao excluir evento";
        }
    });
}
