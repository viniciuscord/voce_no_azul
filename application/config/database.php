<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

$active_group = 'BD_SUPORTE';
$query_builder = TRUE;

if(ENVIRONMENT=='production'){
	$bd="bd_suporte";
}else{
	$bd="desenvolvimento";	
}

$db ['default'] = array (
		'dsn' => "DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR496;DATABASE=bd_ident;Mars_Connection=yes",
		'hostname' => 'DF7436SR496',
		'username' => 's517101',
		'password' => '517101',
		'database' => 'bd_ident',
		'dbdriver' => 'sqlsrv',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => TRUE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf-8',
		'dbcollat' => 'Latin1_General_CI_AS',
		'swap_pre' => '',
		'autoinit' => TRUE,
		'encrypt'  => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array (),
		'save_queries' => TRUE 
);

$db ['SR330'] = array (
		'dsn' => "DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR330;DATABASE=$bd;Mars_Connection=yes",
		'hostname' => 'DF7436SR330',
		'username' => 's739201',
		'password' => 's739201@',
		'database' => $bd,
		'dbdriver' => 'sqlsrv',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => TRUE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf-8',
		'dbcollat' => 'Latin1_General_CI_AS',
		'swap_pre' => '',
		'autoinit' => TRUE,
		'encrypt'  => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array (),
		'save_queries' => TRUE
);

$db ['odbc'] = array (
		'dsn' => "DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR330;DATABASE=$bd;Mars_Connection=yes",
		'hostname' => 'DF7436SR330',
		'username' => 's739201',
		'password' => 's739201@',
		'database' => $bd,
		'dbdriver' => 'odbc',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => FALSE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf-8',
		'dbcollat' => 'Latin1_General_CI_AS',
		'swap_pre' => '',
		'autoinit' => TRUE,
		'encrypt'  => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array (),
		'save_queries' => TRUE 
);


$db ['SR611'] = array (
		'dsn' => "DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR611;DATABASE=DB7560_SEGURANCA;Mars_Connection=yes",
		'hostname' => 'DF7436SR611',
		'username' => 'S756001',
		'password' => 'ceati7560t1066',
		'database' => 'DB7560_SEGURANCA',
		'dbdriver' => 'sqlsrv',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => FALSE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf-8',
		'dbcollat' => 'Latin1_General_CI_AS',
		'swap_pre' => '',
		'autoinit' => TRUE,
		'encrypt'  => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array (),
		'save_queries' => TRUE
);


$db ['SR612'] = array (
		'dsn' => "DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR612;DATABASE=DB7560_ESTATISTICA;Mars_Connection=yes",
		'hostname' => 'DF7436SR612',
		'username' => 'S756001',
		'password' => 'ceati7560t1066',
		'database' => 'DB7560_ESTATISTICA',
		'dbdriver' => 'sqlsrv',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => FALSE,
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf-8',
		'dbcollat' => 'Latin1_General_CI_AS',
		'swap_pre' => '',
		'autoinit' => TRUE,
		'encrypt'  => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array (),
		'save_queries' => TRUE
);

$db['BD_SUPORTE'] = array(
	'dsn'	=> 'DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR613;DATABASE=BD_SUPORTE;Mars_Connection=yes',
	'hostname' => 'DF7436SR613',
	'username' => 'S756001',
	'password' => 'ceati7560t1066',
	'database' => 'BD_SUPORTE',
	'dbdriver' => 'odbc',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => FALSE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf-8',
	'dbcollat' => 'Latin1_General_CI_AS',
	'swap_pre' => '',
	'autoinit' => TRUE,
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

$db['BD_SUPORTE_SQLSRV'] = array(
	'dsn'	=> 'DRIVER={SQL Server Native Client 11.0};SERVER=DF7436SR613;DATABASE=BD_SUPORTE;Mars_Connection=yes',
	'hostname' => 'DF7436SR613',
	'username' => 'S756001',
	'password' => 'ceati7560t1066',
	'database' => 'BD_SUPORTE',
	'dbdriver' => 'sqlsrv',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => FALSE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf-8',
	'dbcollat' => 'Latin1_General_CI_AS',
	'swap_pre' => '',
	'autoinit' => TRUE,
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
