<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login_model extends CI_Model{
	private $login;
	//chama as validações de acesso e dados da sessao
	public function __construct(){
		$this->login=get_current_user();
		$this->load->library('user_agent');
		if ($this->agent->browser() == 'Internet Explorer'){
			die;
			// $data['view']="includes/browser";
			// $data['menu']=false;
			// die($this->load->view("includes/body",$data,true));
		}else{
			if(!$this->valida_acesso()){
				$data['view']="includes/logoff";
				$data['menu']=true;
				$this->load->view("includes/body",$data);
				$this->output->get_output();
			}else{
				if (!$this->session->userdata("login")){
					// print_r ('aqui1');die;
					$this->login();
				}
				
				echo $this->output->get_output();
				
			}
		}
	}
	
	//verifica os dados no BD e coloca na sessão caso ainda nao tenha
	public function login(){
		$result = $this->acesso();
		// print_r($result);
		if (is_object($result)) {
			$this->session->set_userdata(array("nome"=>false,"acesso"=>false,"login"=>false));
			$sess_data = array (
					"nome" => $this->nome(),
					"acesso" => $result->nomePerfil,
					"login" => true 
			);			
			$this->session->set_userdata($sess_data);			
		}else{
			$this->session->set_userdata(array("nome"=>false,"acesso"=>false,"login"=>false));
			$sess_data = array (
					"nome" => $this->nome(),
					"acesso" => "DEFAULT",
					"login" => true 
			);
			
			$this->session->set_userdata($sess_data);
		}
	}
	
	//verifica o perfil do usuario logado no SO, caso nao exista , retorna DEFAULT, caso comece com 'C' retorna ADMINISTRADOR
	public function acesso(){
		if($this->config->item("id_sistema") == 0) {
			return "Administrador";
		}else{		
			$db=$this->load->database('SR611',true);
			$user = get_current_user();
			$id_sistema = $this->config->item("id_sistema");
			$sp = "EXEC [DF7436SR611].[DB7560_SEGURANCA].[dbo].[spRetornaPerfis] {$id_sistema},'{$user}'";/**retorno o tipo de acesso conforme o sistma gestão de acesso */
			// print_r($sp);
			$qr = $db->query($sp)->row();	
			
			if($qr){
				return $qr;
			}else{				
				return 'DEFAULT';
			}
			
		}
	}
	
	// //valida o acesso de acordo com o controller e o metodo corrente na pagina comparando o acesso do perfil do usuario logado
	public function valida_acesso(){
		$acesso = $this->acesso();
		$perfil = is_object($acesso) ? $acesso->nomePerfil : $this->acesso();
		switch ($perfil){
			case "Pesquisar indicadores":return true;break;
		}
		return false;			
	}
	// //pega o nome do usuario pela matricula
	public function nome(){
		return Login_helper::getNome();
	}
	
	public function log(){
		$method=strtolower(trim($this->router->directory.$this->router->class).'/'.$this->router->method);
		if($method!="home/index"){
			$this->db->set("usr_log",substr(get_current_user(),1));
			$this->db->insert("exper.tb_log_acesso");
		}
	}
	

}
?>