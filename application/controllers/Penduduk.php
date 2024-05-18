<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penduduk extends CI_Controller
{
   /*
   $view berfungsi untuk membaca file view seperti read.php, create.php
   dan edit.php dengan lokasi folder views/backend/v_admin/
   */
   private $view = "backend/v_penduduk/";
   //memanggil control Admin/index dalam keadaan refresh
   private $redirect = "Penduduk";
   public function __construct()
   {
      parent::__construct();
      IsAdmin();
      //control Admin menghubungkan model M_admin
      $this->load->model('M_penduduk');
   }
   function index()
   {
      //memanggil model M_admin dengan function GetAll
      $read = $this->M_penduduk->GetAll();
      $data = array(
         //'read' variabel yang akan dipanggil pada view read.php
        
         

         'read' => $read
      );
      /*
      dengan $this->view artinya memanggil private $view="backend/v_admin/"
      dilanjutkan dengan 'read' untuk memanggil read.php
      */
       $this->template->load('backend/template', $this->view . 'read', $data);
   }
   public function create()
   {
      //untuk create tidak memangil model, langsung ke view dengan data baru
      $data = array(
         'create' => ''
      );
      $this->template->load('backend/template', $this->view . 'create', $data);
   }
   public function save()
   {
      $data = array(
         'nik' => $this->input->post('nik'),
         'nomor_kk' => $this->input->post('nomor_kk'),
         'id_pendidikan' => $this->input->post('id_pendidikan'),
         'id_pekerjaan' => $this->input->post('id_pekerjaan'),
         'nama' => $this->input->post('nama'),
         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
         'tempat_lahir' => $this->input->post('tempat_lahir'),
         'tanggal_lahir' => $this->input->post('tanggal_lahir'),
         'status' => $this->input->post('status'),
         'RT' => $this->input->post('RT'),
      );
      $this->M_penduduk->save($data);
      //dengan $this->redirect artinya memanggil private $redirect = "Admin"
      redirect($this->redirect, 'refresh');
   }
   public function edit()
   {
      /*
      segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
      data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
      */
      $kd = $this->uri->segment(3);
      $data = array(
         //'edit' variabel yang akan dipanggil pada view edit.php
         'edit' => $this->M_penduduk->edit($kd)
      );
      $this->template->load('backend/template', $this->view . 'edit', $data);
   }
   public function update()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         /*
         'nama_admin' =nama yang diambil dari fild pada tabel
         $this->input->post('nama_admin') =nama yang diambil dari form
         */
         'nik' => $this->input->post('nik'),
         'nomor_kk' => $this->input->post('nomor_kk'),
         'id_pendidikan' => $this->input->post('id_pendidikan'),
         'id_pekerjaan' => $this->input->post('id_pekerjaan'),
         'nama' => $this->input->post('nama'),
         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
         'tempat_lahir' => $this->input->post('tempat_lahir'),
         'tanggal_lahir' => $this->input->post('tanggal_lahir'),
         'status' => $this->input->post('status'),
         'RT' => $this->input->post('RT'),
      );
      $this->M_penduduk->update($kd, $data);
      redirect($this->redirect, 'refresh');
   }
   public function delete()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         //data akan dihapus sesuai uri->segment(3) yang dipilih
         'nik' => $kd
      );
      $this->M_penduduk->delete($data);
      redirect($this->redirect, 'refresh');
   }
}

