<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BidangUsaha extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('MbidangUsaha');
	}

	public function index()
	{
		$data['bidang_usaha'] = $this->MbidangUsaha->getData();
		$this->load->view('templete_admin/header');
		$this->load->view('admin/bidang-usaha/index.php',$data);
	}

	public function edit($id) {
        $data['bidang_usaha'] = $this->MbidangUsaha->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/bidang-usaha/edit', $data);
    }

    public function show($id) {
        $data['bidang_usaha'] = $this->MbidangUsaha->detail($id); //mengambil satu data

        $this->load->view('templete_admin/header');
        $this->load->view('admin/bidang-usaha/show', $data);
    }

    public function tambah(){
       	$this->load->view('templete_admin/header');
		$this->load->view('admin/bidang-usaha/tambah.php');
    }

    public function TambahData(){
        $nama = $this->input->post('nama');
        $this->session->set_flashdata('success', 'berhasil menambah data');
        $insert = $this->MbidangUsaha->store($nama);
        redirect(base_url("index.php/admin/bidangusaha/"));
    }

    public function updatData($id) {
		$nama = $this->input->post('nama');
		$data = array(
			'nama' => $nama,
		);
		$where = array(
			'id' => $id
		);
		$this->MbidangUsaha->update_data($where,$data,'bidang_usaha');
		redirect(base_url("index.php/admin/bidangusaha/"));
    }

    public function hapus($id) {
        $this->MbidangUsaha->delete($id);
        redirect(base_url("index.php/admin/bidangusaha/"));
    }
}
