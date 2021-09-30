<style>
	.cl-table{
		margin-top: 10px;
	}

	.input-group{
		margin-right: 5px;
    }
    .small-box{
        margin-bottom: 0px !important;
    }
</style>


<div class="col-md-12">
<!-- <div class="overlay" style="display:none;" ><div class="overlay-content"><img src="images/loading.gif"></div></div>	 -->
<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    <ul class="nav nav-tabs" id="abas" role="tablist">
        <li class="nav-item">
        <a class="nav-link" id="relatorio_periodo_aba" data-toggle="pill" href="#relatorio_consolidado" role="tab" aria-controls="relatorio_consolidado" aria-selected="false">Relatório Diário (D - 1) <i class="fa fa-file-o"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" id="relatorio_diario_aba" data-toggle="pill" href="#relatorio_diario" role="tab" aria-controls="relatorio_diario" aria-selected="true">Relatório Parcial (Hoje) <i class="fa fa-clock-o"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="relatorio_periodo_aba" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Relatório Período <i class="fa fa-calendar-o"></i></a>
        </li>
    </ul>
    </div>
    <div class="card-body">
    <div class="tab-content" id="abasConteudo">
        <div class="tab-pane fade show active" id="relatorio_diario" role="tabpanel" aria-labelledby="relatorio_diario_aba">
        <div class="row checkboxes" style="display:none;">
            <div class="col-sm-2">
                <input type="checkbox" id="mostrar_todos_1" name="mostrar_todos_1">
                <label for="mostrar_todos_1">Mostrar Todos</label>
            </div>
            <div class="col-sm-2">
                <input type="checkbox" id="macro_1" name="macro_1">
                <label for="macro_1">Visão Macro</label>
            </div>
            <div class="col-sm-2">
                <input type="checkbox" id="detalhada_1" name="detalhada_1">
                <label for="detalhada_1">Visão Detalhada</label>
            </div>
        </div>
        <!-- <button class="btn bg-gradient-primary" data-toggle="tooltip" title="Cadastro indicadores" id="cadastrarIndicadores" style="color:white">Cadastro Indicadores <i class="fas fa-edit"></i></button> -->
        <div id='dv-table-1' class='cl-table'>
        <div class="row">
                <div class="col-md-3 detalhada1" id="telefonia1" style="display:none;">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h4 style="color:white;"><b>Telefonia</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-phone" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-telefonia_1">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-telefonia_1">
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
                <div class="col-md-3 detalhada1" id="whatsapp1" style="display:none;">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-success">
                    <div class="inner">
                    <h4 style="color:white;"><b>WhatsApp</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fab fa-whatsapp" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-whatsapp_1">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-whatsapp_1">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">
                        <div>
                            Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados[1]['Atendidas'] == 0 ? "-" : $dados[1]['Atendidas']; ?></span>
                        </div>
                        </a>
                    </li
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
                <div class="col-md-3 detalhada1" id="redes1" style="display:none;">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-primary">
                    <div class="inner">
                    <h4 style="color:white;"><b>Redes Sociais</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-users" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-redes_1">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-redes_1">
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
                <div class="col-md-3 detalhada1" id="dividas1" style="display:none;">
                <div class="card card-widget widget-user-3">
                    <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 style="color:white;"><b>Negociar Dívidas</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-money-check-alt" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-dividas_1">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-dividas_1">
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
        <div class="row">
                <div class="col-md-6 detalhada1" style="margin-left:327px; display:none;" id="total1">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-dark">
                    <div class="inner">
                        <h4 style="color:white;"><b>Total</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-plus" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-total_1">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-total_1">
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
        <div class="row">
                <div class="col-md-9 macro1" style="margin-left:165px; display:none;" id="visao_macro_total_1">
                <div class="card card-widget widget-user-2">
                    <div class="small-box" style="background-color:#FF8C00;">
                    <div class="inner">
                        <h4 style="color:white;"><b>Visão Macro</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-chart-pie" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#tabela_visao_macro_1">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="tabela_visao_macro_1">
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
            </div>
			</div>
        </div>

        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="relatorio_periodo_aba">
        <form action="" method="POST" role="form" id="relatorio">
			<div class="row">
			<div class="col-3">
				<div class="input-group input-group-sm">
					<div class="input-group-prepend">
						<span class="input-group-text" >Data Início:</span>
                        <input type="text" name="dt_inicio" id="dt_inicio" class="form-control datetimepicker" value="<?= date('d/m/Y',strtotime('-14 days')) ?>" placeholder="Data inicial do registro" aria-describedby="basic-addon1">
                    </div>
                    <span id="input_data_ini_error" class="text-danger" style="margin-left:90px;"></span>
				</div>
			</div>
			<div class="col-3" style="margin-left:50px;">
				<div class="input-group input-group-sm mb-2">
					<div class="input-group-prepend">
						<span class="input-group-text">Data Fim:</span>
                        <input type="text" name="dt_fim" id="dt_fim" class="form-control datetimepicker" value="<?= date('d/m/Y') ?>" placeholder="Data final do registro" aria-describedby="basic-addon1" style="margin-right:-26px;">
                    </div>
                    <span id="input_data_fim_error" class="text-danger" style="margin-left:50px;"></span>
				</div>
            </div>
            <div class="col-1" style="margin-left:100px;">
					<button type="button" id="buscar" class="btn bg-gradient-primary btn-sm pull-right ml-1" style="color:white; height:36px; width:106px;"><i class="fa fa-search"></i> Pesquisar </button>
            </div>
			</div>
        </form>
        <div id='dv-table-2' class='cl-table' style="display:none;"></div>
        </div>

        <div class="tab-pane fade" id="relatorio_consolidado" role="tabpanel" aria-labelledby="relatorio_consolidado_aba">
        <div class="row">
            <div class="col-sm-2">
                <input type="checkbox" id="mostrar_todos_2" name="mostrar_todos_2">
                <label for="mostrar_todos_2">Mostrar Todos</label>
            </div>
            <div class="col-sm-2">
                <input type="checkbox" id="macro_2" name="macro_2">
                <label for="macro_2">Visão Macro</label>
            </div>
            <div class="col-sm-2">
                <input type="checkbox" id="detalhada_2" name="detalhada_2">
                <label for="detalhada_2">Visão Detalhada</label>
            </div>
        </div>
        <div id='dv-table-3' class='cl-table'>
                <div class="row">
                <div class="col-md-3 detalhada2" id="telefonia2">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-info">
                    <div class="inner">
                        <h4 style="color:white;"><b>Telefonia</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-phone" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-telefonia_2">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-telefonia_2">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">
                        <div>
                            Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[0]['Atendidas'] == 0 ? "-" : $dados_consolidados[0]['Atendidas']; ?></span>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[0]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[0]['Voce no Azul']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[0]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[0]['Boletos Enviados']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados_consolidados[0]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[0]['Transferida da CEACR']; ?></span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
                <div class="col-md-3 detalhada2" id="whatsapp2">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-success">
                    <div class="inner">
                    <h4 style="color:white;"><b>WhatsApp</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fab fa-whatsapp" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-whatsapp_2">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-whatsapp_2">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">
                        <div>
                            Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[1]['Atendidas'] == 0 ? "-" : $dados_consolidados[1]['Atendidas']; ?></span>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[1]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[1]['Voce no Azul']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[1]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[1]['Boletos Enviados']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados_consolidados[1]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[1]['Transferida da CEACR']; ?></span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
                <div class="col-md-3 detalhada2" id="redes2">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-primary">
                    <div class="inner">
                    <h4 style="color:white;"><b>Redes Sociais</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-users" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-redes_2">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-redes_2">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">
                        <div>
                            Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[2]['Atendidas'] == 0 ? "-" : $dados_consolidados[2]['Atendidas']; ?></span>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[2]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[2]['Voce no Azul']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[2]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[2]['Boletos Enviados']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados_consolidados[2]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[2]['Transferida da CEACR']; ?></span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
                <div class="col-md-3 detalhada2" id="dividas2">
                <div class="card card-widget widget-user-3">
                    <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 style="color:white;"><b>Negociar Dívidas</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-money-check-alt" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-dividas_2">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-dividas_2">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">
                        <div>
                            Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[3]['Atendidas'] == 0 ? "-" : $dados_consolidados[3]['Atendidas']; ?></span>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[3]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[3]['Voce no Azul']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[3]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[3]['Boletos Enviados']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados_consolidados[3]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[3]['Transferida da CEACR']; ?></span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 detalhada2" style="margin-left:327px;" id="total2">
                <div class="card card-widget widget-user-2">
                    <div class="small-box bg-dark">
                    <div class="inner">
                        <h4 style="color:white;"><b>Total</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-plus" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#card-footer-total_2">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="card-footer-total_2">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link">
                        <div>
                            Atendidas <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[4]['Atendidas'] == 0 ? "-" : $dados_consolidados[4]['Atendidas']; ?></span>
                        </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Você no Azul <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[4]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[4]['Voce no Azul']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Boletos Enviados <span class="float-right badge" style="background-color:#191970; color:white;"><?php echo $dados_consolidados[4]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[4]['Boletos Enviados']; ?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                        Transferidos da CEACR <span class="float-right badge" style="background-color:#D2691E; color:white;"><?php echo $dados_consolidados[4]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[4]['Transferida da CEACR']; ?></span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-9 macro2" style="margin-left:165px;" id="visao_macro_total_2">
                <div class="card card-widget widget-user-2">
                    <div class="small-box" style="background-color:#FF8C00;">
                    <div class="inner">
                        <h4 style="color:white;"><b>Visão Macro</b></h4>
                    </div>
                    <div class="icon" style="top:-40px;">
                        <i class="fas fa-chart-pie" style="font-size:50px;"></i>
                    </div>
                    <a class="small-box-footer nav-link detalhe" data-card-widget="collapse" href="#tabela_visao_macro_2">
                        Detalhes <i class="fas fa-minus"></i>
                    </a>
                    </div>
                <div class="card-footer p-0" style="display:none;" id="tabela_visao_macro_2">
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
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[0]['Atendidas'] == 0 ? "-" : $dados_consolidados[0]['Atendidas']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[0]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[0]['Voce no Azul']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[0]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[0]['Boletos Enviados']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados_consolidados[0]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[0]['Transferida da CEACR']; ?></span> </th>
                        </tr>
                        <tr>
                            <th class="text-center"> WhatsApp </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[1]['Atendidas'] == 0 ? "-" : $dados_consolidados[1]['Atendidas']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[1]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[1]['Voce no Azul']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[1]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[1]['Boletos Enviados']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados_consolidados[1]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[1]['Transferida da CEACR']; ?></span> </th>
                        </tr>
                        <tr>
                            <th class="text-center"> Redes Sociais </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[2]['Atendidas'] == 0 ? "-" : $dados_consolidados[2]['Atendidas']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[2]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[2]['Voce no Azul']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[2]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[2]['Boletos Enviados']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados_consolidados[2]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[2]['Transferida da CEACR']; ?></span> </th>
                        </tr>
                        <tr>
                            <th class="text-center"> Negociar Dívidas </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[3]['Atendidas'] == 0 ? "-" : $dados_consolidados[3]['Atendidas']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[3]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[3]['Voce no Azul']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#191970; color:white;"> <?php echo $dados_consolidados[3]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[3]['Boletos Enviados']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#D2691E; color:white;"> <?php echo $dados_consolidados[3]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[3]['Transferida da CEACR']; ?></span> </th>
                        </tr>
                        <tr>
                            <th class="text-center"> Total </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados_consolidados[4]['Atendidas'] == 0 ? "-" : $dados_consolidados[4]['Atendidas']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados_consolidados[4]['Voce no Azul'] == 0 ? "-" : $dados_consolidados[4]['Voce no Azul']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados_consolidados[4]['Boletos Enviados'] == 0 ? "-" : $dados_consolidados[4]['Boletos Enviados']; ?></span> </th>
                            <th class="text-center"><span class="float-center badge" style="background-color:#6495ED; color:white;"> <?php echo $dados_consolidados[4]['Transferida da CEACR'] == 0 ? "-" : $dados_consolidados[4]['Transferida da CEACR']; ?></span> </th>
                    </tbody>
                </table>
                </div>
                </div>
                </div>
            </div>
			</div>
        </div>
    </div>
    </div>
