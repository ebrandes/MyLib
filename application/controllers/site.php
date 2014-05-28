<?php
class Site extends CI_Controller {

	public function __construct(){

		parent::__construct();



	}

	public function index() {
		
		echo phpinfo();
		
		die();
		
		$data['css'] = ('login.css');
		$this->load->view('inicial',$data);

	}

}
?>