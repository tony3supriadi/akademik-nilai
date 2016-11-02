<?php

Class Siswa extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "SISWA",
			"navigation" => "master",
			"container" => "/administrator/siswa/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function add() {
		$data = array(
			"title" => "ADD | SISWA",
			"navigation" => "master",
			"container" => "/administrator/siswa/add"
		);
		$this->load->view("/layouts/app", $data);
	}

}