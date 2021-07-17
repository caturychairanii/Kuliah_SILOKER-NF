<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mprodi');
	}

	public function index()
	{
		$data['prodi'] = $this->Mprodi->getData();
		$this->load->view('templete_admin/header');
		$this->load->view('admin/prodi/index.php',$data);
	}

	public function edit($id) {
        $data['prodi'] = $this->Mprodi->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/prodi/edit', $data);
    }

    public function show($id) {
        $data['prodi'] = $this->Mprodi->detail($id); //mengambil satu data

        $this->load->view('templete_admin/header');
        $this->load->view('admin/prodi/show', $data);
    }

    public function tambah(){
       	$this->load->view('templete_admin/header');
		$this->load->view('admin/prodi/tambah.php');
    }

    public function TambahData(){
        $nama = $this->input->post('nama');
        $this->session->set_flashdata('success', 'berhasil menambah data');
        $insert = $this->Mprodi->store($nama);
        redirect(base_url("index.php/admin/prodi/"));
    }

    public function updatData($id) {
		$nama = $this->input->post('nama');
		$data = array(
			'nama' => $nama,
		);
		$where = array(
			'id' => $id
		);
		$this->Mprodi->update_data($where,$data,'prodi');
		redirect(base_url("index.php/admin/prodi/"));
    }

    public function hapus($id) {
        $this->Mprodi->delete($id);
        redirect(base_url("index.php/admin/prodi/"));
    }
}
