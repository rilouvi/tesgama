<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->model("LoginModel");
	}

	public function index()
	{
		if ($this->session->userdata('username')==NULL ) {
			$this->load->view('admin/index');
		}else{
			redirect (base_url("Admin"));
		}
	}

	public function Login()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$cekAdmin = $this->LoginModel->checkAdmin($username, $password);
		// print($cekAdmin);die;
		if ($cekAdmin > 0) {
			$this->session->set_userdata("username", $username);
			redirect (base_url("Admin"));
		}else{
			redirect (base_url("Login"));
		}
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect (base_url("Login"));
	}

}
