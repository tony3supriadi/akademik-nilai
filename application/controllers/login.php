<?php

Class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view("login.php");
	}

	public function action_login() {
		$username = $this->input->post("username");
		$this->session->set_userdata(array("user" => $username));
		redirect();
	}

}