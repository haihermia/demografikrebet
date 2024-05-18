<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_umkm extends CI_Model
{
    //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
    private $table = 'umkm';
    //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
    private $pk = 'id_umkm';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'desc');
        return $this->db->get($this->table);
    }

    public function Get_umkm1()
    {   
        $this->db->where('kategori', 'kuliner');
        return $this->db->count_all_results($this->table);
    }
    public function Get_umkm2()
    {   
        $this->db->where('kategori', 'digital');
        return $this->db->count_all_results($this->table);
    }
    public function Get_umkm3()
    {   
        $this->db->where('kategori', 'kreatif');
        return $this->db->count_all_results($this->table);
    }
    public function Get_umkm4()
    {   
        $this->db->where('kategori', 'jasa');
        return $this->db->count_all_results($this->table);
    }
    public function Get_umkm5()
    {   
        $this->db->where('kategori', 'fashion');
        return $this->db->count_all_results($this->table);
    }
    public function Get_umkm6()
    {   
        $this->db->where('kategori', 'lainnya');
        return $this->db->count_all_results($this->table);
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function edit($kd)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->get($this->table)->row_array();
    }
    public function update($kd, $data)
    {
        $this->db->where($this->pk, $kd);
        return $this->db->update($this->table, $data);
    }
    public function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }
}