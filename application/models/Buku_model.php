<?php

class Buku_model extends CI_model
{
    // public function getAllAnggota()
    // {
    //     return $this->db->get('bukuperpus')->result_array();
    // }

    public function ReadDataBuku()
    {
        // Untuk melimit data, hanya 3 data yang keluar
        $this->db->limit(3);
        return $this->db->get('bukuperpus')->result();
    }

    public function getDataBuku($limit = NULL, $offset = null)
    {
        return $this->db->get('bukuperpus', $limit, $offset)->result();
    }

    public function CreateDataBuku($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function cariBuku()
    {
        $search = $this->input->get('search', TRUE);
        $data = $this->db->query("SELECT * from bukuperpus where namabuku like '%$search%' ");
        return $data->result();
    }

    function edit_data($where, $table)
    {
        //return $this->db->get_where($table, $where);
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get();
    }

    function UpdateDataBuku($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function DeleteDataBuku($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function Registration($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getBuku($id)
    {
        return $this->db->get_where('bukuperpus')->result();
    }
    // public function tambahDataAnggota($params)
    // {
    //     // $data = [
    //     //     "nama" => $this->input->post('nama', true),
    //     //     "badge" => $this->input->post('badge', true),
    //     //     "unitkerja" => $this->input->post('unitkerja', true),
    //     //     "email" => $this->input->post('email', true),
    //     //     "notelp" => $this->input->post('notelp'),
    //     // ];

    //     $this->db->insert('anggotaperpus', $params);
    // }

    // public function hapusDataAnggota($id)
    // {
    //     $this->db->delete('anggotaperpus', ['id' => $id]);
    // }

    // public function getAnggotaById($id)
    // {
    //     return $this->db->get_where('anggotaperpus', ['id' => $id])->row_array();
    // }

    public function cariDataBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('namabuku', $keyword);
        $this->db->or_like('penerbit', $keyword);
        $this->db->or_like('penulis', $keyword);
        return $this->db->get('bukuperpus')->result_array();
    }
}
