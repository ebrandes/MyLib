<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	function __construct(){
		parent::__construct();
	}


	public function index()
	{

		$data['css'] = ("login.css");

		$this->load->library('facebook', array(
			'appId' => '711715885555231',
			'secret' => '06e25fda9b30afaa01f0e2782e60b47a',
			));


		$user = $this->facebook->getUser();

		if ($user) {
			try {
				$data['user_profile'] = $this->facebook->api('/me');
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}

		if ($user) {
			$data['logout_url'] = $this->facebook->getLogoutUrl();
		} else {
			$data['login_url'] = $this->facebook->getLoginUrl();
		}

		
		$this->load->view('incial',$data);
	}


	public function login()
	{

		


		$data['css'] = ("login.css");
		$this->load->view('incial',$data);
		
	}

	public function logout(){
		$this->load->library('facebook');
		$this->facebook->destroySession();
		redirect('/site/login');
	}

}
