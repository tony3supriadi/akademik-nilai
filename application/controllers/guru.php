<?php

Class Guru extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "GURU",
			"navigation" => "master",
			"container" => "/administrator/guru/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function add() {
		$data = array(
			"title" => "ADD | GURU",
			"navigation" => "master",
			"container" => "/administrator/guru/add"
		);
		$this->load->view("/layouts/app", $data);
	}

}