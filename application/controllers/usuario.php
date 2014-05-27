<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {


	public function cadastrar()
	{
		$data['css'] = ("usuario.css");
		$this->load->view('templates/topo',$data);
		$this->load->view('cadastroNovoUsuario');
		$this->load->view('templates/rodape');
	}
	
}
