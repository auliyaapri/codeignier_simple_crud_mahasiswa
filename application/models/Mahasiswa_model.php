<?php
    class Mahasiswa_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
        }
        public function getAllMahasiswa() {

            $query = $this->db->get('mahasiswa');
            return $query->result_array();

            // return $this->db->get('mahasiswa')->result_array();
        }
        public function getMahasiswaCuy($limit, $start) {
            $query = $this->db->get('mahasiswa', $limit, $start); 
            return $query->result_array();
        }
        public function countAllPeoples() {
            $query = $this->db->get('mahasiswa');
            return $query->num_rows();
        }





        public function getMahasiswaById($id) {
            // Genereting Query
            return $this->db->get_where('mahasiswa', array('id' => $id))->row_array();
        }
        public function ubahDataMahasiswa() {
            $data = array(
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true)
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }
        public function tambahDataMahasiswa() {
            $data = array (
                'nama' => $this->input->post('nama',true),
                'nim' => $this->input->post('nim',true),
                'email' => $this->input->post('email',true),
                'jurusan' => $this->input->post('jurusan',true)
            );
            $this->db->insert('mahasiswa', $data);
        }
        public function hapusDataMahasiswa($id) {
            $this->db->where('id', $id);
            $this->db->delete('mahasiswa');
        }
    }
    

?>

