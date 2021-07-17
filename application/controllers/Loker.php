<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loker extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Loker');
        $this->load->model('M_Mitra');
    }

    public function index()
    {
        $data['loker'] = $this->M_Loker->getAllLoker();
        // print_r($data);
        // die();
        $this->load->view('siloker_nf/header');
        $this->load->view('siloker_nf/loker/lokerbaru', $data);
        $this->load->view('siloker_nf/footer');
    }

    public function detail($id)
    {
        $data['detail'] = $this->M_Loker->getDetail($id);
        $this->load->view('siloker_nf/header');
        $this->load->view('siloker_nf/loker/lokerdetail', $data);
        $this->load->view('siloker_nf/footer');
    }

    public function formTambahLoker()
    {
        $data['bidang'] = $this->M_Loker->getBidangUsaha();
        $data['kategori'] = $this->M_Loker->getKategori();
        $data['mitra'] = $this->M_Mitra->getAllMitra();

        $this->load->view('siloker_nf/header');
        $this->load->view('siloker_nf/loker/form_loker', $data);
        $this->load->view('siloker_nf/footer');
    }

    public function tambah()
    {
        $data = array(
            'deskripsi_pekerjaan' => $this->input->post('deskripsi_lowongan'),
            'tanggal_akhir' => $this->input->post('tanggal'),
            'mitra_id' => $this->input->post('mitra'),
            'email' => $this->input->post('email')
        );

        $this->M_Loker->insertLoker($data);
        redirect('loker/index');
    }
}