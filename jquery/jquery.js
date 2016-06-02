$(document).ready(function() {
    $("#selectionresult").hide();
    $("#selection").change(function() {
        $("#selectionresult").hide();
        $("#result").html('Retrieving...');
        $.ajax({
            type: "POST",
            data: "data=" + $(this).val(),
            url: "demo.php",
            success: function(msg) {
                if (msg != '') {
                    $("#selectionresult").html(msg).show();
                    $("#result").html('');
                } else {
                    $("#result").html('<em>No item result</em>');
                }
            }
        });
    });

    $("#selection_estados").change(function() {
        // $("#selectionresult").hide();
        // $("#result").html('Retrieving...');
        $.ajax({
            type: "POST",
            data: "data=" + $(this).val(),
            url: "carregarCidades.php",
            success: function(msg) {
                if (msg != '') {
                    $("#selection_cidades").html(msg).show();
                    // $("#result").html('');
                } //else {
                //    $("#result").html('<em>No item result</em>');
                //}
            }
        });
    });

    $("#pesquisar").submit(function() {
        $('#email_input').reset();
        $('#selection_estados').reset();
        $('#selection_cidades').reset();
    });
});