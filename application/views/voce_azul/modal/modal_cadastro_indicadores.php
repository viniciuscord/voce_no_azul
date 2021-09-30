<div class="modal-dialog modal-md">
    <div class="modal-content" style="margin-left:-150px; width:180%;">
        <div class="modal-header">
            <h4>Cadastro Indicadores</h4>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-dismiss="modal" id="remove_modal">
                <i class="fas fa-times"></i>
            </button> 
        </div>
        <div class="modal-body">
            <form id="formCadastroInterage">
            <div class="row">
                <div class="col-sm-3">
                    <label for="input-data-ini">Data*:</label>
                    <span class="fa fa-calendar"></span>
                    <div class="input-group">
                        <div class="input-group-addon"></div>
                        <input type="text" class="form-control input-sm datetimepicker date-mask" id="input-data" name="input-data" value="<?php echo date('d/m/Y')?>"  style="border-top-left-radius: 0px; border-bottom-left-radius: 0px;">    
                    </div>
                    <span id="input_data_error" class="text-danger"></span>
                </div>
                <br>
                <div class="col-sm-4">
                    <label for="tipo_ocorr">Canal*:</label>
                    <div class="input-group">
                        <select class="form-control input-sm" id="canal" name="canal">
                            <option value=""></option>
                            <option value="1">Telefonia</option>
                            <option value="2">WhatsApp</option>
                            <option value="3">Redes Sociais</option>
                            <option value="4">Negociar Dívidas</option>
                        </select>
                    </div>
                    <span id="input_canal_error" class="text-danger"></span> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <div class="input-group">
                        <label for="tipo_ocorr">Atendidas:
                            <input type="numeric" class="form-control input-sm" id="atendidas" name="atendidas"/>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <label for="tipo_ocorr">Você no Azul:
                            <input type="numeric" class="form-control input-sm" id="voce_azul" name="voce_azul"/>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <label for="tipo_ocorr">Boletos Enviados:
                            <input type="numeric" class="form-control input-sm" id="boletos_enviados" name="boletos_enviados"/>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <label for="tipo_ocorr">Transferidos da CEACR:
                            <input type="numeric" class="form-control input-sm" id="transfer_ceacr" name="transfer_ceacr"/>
                        </label>
                    </div>
                </div>
            </div>
            </form>
            <div id="alert-info"></div> 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="salvar" ><span class="fa fa-floppy-o"></span> Salvar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="fa fa-arrow-left"></span> Voltar</button>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $("input[name='atendidas']").mask("00000000", { 'translation':{ 0: { pattern: /[0-9*]/ }}}); 
    $("input[name='voce_azul']").mask("00000000", { 'translation':{ 0: { pattern: /[0-9*]/ }}}); 
    $("input[name='boletos_enviados']").mask("00000000", { 'translation':{ 0: { pattern: /[0-9*]/ }}}); 
    $("input[name='transfer_ceacr']").mask("00000000", { 'translation':{ 0: { pattern: /[0-9*]/ }}}); 

    $(".datetimepicker").datetimepicker({
        timepicker : false,
        step : 5,
        format :'d/m/Y',
        formatDate :'d/m/Y',
        scrollMonth : false,
        scrollInput : false,
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        maxDate : 0,
    });


    $("#salvar").on("click",function(){
        if(formValida()){
            var form = $('#formCadastroInterage').serialize();
            var url = "cadastro_interage";
            $.ajax({
                url : url, 
                type : "POST",
                dataType: "html",
                data : form,
                beforeSend : function(){
                    // alert('teste1');
                    // $(".overlay").show();
                },success: function(data){
                    // console.log(data);
                    // $("#dv-table-1").html(data);
                    alert('Cadastro realizado com sucesso!');
                    $("#remove_modal").trigger("click");
                    $("#dv-table-1").html(data);
                    // $("#dv-table-2").html(data);
                    $("#buscar").trigger("click");
                },error: function(){
                    alert('Erro!Entrar em contato com o Administrador.');
                    $("#remove_modal").trigger("click");
                }  
            }); 
        } 

    $(".date-mask").mask('00/00/0000');


    function formValida() {
        valid = true;
        
            if($("#canal").val()=="" || $("#canal").val() == null){
                valid = false;
                $("#canal").css({'border-color': '#a94442'});
                $("#input_canal_error").html("Campo obrigatório!");
            }else{
                $("#canal").css({'border-color': 'lightgrey'});
                $("#input_canal_error").html('');
            }

            if($("#input-data").val()=="" || $("#input-data").val() == null){
                valid = false;
                $("#input-data").css({'border-color': '#a94442'});
                $("#input_data_error").html("Campo obrigatório!");
            }else{
                $("#input-data").css({'border-color': 'lightgrey'});
                $("#input_data_error").html('');
            }

            return valid;
    }

});

});

</script>