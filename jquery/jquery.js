$(document).ready(function() {
    $("#selection_estados").change(function() {
        $.ajax({
            type: "POST",
            data: "data=" + $(this).val(),
            url: "../classes/carregarCidades.php",
            success: function(msg) {
                if (msg != '') {
                    $("#selection_cidades").html(msg).show();
                }
            }
        });
    });
});