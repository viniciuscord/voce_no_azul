

<?php $this->load->view("includes/header");?>

<body id="page-top">
<div id="wrapper">
	<?php $this->load->view("includes/menu");?>		
	<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
	  <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#005CA9; color:white; font-size:larger;">
	  <b>Indicadores Você no Azul</b>
		<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		  <i class="fa fa-bars"></i>
		</button>
		<ul class="navbar-nav ml-auto">
		  <div class="topbar-divider d-none d-sm-block"></div>
		  <li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="tooltip" title="TESTE" aria-haspopup="true" aria-expanded="false">
			  <span class="mr-2 d-none d-lg-inline text-white-600 small"><b><?php $nome = $this->session->userdata('nome'); echo strtoupper($nome);?></b></span>
				<?php if(ENVIRONMENT=="development"){?>	
						<img class="img-profile" title="Ambiente de Desenvolvimento" style="height:32px; width:96px;" src="<?php echo site_url("/images/dev.png"); ?>">
				<?php }else{ ?>
					<img class="img-profile" title="Ambiente de Produção" src="/images/logo-caixa-x.png">
				<?php } ?>
			</a>			
		  </li>
		</ul>
	  </nav>
	  <div class="container-fluid"><?php $this->load->view ( $view );?></div>
	</div>
	<footer class="sticky-footer bg-white">
	  <div class="container my-auto">
		<div class="copyright text-center my-auto">
		© <?php echo date('Y');?> CEACR – Centralizadora de Atendimento Cobrança Remota
		</div>
	  </div>
	</footer>
  </div>
</div>
</body>
</html>