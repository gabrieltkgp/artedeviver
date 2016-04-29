function uploadTask(id){
    if (!confirm("deseja confirmar?")){
        return;
    }
    
    //var form = document.getElementById(id);
    var form = $('#form_' + id)[0];
    var formData = new FormData(form);
    formData.append("task_id", id);

    $.ajax({
        type: "POST",
        url: "classes/p2-admin-update-task.php",
        data: formData,
        processData: false,
        contentType: false,
        
        success: function(data) {
            alert("success");
        },
        error: function(e) {
            alert("error");
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
    var result = document.getElementById("result");
    var XMLHttp = generateXMLHttp();
    XMLHttp.open("get", "classes/getDataAdmin.php?id=" + id, true);
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
    var result = document.getElementById("result");

    var XMLHttp = generateXMLHttp();
    XMLHttp.open("post", "classes/inserirEventos.php", true);
    XMLHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    XMLHttp.onreadystatechange = function() {
        if (XMLHttp.readyState == 4)
            result.innerHTML = XMLHttp.responseText;
        else
            result.innerHTML = "Error: " + XMLHttp.statusText;
    };
    XMLHttp.send(fieldsValues);
}