</div>
</div>

<div class="loading-screen" style="display:none"></div>	

<div class="modal fade modal-info" role="dialog" tabindex="1" id="modalCadastro"></div>	

<script>
    $(document).ready(function(){
        
        $('.checkboxes').show(1000);
        $('#visao_macro_total_1').show(1000);
        $('#tabela_visao_macro_1').show(1000);
        $('#macro_1').prop('checked',true);

        $('#mostrar_todos_1').click(function(){
            if($(this).prop('checked') == true){
                $('#detalhada_1').prop('checked',false);
                $('#macro_1').prop('checked',false);
                $('.detalhada1').show(1000);
                $('.macro1').show(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.detalhada1').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#detalhada_1').click(function(){
            if($(this).prop('checked') == true){
                $('#mostrar_todos_1').prop('checked',false);
                $('#macro_1').prop('checked',false);
                $('.detalhada1').show(1000);
                $('.macro1').hide(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.macro1').show(1000);
                $('.detalhada1').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#macro_1').click(function(){
            if($(this).prop('checked') == true){
                $('#mostrar_todos_1').prop('checked',false);
                $('#detalhada_1').prop('checked',false);
                $('.detalhada1').hide(1000);
                $('.macro1').show(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.detalhada1').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#mostrar_todos_2').click(function(){
            if($(this).prop('checked') == true){
                $('#detalhada_2').prop('checked',false);
                $('#macro_2').prop('checked',false);
                $('.detalhada2').show(1000);
                $('.macro2').show(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.detalhada2').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#detalhada_2').click(function(){
            if($(this).prop('checked') == true){
                $('#mostrar_todos_2').prop('checked',false);
                $('#macro_2').prop('checked',false);
                $('.detalhada2').show(1000);
                $('.macro2').hide(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.macro2').show(1000);
                $('.detalhe').children().addClass('fa-plus').removeClass('fa-minus');
            }
        });

        $('#macro_2').click(function(){
            if($(this).prop('checked') == true){
                $('#mostrar_todos_2').prop('checked',false);
                $('#detalhada_2').prop('checked',false);
                $('.detalhada2').hide(1000);
                $('.macro2').show(1000);
                $('.card-footer').show(1000);
                $('.detalhe').children().addClass('fa-minus').removeClass('fa-plus');
            } else if ($(this).prop('checked') == false){
                $('.card-footer').hide(1000);
                $('.detalhada2').show(1000);
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


        // $("#cadastrarIndicadores").on("click",function(){
        //     var url = "carrega_modal";
        //     $.ajax({
        //         url : url, 
        //         type : "POST",
        //         dataType: "html",
        //         beforeSend : function(){;
        //             // $(".overlay").show();
        //         }
        //     }).done(function(data){
        //         $("#modalCadastro").html(data);
        //         $("#modalCadastro").modal("show");
        //         // $(".overlay").hide();
        //     });  
        // }); 

        $("#buscar").on("click",function(){
            if(formValidaData()){
            var form = $('#relatorio').serialize();
            var url = "getDadosTabelaPeriodo";
            $.ajax({
                url : url,
                type : "POST",
                dataType: "html",
                data : form,
                beforeSend : function(){;
                    // $(".overlay").show();
                },success: function(data){
                    $("#dv-table-2").html(data);
                    $("#dv-table-2").show(2000);
                },error: function(){
                    alert('Erro!Entrar em contato com o Administrador.');
                    
                }
            });
            }
        });
    
        function verificaDiferDatas() {
            var parts_ini = $("#dt_inicio").val().split('/');
            var parts_fim = $("#dt_fim").val().split('/');
    
            data_ini = new Date(parts_ini[2], parts_ini[1] - 1, parts_ini[0]);
            data_fim = new Date(parts_fim[2], parts_fim[1] - 1, parts_fim[0]);
    
            if (Date.parse(data_fim) < Date.parse(data_ini)) {
                return true;
            } else {
                return false;
            }
        } 

        function formValidaData() {
        valid = true;
        
            if($("#dt_inicio").val()=="" || $("#dt_inicio").val() == null){
                valid = false;
                $("#dt_inicio").css({'border-color': '#a94442'});
                $("#input_data_ini_error").html("Campo obrigatório!");
            }else{
                $("#dt_inicio").css({'border-color': 'lightgrey'});
                $("#input_data_ini_error").html('');
            }

            if($("#dt_fim").val()=="" || $("#dt_fim").val() == null){
                valid = false;
                $("#dt_fim").css({'border-color': '#a94442'});
                $("#input_data_fim_error").html("Campo obrigatório!");
            }else{
                if(verificaDiferDatas()){
                    valid = false;
                    $("#dt_fim").css({'border-color': 'lightgrey'});
                    $("#input_data_fim_error").html('Data final menor que a data de início!');
                    alert('Operação não autorizada! A data final é menor que a data de início!');
                }else{
                    $("#input-data-fim").css({'border-color': 'lightgrey'});
                    $("#input_data_fim_error").html('');
                }
            }

            return valid;
    }


        $(".datetimepicker").datetimepicker({
        timepicker:false,
        step:5,
        format:'d/m/Y',
        formatDate:'d/m/Y',
        scrollMonth : false,
        scrollInput : false,
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        maxDate : 0,
        });

    });

</script>