<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['css'] = ["login.css"];
		$this->load->view('incial',$data);
	}
}
