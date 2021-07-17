<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mkeahlian');
	}

	public function index()
	{
		$data['keahlian'] = $this->Mkeahlian->getData();
		$this->load->view('templete_admin/header');
		$this->load->view('admin/keahlian/index.php',$data);
	}

	public function edit($id) {
        $data['keahlian'] = $this->Mkeahlian->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/keahlian/edit', $data);
    }

    public function show($id) {
        $data['keahlian'] = $this->Mkeahlian->detail($id); //mengambil satu data

        $this->load->view('templete_admin/header');
        $this->load->view('admin/keahlian/show', $data);
    }

    public function tambah(){
       	$this->load->view('templete_admin/header');
		$this->load->view('admin/keahlian/tambah.php');
    }

    public function TambahData(){
        $nama = $this->input->post('nama');
        $this->session->set_flashdata('success', 'berhasil menambah data');
        $insert = $this->Mkeahlian->store($nama);
        redirect(base_url("index.php/admin/keahlian/"));
    }

    public function updatData($id) {
		$nama = $this->input->post('nama');
		$data = array(
			'nama' => $nama,
		);
		$where = array(
			'id' => $id
		);
		$this->Mkeahlian->update_data($where,$data,'keahlian');
		redirect(base_url("index.php/admin/keahlian/"));
    }

    public function hapus($id) {
        $this->Mkeahlian->delete($id);
        redirect(base_url("index.php/admin/keahlian/"));
    }
}
