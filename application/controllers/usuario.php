<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {


	function __construct()
	{
		ini_set('display_errors', 1);
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('UsuarioModel');

	}


	public function cadastrar()
	{
		$data['css'] = ("usuario.css");
		$this->load->view('templates/topo',$data);
		$this->load->view('cadastroNovoUsuario');
		$this->load->view('templates/rodape');
	}

	public function salvar(){


		if(!$this->do_upload() != ""){
			$this->UsuarioModel->setNome($this->input->post('nome'));
			$this->UsuarioModel->setEmail($this->input->post('email'));
			$this->UsuarioModel->setSenha($this->input->post('senha'));
			$this->UsuarioModel->setLogin($this->input->post('login'));
			$this->UsuarioModel->salvar();
		}
		

	}

	public function do_upload()
	{
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']      = '5000';
		$config['max_width']     = '1800';
		$config['max_height']    = '1200';

		$this->load->library('upload', $config);
		
		$error = "";

		if (!$this->upload->do_upload())	
		{
			$error = array('error' => $this->upload->display_errors());

			return $error;
		}
	}
	
}
