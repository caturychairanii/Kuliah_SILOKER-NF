<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mitra extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Mitra');
    }

    public function index()
    {
        $data['mitra'] = $this->M_Mitra->getAllMitra();
        // print_r($data);
        // die();
        $this->load->view('siloker_nf/header');
        $this->load->view('siloker_nf/mitra/daftar_mitra', $data);
        $this->load->view('siloker_nf/footer');
    }

    public function tambah()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'kontak' => $this->input->post('kontak'),
            'telpon' => $this->input->post('nomor'),
            'email' => $this->input->post('email'),
            'web' => $this->input->post('website'),
            'bidang_usaha_id' => $this->input->post('bidang_usaha'),
            'sektor_usaha_id' => ''
        );

        $this->M_Mitra->insertMitra($data);
        redirect('mitra/index');
    }

    public function formTambahMitra()
    {
        $data['mitra'] = $this->M_Mitra->getBidangUsaha();
        $data['kategori'] = $this->M_Mitra->getKategori();

        $this->load->view('siloker_nf/header');
        $this->load->view('siloker_nf/mitra/form_mitra', $data);
        $this->load->view('siloker_nf/footer');
    }
}