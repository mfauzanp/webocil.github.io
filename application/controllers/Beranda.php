<?php

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('pagination');
    }

    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $data['buku'] = $this->Buku_model->ReadDataBuku();
        //$this->load->view('templates/header', $data);
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer');
    }

    public function cariBuku($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $data['buku'] = $this->Buku_model->cariBuku();
        $data['daftar'] = 'Daftar Buku Yang Dicari (' . count($data['buku']) . ')';
        if ($this->input->post('keyword')) {
            $data['buku'] = $this->Buku_model->cariDataBuku();
        }
        $this->load->view('beranda/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailBuku($id)
    {
        $get_data  = $this->Buku_model->edit_data([
            'id' => $id
        ], 'bukuperpus')->row();
        if (!$get_data) {
            redirect(base_url() . 'beranda');
        }

        $file = base_url('uploads/' . $get_data->filebuku);
        $data['file'] = $file;
        return $this->load->view('buku/detail_buku', $data);
    }

    public function pagination($offset = 0)
    {
        $books = $this->db->get('bukuperpus');

        $config['base_url'] = base_url() . 'beranda/pagination';
        $config['total_rows'] = $books->num_rows();
        $config['per_page'] = 9;
        $config['uri_segment'] = 3;
        $config['num_links'] = 3;

        $config['full_tag_open'] = '<ul class="pagination justify-content-center mt-3">';
        $config['full_tag_close'] = '</ul>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '<span class="sr-only"></span></a></li>';

        $config['next_link'] = '<span aria-hidden="true">&raquo;</span>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['first_link'] = '<span aria-hidden="true">&laquo; awal </span>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '<span aria-hidden="true"> akhir &raquo;</span>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['halaman'] = $this->pagination->create_links();
        $data['offset'] = $offset;
        $data['books'] = $this->Buku_model->getDataBuku($config['per_page'], $offset);

        $this->load->view('beranda/pagination', $data);
        $this->load->view('templates/footer');
    }
}
