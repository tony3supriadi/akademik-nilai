<?php

Class Laporan extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data = array(
			"title" => "LAPORAN",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/index"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function siswa() {
		$data = array(
			"title" => "LAPORAN SISWA",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/siswa"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function guru() {
		$data = array(
			"title" => "LAPORAN GURU",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/guru"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function pelajaran() {
		$data = array(
			"title" => "LAPORAN PELAJARAN",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/pelajaran"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function kelas() {
		$data = array(
			"title" => "LAPORAN KELAS",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/kelas"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function kesiswaan() {
		$data = array(
			"title" => "LAPORAN KESISWAAN",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/kesiswaan"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function kesiswaan_view($id) {
		$data = array(
			"title" => "VIEW | LAPORAN KESISWAAN",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/kesiswaan_view"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function penilaian() {
		$data = array(
			"title" => "LAPORAN PENILAIAN",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/penilaian"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function penilaian_view() {
		$data = array(
			"title" => "VIEW | LAPORAN PENILAIAN",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/penilaian_view"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function users() {
		$data = array(
			"title" => "LAPORAN USERS",
			"navigation" => "laporan",
			"container" => "/administrator/laporan/users"
		);
		$this->load->view("/layouts/app", $data);
	}

	public function nilai() {
		$data = array(
			"title" => "LAPORAN NILAI",
			"navigation" => "guru_laporan",
			"container" => "/guru/laporan/nilai"
		);
		$this->load->view("/layouts/app", $data);
	}

}