<?php

Class Pelajaran extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "PELAJARAN",
			"navigation" => "master",
			"container" => "/administrator/pelajaran/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function add() {
		$data = array(
			"title" => "ADD | PELAJARAN",
			"navigation" => "master",
			"container" => "/administrator/pelajaran/add"
		);
		$this->load->view("/layouts/app", $data);
	}

}