<div class="row">
    <div class="col-sm-2">
        <input type="checkbox" id="mostrar_todos_3" name="mostrar_todos_3">
        <label for="mostrar_todos_3">Mostrar Todos</label>
    </div>
    <div class="col-sm-2">
        <input type="checkbox" id="macro_3" name="macro_3">
        <label for="macro_3">Visão Macro</label>
    </div>
    <div class="col-sm-2">
        <input type="checkbox" id="detalhada_3" name="detalhada_3">
        <label for="detalhada_3">Visão Detalhada</label>
    </div>
</div>
<div class="row detalhada">
    <div class="col-md-3" id="telefonia3">
    <div class="card card-widget widget-user-2">
        <div class="small-box bg-info">
        <div class="inner">
            <h4 style="color:white;"><b>Telefonia</b></h4>
        </div>
        <div class="icon" style="top:-40px;">
            <i class="fas fa-phone" style="font-size:50px;"></i>
        </div>
        <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-telefonia_3">
            Detalhes <i class="fas fa-plus"></i>
        </a>
        </div>
    <div class="card-footer p-0" style="display:none;" id="card-footer-telefonia_3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link">
            <div>
                Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[0]['Atendidas'] == 0 ? "-" : $dados[0]['Atendidas']; ?></span>
            </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[0]['Voce no Azul'] == 0 ? "-" : $dados[0]['Voce no Azul']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[0]['Boletos Enviados'] == 0 ? "-" : $dados[0]['Boletos Enviados']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados[0]['Transferida da CEACR'] == 0 ? "-" : $dados[0]['Transferida da CEACR']; ?></span>
            </a>
        </li>
        </ul>
    </div>
    </div>
    </div>
    <div class="col-md-3" id="whatsapp3">
    <div class="card card-widget widget-user-2">
        <div class="small-box bg-success">
        <div class="inner">
        <h4 style="color:white;"><b>WhatsApp</b></h4>
        </div>
        <div class="icon" style="top:-40px;">
            <i class="fab fa-whatsapp" style="font-size:50px;"></i>
        </div>
        <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-whatsapp_3">
            Detalhes <i class="fas fa-plus"></i>
        </a>
        </div>
    <div class="card-footer p-0" style="display:none;" id="card-footer-whatsapp_3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link">
            <div>
                Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[1]['Atendidas'] == 0 ? "-" : $dados[1]['Atendidas']; ?></span>
            </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[1]['Voce no Azul'] == 0 ? "-" : $dados[1]['Voce no Azul']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[1]['Boletos Enviados'] == 0 ? "-" : $dados[1]['Boletos Enviados']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados[1]['Transferida da CEACR'] == 0 ? "-" : $dados[1]['Transferida da CEACR']; ?></span>
            </a>
        </li>
        </ul>
    </div>
    </div>
    </div>
    <div class="col-md-3" id="redes3">
    <div class="card card-widget widget-user-2">
        <div class="small-box bg-primary">
        <div class="inner">
        <h4 style="color:white;"><b>Redes Sociais</b></h4>
        </div>
        <div class="icon" style="top:-40px;">
            <i class="fas fa-users" style="font-size:50px;"></i>
        </div>
        <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-redes_3">
            Detalhes <i class="fas fa-plus"></i>
        </a>
        </div>
    <div class="card-footer p-0" style="display:none;" id="card-footer-redes_3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link">
            <div>
                Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[2]['Atendidas'] == 0 ? "-" : $dados[2]['Atendidas']; ?></span>
            </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[2]['Voce no Azul'] == 0 ? "-" : $dados[2]['Voce no Azul']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[2]['Boletos Enviados'] == 0 ? "-" : $dados[2]['Boletos Enviados']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados[2]['Transferida da CEACR'] == 0 ? "-" : $dados[2]['Transferida da CEACR']; ?></span>
            </a>
        </li>
        </ul>
    </div>
    </div>
    </div>
    <div class="col-md-3" id="dividas3">
    <div class="card card-widget widget-user-3">
        <div class="small-box bg-secondary">
        <div class="inner">
            <h4 style="color:white;"><b>Negociar Dívidas</b></h4>
        </div>
        <div class="icon" style="top:-40px;">
            <i class="fas fa-money-check-alt" style="font-size:50px;"></i>
        </div>
        <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-dividas_3">
            Detalhes <i class="fas fa-plus"></i>
        </a>
        </div>
    <div class="card-footer p-0" style="display:none;" id="card-footer-dividas_3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link">
            <div>
                Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[3]['Atendidas'] == 0 ? "-" : $dados[3]['Atendidas']; ?></span>
            </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[3]['Voce no Azul'] == 0 ? "-" : $dados[3]['Voce no Azul']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[3]['Boletos Enviados'] == 0 ? "-" : $dados[3]['Boletos Enviados']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados[3]['Transferida da CEACR'] == 0 ? "-" : $dados[3]['Transferida da CEACR']; ?></span>
            </a>
        </li>
        </ul>
    </div>
    </div>
    </div>
