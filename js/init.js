$(document).ready(function () {
    
    $(".autocomplete_cod").autocomplete({
        source: site_url("atendimento/cod_loterico_json"),
        select: function (event, ui) {
            $(this).val($.trim(ui.item.value.substr(8)));
            // var tt = $("input name['cod_loterico']").val();
            // $("input name['cod_loterico']").prop('title',tt);

        },
        minLength: 2
    });
    $("input[name='cod_loterico']").on("change",function(){
        var tt = $("input[name='cod_loterico']").val();
        $("input[name='cod_loterico']").prop('title',tt);
    });


});