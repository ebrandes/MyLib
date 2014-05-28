<?php

class UsuarioModel extends CI_Model {
	private $nome,$login,$senha,$email,$urlImagem;	


	public function __construct(){
		parent::__construct();
	}

	public function salvar(){
		$data = array(
			'nome'      => $this->getNome(),
			'email'     => $this->getEmail(),
			'login'     => $this->getLogin(),
			'senha'     => $this->getSenha(),
			'urlImagem' => $this->getUrlImagem()
			);

		$this->db->insert('tb_usuarios', $data); 
	}

	//gets e sets
	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setLogin($login) {
		$this->login = $login;
	}

	public function setSenha($senha){
		$this->senha = md5($senha);
	}

	public function getSenha(){
		return md5($this->senha);
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setUrlImagem($urlImagem){
		$this->urlImagem = $urlImagem;
	}


}