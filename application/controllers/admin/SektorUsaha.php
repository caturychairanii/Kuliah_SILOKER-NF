<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SektorUsaha extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('MsektorUsaha');
	}

	public function index()
	{
		$data['sektorusaha'] = $this->MsektorUsaha->getData();
		$this->load->view('templete_admin/header');
		$this->load->view('admin/sektor-usaha/index.php',$data);
	}

	public function edit($id) {
        $data['sektorusaha'] = $this->MsektorUsaha->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/sektor-usaha/edit', $data);
    }

    public function show($id) {
        $data['sektorusaha'] = $this->MsektorUsaha->detail($id); //mengambil satu data

        $this->load->view('templete_admin/header');
        $this->load->view('admin/sektor-usaha/show', $data);
    }

    public function tambah(){
       	$this->load->view('templete_admin/header');
		$this->load->view('admin/sektor-usaha/tambah.php');
    }

    public function TambahData(){
        $nama = $this->input->post('nama');
        $this->session->set_flashdata('success', 'berhasil menambah data');
        $insert = $this->MsektorUsaha->store($nama);
        redirect(base_url("index.php/admin/sektorusaha/"));
    }

    public function updatData($id) {
		$nama = $this->input->post('nama');
		$data = array(
			'nama' => $nama,
		);
		$where = array(
			'id' => $id
		);
		$this->MsektorUsaha->update_data($where,$data,'sektor_usaha');
		redirect(base_url("index.php/admin/sektorusaha/"));
    }

    public function hapus($id) {
        $this->MsektorUsaha->delete($id);
        redirect(base_url("index.php/admin/sektorusaha/"));
    }
}
