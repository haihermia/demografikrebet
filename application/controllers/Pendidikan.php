<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pendidikan extends CI_Controller
{
   /*
   $view berfungsi untuk membaca file view seperti read.php, create.php
   dan edit.php dengan lokasi folder views/backend/v_pendidikan/
   */
   private $view = "backend/v_pendidikan/";
   //memanggil control Admin/index dalam keadaan refresh
   private $redirect = "Pendidikan";
   public function __construct()
   {
      parent::__construct();
      IsAdmin();
      //control Admin menghubungkan model M_admin
      $this->load->model('M_pendidikan');
   }
   function index()
   {
      //memanggil model M_admin dengan function GetAll
      $read = $this->M_pendidikan->GetAll();
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
         'id_pendidikan' => $this->input->post('id_pendidikan'),
         'tingkatan_pendidikan' => $this->input->post('tingkatan_pendidikan'),
      );
      $this->M_pendidikan->save($data);
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
         'edit' => $this->M_pendidikan->edit($kd)
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
         'id_pendidikan' => $this->input->post('id_pendidikan'),
         'tingkatan_pendidikan' => ($this->input->post('tingkatan_pendidikan'))
      );
      $this->M_pendidikan->update($kd, $data);
      redirect($this->redirect, 'refresh');
   }
   public function delete()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         //data akan dihapus sesuai uri->segment(3) yang dipilih
         'id_pendidikan' => $kd
      );
      $this->M_pendidikan->delete($data);
      redirect($this->redirect, 'refresh');
   }
}

