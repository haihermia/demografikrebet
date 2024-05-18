<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pekerjaan extends CI_Controller
{
   /*
   $view berfungsi untuk membaca file view seperti read.php, create.php
   dan edit.php dengan lokasi folder views/backend/v_admin/
   */
   private $view = "backend/v_pekerjaan/";
   //memanggil control Admin/index dalam keadaan refresh
   private $redirect = "Pekerjaan";
   public function __construct()
   {
      
      parent::__construct();
      IsAdmin();
      //control Admin menghubungkan model M_admin
      $this->load->model('M_pekerjaan');
   }
   function index()
   {
      //memanggil model M_admin dengan function GetAll
      $read = $this->M_pekerjaan->GetAll();
      $data = array(
         //'read' variabel yang akan dipanggil pada view read.php
         'read' => $read
      );
      /*
      dengan $this->view artinya memanggil private $view="backend/v_admin/"
      dilanjutkan dengan 'read' untuk memanggil read.php
      */
      $this->template->load('backend/template', $this->view . 'read', $data);
      // echo $this->session->set_userdata('nama_admin');
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
         'id_pekerjaan' => $this->input->post('id_pekerjaan'),
         'nama_pekerjaan' => $this->input->post('nama_pekerjaan')
      );
      $this->M_pekerjaan->save($data);
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
         'edit' => $this->M_pekerjaan->edit($kd)
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
         'id_pekerjaan' => $this->input->post('id_pekerjaan'),
         'nama_pekerjaan' => $this->input->post('nama_pekerjaan')
      );
      $this->M_pekerjaan->update($kd, $data);
      redirect($this->redirect, 'refresh');
   }
   public function delete()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         //data akan dihapus sesuai uri->segment(3) yang dipilih
         'id_pekerjaan' => $kd
      );
      $this->M_pekerjaan->delete($data);
      redirect($this->redirect, 'refresh');
   }
}

