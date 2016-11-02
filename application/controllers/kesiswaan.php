<?php

Class Kesiswaan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "KESISWAAN",
			"navigation" => "kesiswaan",
			"container" => "/administrator/kesiswaan/index"
		);
		$this->load->view("/layouts/app", $data);
	}

}