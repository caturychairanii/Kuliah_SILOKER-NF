<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Muser');
	}

	public function index()
	{
		$data['admin'] = $this->Muser->getData();
		$this->load->view('templete_admin/header');
		$this->load->view('admin/user/index.php',$data);
	}

	public function edit($id) {
        $data['admin'] = $this->Muser->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/user/edit', $data);
    }

    public function show($id) {
        $data['admin'] = $this->Muser->detail($id); //mengambil satu data

        $this->load->view('templete_admin/header');
        $this->load->view('admin/user/show', $data);
    }

    public function tambah(){
       	$this->load->view('templete_admin/header');
		$this->load->view('admin/user/tambah.php');
    }

    public function TambahData(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $created_at = date('Y-m-d H:i:s');
        $data = $this->Muser->getData();
        $cek = 0;
        foreach($data->result() as $data){
            $d_usrname = $data->username;
            $d_email = $data->email;

            if($d_usrname == $username && $d_email == $email){
                $cek = 1;
            }
            else{
                $cek = 0;
            }
        };

        if($cek == 0){
            $this->session->set_flashdata('success', 'berhasil menambah data');
            $insert = $this->Muser->store($username, $password, $email, $created_at);
                redirect(base_url("index.php/admin/user/"));
            
        }else{
            $this->session->set_flashdata('fail', 'username atau email telah terpakai');
            //cari username yang lain
            redirect("#");
        }
    }

    public function updatData($id) {
        $username = $this->input->post('username');
        $email = $this->input->post('email');

        $redirectBackUrl = $this->session->userdata('redirect_back');
        $this->Muser->update($id, $username, $email);
        if($this->session->userdata('id') == $id){
            $data_session = array(
                'id' == $id,
                'username' => $username,
                'email' => $email,
            );
            $this->session->set_userdata($data_session);

            redirect(base_url("index.php/admin/user/"));
        }else {
            redirect(base_url("index.php/admin/user/"));
        }
        
    }

    public function hapus($id) {
        $this->Muser->delete($id);
        redirect(base_url("index.php/admin/user/"));
    }
}
