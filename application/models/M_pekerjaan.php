<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pekerjaan extends CI_Model
{
    //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
    private $table = 'pekerjaan';
    //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
    private $pk = 'id_pekerjaan';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'desc');
        return $this->db->get($this->table);
    }

    public function Get_pekerjaan1()
    {   
        $this->db->where('id_pekerjaan', '1');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan2()
    {   
        $this->db->where('id_pekerjaan', '2');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan3()
    {   
        $this->db->where('id_pekerjaan', '3');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan4()
    {   
        $this->db->where('id_pekerjaan', '4');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan5()
    {   
        $this->db->where('id_pekerjaan', '5');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan6()
    {   
        $this->db->where('id_pekerjaan', '6');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan7()
    {   
        $this->db->where('id_pekerjaan', '7');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan8()
    {   
        $this->db->where('id_pekerjaan', '8');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan9()
    {   
        $this->db->where('id_pekerjaan', '9');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan10()
    {   
        $this->db->where('id_pekerjaan', '10');
        return $this->db->count_all_results($this->table);
    }
    public function Get_pekerjaan11()
    {   
        $this->db->where('id_pekerjaan', '11');
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