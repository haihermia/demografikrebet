<?php
defined('BASEPATH') or exit ('No direct script access allowed');
class M_penduduk extends CI_Model
{
    //$table sebagai tabel yang digunakan, dengan pemanggilannya $this->table
    private $table = 'penduduk';
    //$pk atau Primary Key yang digunakan, dengan pemanggilannya $this->pk
    private $pk = 'nik';
    public function GetAll()
    {
        $this->db->order_by($this->pk, 'desc');
        $this->db->join('pendidikan', 'penduduk.id_pendidikan=pendidikan.id_pendidikan');
        $this->db->join('pekerjaan', 'penduduk.id_pekerjaan=pekerjaan.id_pekerjaan');
        return $this->db->get($this->table);
    }

    public function Get_rt1laki()
    {
        $this->db->where('jenis_kelamin', 'Laki-Laki');
        $this->db->where('RT', '1');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt2laki()
    {
        $this->db->where('jenis_kelamin', 'Laki-Laki');
        $this->db->where('RT', '2');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt3laki()
    {
        $this->db->where('jenis_kelamin', 'Laki-Laki');
        $this->db->where('RT', '3');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt4laki()
    {
        $this->db->where('jenis_kelamin', 'Laki-Laki');
        $this->db->where('RT', '4');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt5laki()
    {
        $this->db->where('jenis_kelamin', 'Laki-Laki');
        $this->db->where('RT', '5');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt1perempuan()
    {
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('RT', '1');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt2perempuan()
    {
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('RT', '2');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt3perempuan()
    {
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('RT', '3');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt4perempuan()
    {
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('RT', '4');
        return $this->db->count_all_results($this->table);
    }
    public function Get_rt5perempuan()
    {
        $this->db->where('jenis_kelamin', 'Perempuan');
        $this->db->where('RT', '5');
        return $this->db->count_all_results($this->table);
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