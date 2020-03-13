<?php

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->model('Buku_model');
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->Buku_model->ReadDataBuku();
        if ($this->input->post('keyword')) {
            $data['buku'] = $this->Buku_model->cariDataBuku();
        }
        $this->load->view('templates2/header');
        $this->load->view('buku/tambah');
        $this->load->view('templates2/footer');
    }

    public function tambah()
    {
        $data['buku'] = $this->Buku_model->ReadDataBuku();
        $data['judul'] = 'Form Tambah Data Buku';
        $this->load->view('templates/header', $data);
        $this->load->view('buku/tambah');
        $this->load->view('templates/footer');
    }

    public function InsertDataBuku()
    {

        $config['upload_path'] = './uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        if (!empty($_FILES['cover']['name'])) {

            if ($this->upload->do_upload('cover')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './uploads/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '50%';
                $config['width'] = 600;
                $config['height'] = 400;
                $config['new_image'] = './uploads/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $data['namabuku'] = $this->input->post('namabuku');
                $data['penerbit'] = $this->input->post('penerbit');
                $data['tahunterbit'] = $this->input->post('tahunterbit');
                $data['kategoribuku'] = $this->input->post('kategoribuku');
                $data['deskbuku'] = $this->input->post('deskbuku');
                $data['penulis'] = $this->input->post('penulis');
                $cover = $gbr['file_name'];
            } else {
                echo "Gagal Upload Cover";
                die;
            }
            if ($this->upload->do_upload('filebuku')) {
                $filebuku = $this->upload->data('file_name');
            } else {
                echo "Gagal upload pdf";
                die;
            }
            $data = array(
                'namabuku' => $this->input->post('namabuku'),
                'penerbit' => $this->input->post('penerbit'),
                'tahunterbit' => $this->input->post('tahunterbit'),
                'kategoribuku' => $this->input->post('kategoribuku'),
                'deskbuku' => $this->input->post('deskbuku'),
                'penulis' => $this->input->post('penulis'),
                'cover' => $cover,
                'filebuku' => $filebuku
            );

            // var_dump($data);die;
            if ($this->Buku_model->CreateDataBuku($data, 'bukuperpus')) {
                $this->session->set_flashdata('flash', 'Disimpan');
                redirect('buku');
            } else {
                echo "Gagal Masuk ke db";
            }
        } else {
            echo "Kosong kek hati:p";
        }
    }

    public function HapusDataBuku($id)
    {
        $where = array('id' => $id);
        $this->Anggota_model->DeleteDataAnggota($where, 'bukuperpus');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('buku');
    }

    public function Edit($id)
    {
        $where = array('id' => $id);
        $data['buku'] = $this->Buku_model->edit_data($where, 'bukuperpus')->result();
        $this->load->view('buku/ubah', $data);
    }

    public function UpdateDataBuku($id = null)
    {

        // $this->Model_anggota->tambahDataAnggota();
        $namabuku = $this->input->post('namabuku', true);
        $penerbit = $this->input->post('penerbit', true);
        $tahunterbit = $this->input->post('tahunterbit', true);
        $kategoribuku = $this->input->post('kategoribuku', true);
        $penulis = $this->input->post('penulis', true);

        $data = array(
            // sesuaikan dengan kolom di database
            'namabuku' => $namabuku,
            'penerbit' => $penerbit,
            'tahunterbit' => $tahunterbit,
            'kategoribuku' => $kategoribuku,
            'penulis' => $penulis
            //dst
        );

        $where = array(
            'id' => $id
        );

        // var_dump($data);die;

        $this->Buku_model->UpdateDataBuku($where, $data, 'bukuperpus');
        $this->session->set_flashdata('flash', 'Diubah');
        redirect('buku');
    }

    public function detail($id)
    {
        $get_data  = $this->Buku_model->edit_data([
            'id' => $id
        ], 'bukuperpus')->row();

        //var_dump($get_data);
        $file = base_url('uploads/' . $get_data->filebuku);
        $data['file'] = $file;
        return $this->load->view('buku/detail_buku', $data);
    }

    public function databuku()
    {
        $data['judul'] = 'Data Buku';
        $data['buku'] = $this->Buku_model->ReadDataBuku();
        $this->load->view('templates2/header', $data);
        $this->load->view('buku/databuku', $data);
        $this->load->view('templates2/footer');
    }

    public function tampildatabuku()
    {
        $data['judul'] = 'Detail Data Buku';
        $data['buku'] = $this->Buku_model->ReadDataBuku();
        $this->load->view('templates2/header', $data);
        $this->load->view('buku/detail', $data);
        $this->load->view('templates2/footer');
    }
}
