<?php 

class Login_helper{
	
	//perfil do usuário logado $u - usuário(int)
	public static function getAcesso($u){
		if(get_current_user()!='p743786'){
			$ci=&get_instance();
			$db=$ci->load->database('SR611',true);	
			$qr=$db
			->select("isnull(nomePerfil,'DEFAULT') acesso " ,false)
			->join("TSegPerfis p with(nolock)", "a.idPerfil=p.idPerfil", "left",false)			
			->join("TSegSubModulos sm with(nolock)", "sm.idSubModulo=p.idSubModulo", "left",false)			
			->join("TSegModulos m with(nolock)", "m.idModulo=sm.idModulo", "left",false)			
			->join("TSegSistemas s with(nolock)", "s.idSistema=m.idSistema", "left",false)			
			->where("matCef", $u)
			->where("s.idSistema", ID_SISTEMA)
			->where("a.dataExpira >getdate()")
			->order_by('p.idPerfil desc')
			->get("TSegControlaAcessos a with(nolock)")->row();

			if($qr){
				return $qr->acesso;
			}else{
				return 'DEFAULT';
			}
			
		}else{
			return "Administração";
		}
	}
	
	public static function getNome(){
		$ci=get_instance();
		$db=$ci->load->database('SR330',true);
		$nome=$db->
		select("nome")->
		where('login',get_current_user())->
		get("bd_apoio.dbo.tb_empregados")->
		result();
		$arr=explode(" ",$nome[0]->nome);
		$tam=count($arr);
		return strtolower($arr[0].' '.$arr[$tam-1]);
	}
}
