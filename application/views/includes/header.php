<?php
	header ( "Cache-Control: no-store, no-cache, must-revalidate" );
	header ( "Cache-Control: post-check=0, pre-check=0", false );
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php echo $this->config->item('nome_sistema');?>">
	<meta name="author" content="">
	<meta name="robots" content="noodp, noydir">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url("images/favicon.ico");?>">
		<?php $this->load->view("includes/css")?>	  
		<?php $this->load->view("includes/js")?>
	<title><?php if(isset($title)) echo $title; else echo $this->config->item('nome_sistema');?></title>
	<title>SISTEMAS CAIXA</title>
</head>