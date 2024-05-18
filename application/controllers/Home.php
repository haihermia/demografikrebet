<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller
{
    private $view = "backend/v_home/";
    private $redirect = "Home";
    public function __construct()
    {
        parent::__construct();
        //mengaktifkan session dengan demikian halaman ini jika dipanggil kini membutuhkan session
        IsAdmin();
        $this->load->model('M_penduduk');
        $this->load->model('M_pekerjaan');
        $this->load->model('M_umkm');
    }
    public function index()
    {
        $data = array(
            'judul' => "BERANDA",
            'sub' => "Halaman Beranda",
            'rt1laki'=>$this->M_penduduk->Get_rt1laki(),
            'rt2laki'=>$this->M_penduduk->Get_rt2laki(),
            'rt3laki'=>$this->M_penduduk->Get_rt3laki(),
            'rt4laki'=>$this->M_penduduk->Get_rt4laki(),
            'rt5laki'=>$this->M_penduduk->Get_rt5laki(),

            'rt1perempuan'=>$this->M_penduduk->Get_rt1perempuan(),
            'rt2perempuan'=>$this->M_penduduk->Get_rt2perempuan(),
            'rt3perempuan'=>$this->M_penduduk->Get_rt3perempuan(),
            'rt4perempuan'=>$this->M_penduduk->Get_rt4perempuan(),
            'rt5perempuan'=>$this->M_penduduk->Get_rt5perempuan(),

            'pekerjaan1'=>$this->M_penduduk->Get_pekerjaan1(),
            'pekerjaan2'=>$this->M_penduduk->Get_pekerjaan2(),
            'pekerjaan3'=>$this->M_penduduk->Get_pekerjaan3(),
            'pekerjaan4'=>$this->M_penduduk->Get_pekerjaan4(),
            'pekerjaan5'=>$this->M_penduduk->Get_pekerjaan5(),
            'pekerjaan6'=>$this->M_penduduk->Get_pekerjaan6(),
            'pekerjaan7'=>$this->M_penduduk->Get_pekerjaan7(),
            'pekerjaan8'=>$this->M_penduduk->Get_pekerjaan8(),
            'pekerjaan9'=>$this->M_penduduk->Get_pekerjaan9(),
            'pekerjaan10'=>$this->M_penduduk->Get_pekerjaan10(),
            'pekerjaan11'=>$this->M_penduduk->Get_pekerjaan11(),

            'umkm1'=>$this->M_umkm->Get_umkm1(),
            'umkm2'=>$this->M_umkm->Get_umkm2(),
            'umkm3'=>$this->M_umkm->Get_umkm3(),
            'umkm4'=>$this->M_umkm->Get_umkm4(),
            'umkm5'=>$this->M_umkm->Get_umkm5(),
            'umkm6'=>$this->M_umkm->Get_umkm6(),

            
        );
        /*
        $this->template memanggil libraries template,
        load('backend/template' artinya memanggil file template.php,
        $this->view.'read' memanggil file read.php
        catatan: setelah kita mengetahui untuk view kali ini script ada penambahan 
       template,
        maka CRUD Admin pembalajaran sebelumnya mengikuti script seperti pada 
       control Home */
        $this->template->load('backend/template', $this->view . 'read', $data);
        // echo $this->session->set_userdata('nama_admin');
    }

}