</div>
<br>
<div class="row detalhada">
    <div class="col-md-6" style="margin-left:327px;" id="total3">
    <div class="card card-widget widget-user-2">
        <div class="small-box bg-dark">
        <div class="inner">
            <h4 style="color:white;"><b>Total</b></h4>
        </div>
        <div class="icon" style="top:-40px;">
            <i class="fas fa-plus" style="font-size:50px;"></i>
        </div>
        <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-total_3">
            Detalhes <i class="fas fa-plus"></i>
        </a>
        </div>
    <div class="card-footer p-0" style="display:none;" id="card-footer-total_3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link">
            <div>
                Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[4]['Atendidas'] == 0 ? "-" : $dados[4]['Atendidas']; ?></span>
            </div>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[4]['Voce no Azul'] == 0 ? "-" : $dados[4]['Voce no Azul']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[4]['Boletos Enviados'] == 0 ? "-" : $dados[4]['Boletos Enviados']; ?></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
            Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados[4]['Transferida da CEACR'] == 0 ? "-" : $dados[4]['Transferida da CEACR']; ?></span>
            </a>
        </li>
        </ul>
    </div>
    </div>
    </div>
</div>
<br>
<div class="row macro">
<div class="col-md-9 titulo macro" style="margin-left:165px;" id="visao_macro_total_3">
<div class="card card-widget widget-user-2">
    <div class="small-box" style="background-color:#FF8C00;">
    <div class="inner">
        <h4 style="color:white;"><b>Visão Macro</b></h4>
    </div>
    <div class="icon" style="top:-40px;">
        <i class="fas fa-chart-pie" style="font-size:50px;"></i>
    </div>
    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-macro_3">
        Detalhes <i class="fas fa-plus"></i>
    </a>
    </div>
<div class="card-footer p-0" style="display:none;" id="card-footer-macro_3">
<table id = 'tabela1' class="table table-bordered" >
    <thead>
        <tr>
            <th class="text-center"> Unidade </th>
            <th class="text-center" colspan="3"> CEACR </th>
            <th class="text-center"> CESAV<br>CIGAD </th>
        </tr>						
    </thead>
    <thead>
        <tr>
            <th class="text-center"> Canal </th>
            <th class="text-center"> Atendidas </th>
            <th class="text-center"> Você no Azul </th>
            <th class="text-center"> Boletos<br>Enviados </th>
            <th class="text-center"> Transferidos da CEACR </th>
        </tr>						
    </thead>
    <tbody>
        <tr>
            <th class="text-center"> Telefonia </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[0]['Atendidas'] == 0 ? "-" : $dados[0]['Atendidas']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[0]['Voce no Azul'] == 0 ? "-" : $dados[0]['Voce no Azul']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[0]['Boletos Enviados'] == 0 ? "-" : $dados[0]['Boletos Enviados']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados[0]['Transferida da CEACR'] == 0 ? "-" : $dados[0]['Transferida da CEACR']; ?></span> </th>
        </tr>
        <tr>
            <th class="text-center"> WhatsApp </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[1]['Atendidas'] == 0 ? "-" : $dados[1]['Atendidas']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[1]['Voce no Azul'] == 0 ? "-" : $dados[1]['Voce no Azul']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[1]['Boletos Enviados'] == 0 ? "-" : $dados[1]['Boletos Enviados']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados[1]['Transferida da CEACR'] == 0 ? "-" : $dados[1]['Transferida da CEACR']; ?></span> </th>
        </tr>
        <tr>
            <th class="text-center"> Redes Sociais </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[2]['Atendidas'] == 0 ? "-" : $dados[2]['Atendidas']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[2]['Voce no Azul'] == 0 ? "-" : $dados[2]['Voce no Azul']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[2]['Boletos Enviados'] == 0 ? "-" : $dados[2]['Boletos Enviados']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados[2]['Transferida da CEACR'] == 0 ? "-" : $dados[2]['Transferida da CEACR']; ?></span> </th>
        </tr>
        <tr>
            <th class="text-center"> Negociar Dívidas </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[3]['Atendidas'] == 0 ? "-" : $dados[3]['Atendidas']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[3]['Voce no Azul'] == 0 ? "-" : $dados[3]['Voce no Azul']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados[3]['Boletos Enviados'] == 0 ? "-" : $dados[3]['Boletos Enviados']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados[3]['Transferida da CEACR'] == 0 ? "-" : $dados[3]['Transferida da CEACR']; ?></span> </th>
        </tr>
        <tr>
            <th class="text-center"> Total </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados[4]['Atendidas'] == 0 ? "-" : $dados[4]['Atendidas']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados[4]['Voce no Azul'] == 0 ? "-" : $dados[4]['Voce no Azul']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados[4]['Boletos Enviados'] == 0 ? "-" : $dados[4]['Boletos Enviados']; ?></span> </th>
            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados[4]['Transferida da CEACR'] == 0 ? "-" : $dados[4]['Transferida da CEACR']; ?></span> </th>
    </tbody>
</table>
</div>
</div>
</div>

<script>
    $(document).ready(function(){

        $('#mostrar_todos_3').click(function(){
            if($(this).prop('checked') == true){
                $('#detalhada_3').prop('checked',false);
                $('#macro_3').prop('checked',false);
                $('.detalhada').show(1000);
                $('.macro').show(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#detalhada_3').click(function(){
            if($(this).prop('checked') == true){
                $('#mostrar_todos_3').prop('checked',false);
                $('#macro_3').prop('checked',false);
                $('.detalhada').show(1000);
                $('.macro').hide(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.macro').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#macro_3').click(function(){
            if($(this).prop('checked') == true){
                $('#mostrar_todos_3').prop('checked',false);
                $('#detalhada_3').prop('checked',false);
                $('.detalhada').hide(1000);
                $('.macro').show(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.detalhada').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('.detalhe').click(function(){
            if ($(this).children().hasClass('fa-plus')) {
                $(this).children().addClass('fa-minus').removeClass('fa-plus');
            }else {
                $(this).children().addClass('fa-plus').removeClass('fa-minus');
            }
        })


    });
</script>