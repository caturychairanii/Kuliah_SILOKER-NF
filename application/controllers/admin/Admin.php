<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
	}

	public function index()
	{
		$this->load->view('templete_admin/header');
		$this->load->view('admin/home.php');
		// $this->load->view('templete_admin/footer');
		// print_r(base_url());
	}

}
