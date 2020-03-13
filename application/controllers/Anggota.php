<?php

class Anggota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anggota_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('Anggota_model');
        $data['judul'] = 'Daftar Anggota';
        $data['anggota'] = $this->Anggota_model->ReadDataAnggota();
        if ($this->input->post('keyword')) {
            $data['anggota'] = $this->Anggota_model->cariDataAnggota();
        }
        $this->load->view('templates2/header', $data);
        $this->load->view('anggota/index', $data);
        $this->load->view('templates2/footer');
    }

    public function tambah()
    {
        $data['anggota'] = $this->Anggota_model->ReadDataAnggota();
        $data['judul'] = 'Form Tambah Data Anggota';
        $this->load->view('templates2/header', $data);
        $this->load->view('anggota/tambah');
        $this->load->view('templates2/footer');
    }

    public function InsertDataAnggota()
    {
        $data['judul'] = 'Form Tambah Data Anggota';
        $this->form_validation->set_rules('badge', 'Badge', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notelp', 'No Telp', 'required');


        if ($this->form_validation->run() == FALSE) {
            // $this->Model_anggota->tambahDataAnggota();
            $nama = $this->input->post('nama', true);
            $badge = $this->input->post('badge', true);
            $unitkerja = $this->input->post('unitkerja', true);
            $email = $this->input->post('email', true);
            $notelp = $this->input->post('notelp', true);

            $data = array(
                // sesuaikan dengan kolom di database
                'nama' => $nama,
                'badge' => $badge,
                'unitkerja' => $unitkerja,
                'email' => $email,
                'notelp' => $notelp
                //dst
            );

            // var_dump($data);die;
            $this->Anggota_model->CreateDataAnggota($data, 'anggotaperpus');
            $this->session->set_flashdata('flash', 'Disimpan');
            redirect('anggota');
        }
    }

    public function HapusDataAnggota($id)
    {
        $where = array('id' => $id);
        $this->Anggota_model->DeleteDataAnggota($where, 'anggotaperpus');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('anggota');
    }

    public function Edit($id)
    {
        $where = array('id' => $id);
        $data['anggota'] = $this->Anggota_model->edit_data($where, 'anggotaperpus')->result();
        $this->load->view('templates2/header', $data);
        $this->load->view('anggota/ubah', $data);
        $this->load->view('templates2/footer');
    }

    public function UpdateDataAnggota($id = null)
    {

        // $this->Model_anggota->tambahDataAnggota();
        $nama = $this->input->post('nama', true);
        $badge = $this->input->post('badge', true);
        $unitkerja = $this->input->post('unitkerja', true);
        $email = $this->input->post('email', true);
        $notelp = $this->input->post('notelp', true);

        $data = array(
            // sesuaikan dengan kolom di database
            'nama' => $nama,
            'badge' => $badge,
            'unitkerja' => $unitkerja,
            'email' => $email,
            'notelp' => $notelp
            //dst
        );

        $where = array(
            'id' => $id
        );

        // var_dump($data);die;

        $this->Anggota_model->UpdateDataAnggota($where, $data, 'anggotaperpus');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('anggota');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Anggota';
        $data['anggota'] = $this->Anggota_model->getAnggotaById($id);
        $this->load->view('templates2/header', $data);
        $this->load->view('anggota/detail', $data);
        $this->load->view('templates2/footer');
    }
}
