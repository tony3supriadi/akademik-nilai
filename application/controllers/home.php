<?php

Class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "HOME",
			"navigation" => "home",
			"container" => "/administrator/home/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function guru() {
		$data = array(
			"title" => "HOME",
			"navigation" => "guru_home",
			"container" => "/guru/home/index"
		);
		$this->load->view("/layouts/app", $data);
	}

}