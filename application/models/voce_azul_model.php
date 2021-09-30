<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Voce_azul_model extends CI_Model{
    
    public function getDadosTabelaPeriodo(){
        $dt_inicio = $this->input->post('dt_inicio');
        $dt_fim = $this->input->post('dt_fim');
        return $this->db->query("EXEC [CVA].ConsultaCardVoceAzulEspecifica '$dt_inicio','$dt_fim'")->result_array();
        
    }

    public function getDadosTabelaDiario(){
        // $dt_dia = date('d/m/Y');
        return $this->db->query("EXEC [CVA].ConsultaCardVoceAzul")->result_array();
        
    }

    public function getDadosConsolidados(){
        return $this->db->query("EXEC [CVA].ConsultaCardVoceAzulConsolidado")->result_array();
    }

    // public function alteraCadastroIndicadores(){
    //     $db = $this->load->database('BD_SUPORTE_SQLSRV',true);
    //     $usr = get_current_user();
    //     $canal = $this->input->post('canal');
    //     // $indicador_id = $this->input->post('indicador');
    //     $atendidas = $this->input->post('atendidas') == '' ? "''" : $this->input->post('atendidas');  
    //     $voce_azul = $this->input->post('voce_azul') == '' ? "''" : $this->input->post('voce_azul');   
    //     $boletos_enviados = $this->input->post('voce_azul') == '' ? "''" : $this->input->post('voce_azul');    
    //     $transfer_ceacr = $this->input->post('transfer_ceacr') == '' ? "''" : $this->input->post('transfer_ceacr');
    //     $dt_ocorrencia = $this->input->post('input-data');
    //     // $dt_ocorrencia = date('Y/m/d');
    //     $sp = "EXEC [CVA].[InsertCardVoceAzulTotal] $canal,$atendidas,$voce_azul,$boletos_enviados,$transfer_ceacr,'$dt_ocorrencia','$usr'";
    //     // print_r($sp);
    //     // die();
    //     $db->simple_query('set nocount on');
    //     return $db->query($sp)->result_array();
    // }
}