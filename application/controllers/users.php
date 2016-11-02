<?php

Class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "USERS",
			"navigation" => "master",
			"container" => "/administrator/users/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function profil($id) {
		$data = array(
			"title" => "AMRIZAL FATHUROHMAN | PROFIL",
			"navigation" => "",
			"container" => "/administrator/users/profil"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function add() {
		$data = array(
			"title" => "ADD | USERS",
			"navigation" => "master",
			"container" => "/administrator/users/add"
		);
		$this->load->view("/layouts/app", $data);
	}

}