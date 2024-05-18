<?php if (!defined('BASEPATH'))
    exit ('No direct script access allowed');
class Umkm extends CI_Controller
{
    private $view = "backend/v_umkm/";
    private $redirect = "umkm";
    public function __construct()
    {
        parent::__construct();
        //Load model
        $this->load->model('M_umkm');
        IsAdmin();
    }
    public function index()
    {
        if ($this->input->get('search')) {
            $q = $this->M_umkm->search($this->input->get('search'));
        } else {
            $q = $this->M_umkm->GetAll();
        }
        $data = array(
            'judul' => "DATA UMKM",
            'sub' => "Lihat UMKM",
            'read' => $q
        );
        $this->template->load('backend/template', $this->view . 'read', $data);
    }
    public function create()
    {
        $data = array(
            'judul' => "DATA UMKM",
            'sub' => "Tambah Umkm",
            'create' => ''
        );
        $this->template->load('backend/template', $this->view . 'create', $data);
    }
    public function save() {
        // Check if form is submitted with file
        if(isset($_FILES['img_umkm']) && $_FILES['img_umkm']['error'] !== UPLOAD_ERR_NO_FILE) {
            $config['upload_path'] = './assets/img_umkm/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 50000; // 50 MB
    
            $this->load->library('upload', $config);
    
            // Perform upload
            if (!$this->upload->do_upload('img_umkm')) {
                // Upload failed, show error message
                $error = $this->upload->display_errors();
                echo "<script>alert('$error');</script>";
                redirect($this->redirect, 'refresh');
            } else {
                // Upload success
                $img_umkm_data = $this->upload->data();
                $img_umkm = $img_umkm_data['file_name'];
    
                $data = array(
                    'id_umkm' => $this->input->post('id_umkm'),
                    'nama' => $this->input->post('nama'),
                    'lokasi' => $this->input->post('lokasi'),
                    'img_umkm' => $img_umkm,
                    'kategori' => $this->input->post('kategori'),
                    'maps' => $this->input->post('maps'),
                );
    
                // Save data to database
                $this->M_umkm->save($data);
                echo "<script>alert('Data saved successfully');</script>"; // Debugging message
                redirect($this->redirect, 'refresh');
            }
        } else {
            // img_umkm is not found in the form submission
            echo "<script>alert('Please select an image');</script>";
            redirect($this->redirect, 'refresh');
        }
    }
    
    public function edit()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'judul' => "DATA UMKM",
            'sub' => "Ubah Umkm",
            'edit' => $this->M_umkm->edit($kd)
        );
        $this->template->load('backend/template', $this->view . 'edit', $data);
    }
    public function update()
    {
        $kd = $this->uri->segment(3);
        //img_umkm
        $name_imgumkm = $_FILES['img_umkm']['name'];
        $type_imgumkm = $_FILES['img_umkm']['type'];
        $tmp_imgumkm = $_FILES['img_umkm']['tmp_name'];
        //upload img
        if (!empty ($tmp_imgumkm)) {
            if (
                $type_imgumkm != "image/jpeg" and $type_imgumkm !=
                "image/jpg" and $type_imgumkm != "image/png"
            ) {
                echo "<script>alert('Format yang digunakan jpeg|jpg|png');</script>";
                redirect($this->redirect, 'refresh');
            } else {
                $img_umkm =
                    UploadImg($_FILES['img_umkm'], './assets/img_umkm/', 'umkm', 500);
                $data = array(
                    'id_umkm' => $this->input->post('id_umkm'),
                    'nama' => $this->input->post('nama'),
                    'lokasi' => $this->input->post('lokasi'),
                    'img_umkm' => $img_umkm,
                    'kategori' => $this->input->post('kategori'),
                    'maps' => $this->session->userdata('kd_admin'),
                );
            }
        } else {
            $data = array(
                'id_umkm' => $this->input->post('id_umkm'),
                'nama' => $this->input->post('nama'),
                'lokasi' => $this->input->post('lokasi'),
                'kategori' => $this->input->post('kategori'),
                'maps' => $this->input->post('maps'),
                'kd_admin' => $this->session->userdata('kd_admin'),
            );
        }
        $this->M_umkm->update($kd, $data);
        redirect($this->redirect, 'refresh');
    }
    public function status()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'st_umkm' => $this->uri->segment(4)
        );
        $this->M_umkm->update($kd, $data);
        redirect($this->redirect, 'refresh');
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'id_umkm' => $kd
        );
        $this->M_umkm->delete($data);
        redirect($this->redirect, 'refresh');
    }
}
