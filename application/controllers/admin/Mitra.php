<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Mmitra');
	}

	public function index()
	{
		$data['mitra'] = $this->Mmitra->getData();
		$this->load->view('templete_admin/header');
		$this->load->view('admin/mitra/index.php',$data);
	}

	public function edit($id) {
        $data['mitra'] = $this->Mmitra->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/mitra/edit',$data);
    }

    public function show($id) {
        $data['mitra'] = $this->Mmitra->detail($id); //mengambil satu data
        $this->load->view('templete_admin/header');
        $this->load->view('admin/mitra/show',$data);
    }

    public function updatData($id) {
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kontak = $this->input->post('kontak');
		$email = $this->input->post('email');
		$telpon = $this->input->post('telpon');
		$web = $this->input->post('web');
		$bidang_usaha_id = $this->input->post('bidang_usaha_id');
		$sektor_usaha_id = $this->input->post('sektor_usaha_id');
		
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'kontak' => $kontak,
			'email' => $email,
			'telpon' => $telpon,
			'web' => $web,
			'bidang_usaha_id' => $bidang_usaha_id,
			'sektor_usaha_id' => $sektor_usaha_id,
		);
		// print_r("<pre>");
		// print_r($data);
		// print_r("</pre>");
		$where = array(
			'id' => $id
		);
		$this->Mmitra->update_data($where,$data,'mitra');
		redirect(base_url("index.php/admin/mitra/"));
    }

    public function hapus($id) {
        $this->Mmitra->delete($id);
        redirect(base_url("index.php/admin/mitra/"));
    }
}
