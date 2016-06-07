$(document).ready(function() {
    $("#selection_estados").change(function() {
        $.ajax({
            type: "POST",
            data: "data=" + $(this).val(),
            url: "carregarCidades.php",
            success: function(msg) {
                if (msg != '') {
                    $("#selection_cidades").html(msg).show();
                }
            }
        });
    });

    $("#pesquisar").submit(function() {
        $('#email_input').reset();
        $('#selection_estados').reset();
        $('#selection_cidades').reset();
    });
});

function valida_form() {
    var x = document.forms["form1"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Digite um e-mail válido.");
        return false;
    }
    return true;
}