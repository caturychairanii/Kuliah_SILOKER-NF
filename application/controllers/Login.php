<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->model('MLogin');
	}

	public function index()
	{
		$this->load->view('login/login.php');
		// print_r(base_url());
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		var_dump($username , $password);
		
		
		$hasil_login = array(
			'username' => $username,
			'password' => $password
		);

		$cek = $this->MLogin->cek_login("user", $hasil_login)->num_rows();
		if( $cek > 0){
			$data_admin = $this->MLogin->getRowAdmin($username);

			$data_session = array(
				'id' => $data_admin->id,
				'nama' => $username,
			);
			
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/admin/admin"));
		}else{
			$this->session->set_flashdata('fail', 'username atau email tidak ditemukan');
			redirect(base_url("index.php/login/"));
		}
	}

	public function Logout(){
     	$this->session->sess_destroy();
     	redirect(base_url("index.php/"));
    }	

}
