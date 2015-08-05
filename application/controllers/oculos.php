<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Oculos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->load->view('cadastroOculos');
	}

    public function estoque()
    {
		$this->load->view('estoqueOculos');
    }

    public function cadastro()
    {
        //validação
        $this->_set_rules();

       if($this->form_validation->run() == TRUE){

           // save data
            $saves = array(
                            'referencia'   => $this->input->post('referencia'),
                            'modelo'       => $this->input->post('modelo'),
                            'tipo'         => $this->input->post('tipo'),
                            'cor'          => $this->input->post('cor'),
                            'preco_compra' => $this->input->post('preco_compra'),
                            'preco_venda'  => $this->input->post('preco_venda'),
                            'qtd'          => $this->input->post('qtd'),
                            'descricao'    => $this->input->post('descricao'),
                    );

            $this->load->model('oculos_model', 'oculosModel', TRUE);
            $this->oculosModel->insert($saves);
       }else{
            echo '';
       }

        $this->load->view('cadastroOculos');
    }

    function _set_rules(){
        //Validações
        $this->form_validation->set_rules('referencia', 'referencia', 'required|min_length[1]|max_length[15]|is_unique[oculos.referencia]');
        $this->form_validation->set_rules('modelo', 'modelo', 'required|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('tipo', 'tipo');
        $this->form_validation->set_rules('cor', 'cor', 'required');
        $this->form_validation->set_rules('preco_compra', 'Preço compra', 'required');
        $this->form_validation->set_rules('preco_venda', 'Preço venda', 'required');
        $this->form_validation->set_rules('descricao', 'Descrição', 'required|max_length[150]');
    }

}
