<?php
class Voce_azul extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('voce_azul_model');
    }


    public function relatorios(){
            $data['menu'] = false;
            $data['dados'] = $this->voce_azul_model->getDadosTabelaDiario();
            $data['dados_consolidados'] = $this->voce_azul_model->getDadosConsolidados();
            $data['view'] = 'voce_azul/relatorios';
            $this->load->view('includes/body',$data);
            // print_r($this->db->last_query());
            // var_dump($data['dados']);
    }
    
    public function getDadosTabelaPeriodo(){
        $data['dados'] = $this->voce_azul_model->getDadosTabelaPeriodo();
        $this->load->view("voce_azul/relatorio",$data);
        // print_r($this->db->last_query());
        // print_r($data['dados']);
    }
    
    // public function getDadosConsolidados(){
    //     $data['dados'] = $this->voce_azul_model->getDadosConsolidados();
    //     $this->load->view("voce_azul/relatorio",$data);
    // }

    
    // public function carrega_modal(){
    //     $this->load->view("voce_azul/modal/modal_cadastro_indicadores");
    // }


    // public function cadastro_interage(){
    //     $this->voce_azul_model->alteraCadastroIndicadores();
    //     $data['dados'] = $this->voce_azul_model->getDadosTabelaDiario();
    //     $this->load->view("voce_azul/relatorio",$data);
        // print_r($this->db->last_query());
        // var_dump($data['dados']);
        
    // }
}