<?php
class Mouts extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('mouts_model');
	}


	function index(){
		$this->load->view('mouts_view');
	}


	function data(){
		$data=$this->mouts_model->listar();
		echo json_encode($data);
	}


	function save(){
		$data=$this->mouts_model->salvar();
		echo json_encode($data);
	}


	function update(){
		$data=$this->mouts_model->atualizar();
		echo json_encode($data);
	}


	function delete(){
		$data=$this->mouts_model->excluir();
		echo json_encode($data);
	}

}