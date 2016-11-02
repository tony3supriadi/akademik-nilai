<?php

Class Kelas extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "KELAS",
			"navigation" => "master",
			"container" => "/administrator/kelas/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function add() {
		$data = array(
			"title" => "ADD | KELAS",
			"navigation" => "master",
			"container" => "/administrator/kelas/add"
		);
		$this->load->view("/layouts/app", $data);
	}

}