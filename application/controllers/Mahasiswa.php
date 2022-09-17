<?php
class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
        $this->load->library('form_validation');
    }
    public function index() {
        $data['judul'] = "Daftar Mahasiswaasaaaa";        
        // $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa(7, 1);
        
        
        // === Pagination ==
        $this->load->library('pagination');
        // === Config ==
        $config['base_url'] = 'http://localhost:8000/crud_mahasiswa/mahasiswa/index';
        $config['total_rows'] = $this->Mahasiswa_model->countAllPeoples(); // jumlah data
        $config['per_page'] = 5;

        // === Syling ===
        $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">'; // Jadi pada saat first di buat depannya mau apa        
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">'; 
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">'; 
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">'; 
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li">';
        
        $config['num_tag_open'] = '<li class="page-item">'; // digit untuk angkanya
        $config['num_tag_close'] = '</li">';

        $config['attributes'] = array('class' => 'page-link'); // Untuk menambahkan link pada a nya

        
        




        




        // === Initialize === 
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaCuy($config['per_page'], $data['start']);
        
        
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
        // ===== Pagination wpu 27:48

    }
    // ===== Untuk detail =====
    public function detail($id) {
        $data['judul'] = 'Detail Data Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/detail');
        $this->load->view('templates/footer', $data);
    }

    // ===== Untuk tambah =====
    public function tambah() {
        $data['judul'] = "Tambah Data Mahasiswa";        
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('mahasiswa');
        }

    }





    // ===== Untuk ubah =====
    public function ubah($id) {
        $data['judul'] = "Ubah data mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah');
            $this->load->view('templates/footer', $data);
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mahasiswa');
        }
    }
    // ===== Untuk hapus =====
    public function hapus($id) {
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('mahasiswa');
    }
}
