<?php

Class Nilai extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index($id) {
		$data = array(
			"id" => $id,
			"title" => "NILAI",
			"navigation" => "guru_mata_pelajaran",
			"container" => "/guru/nilai/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function input($id_m, $id_k) {
		$data = array(
			"id" => $id_m,
			"title" => "INPUT - NILAI",
			"navigation" => "guru_mata_pelajaran",
			"container" => "/guru/nilai/input"
		);
		$this->load->view("/layouts/app", $data);
	}

}