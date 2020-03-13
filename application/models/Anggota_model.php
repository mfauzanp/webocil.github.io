<?php

class Anggota_model extends CI_model
{
    // public function getAllAnggota()
    // {
    //     return $this->db->get('anggotaperpus')->result_array();
    // }

    public function ReadDataAnggota()
    {
        return $this->db->get('anggotaperpus')->result();
    }

    public function CreateDataAnggota($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function UpdateDataAnggota($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function DeleteDataAnggota($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function Registration($data, $table)
    {
        $this->db->insert($table, $data);
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

    public function getAnggotaById($id)
    {
        return $this->db->get_where('anggotaperpus', ['id' => $id])->row_array();
    }

    public function cariDataAnggota()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('unitkerja', $keyword);
        $this->db->or_like('badge', $keyword);
        return $this->db->get('anggotaperpus')->result_array();
    }
}
