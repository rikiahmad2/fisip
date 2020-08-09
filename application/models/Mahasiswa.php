<?php
class Mahasiswa extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    //query login

    public function login($username, $password){
        $result = "no";
        $query = $this->db->query("select * from mahasiswa WHERE nim = '".$username."' AND password = '".$password."'");

        $row = $query->row();

        if ($query->num_rows() > 0){
            $result = "ok"; 
            $user['id_mahasiswa'] = $row->id_mahasiswa;
            $user['username'] = $row->nim;
            $user['password'] = $row->password;
            $user['jurusan'] = $row->jurusan;
            $user['program'] = $row->program;
            $user['tahun_akademik'] = $row->tahun_akademik;
            $user['nomor_hp'] = $row->nomor_hp;

            $this->session->set_userdata($user);
        }   
        
        return $result;
    }

    public function tambah_data($data){
        $query = $this->db->query("INSERT INTO mahasiswa(nama,password,nim,jurusan,semester,program,tahun_akademik,nomor_hp) VALUES ('".$data['nama']."','".$data['password']."','".$data['nim']."','".$data['jurusan']."','".$data['program']."','".$data['semester']."','".$data['tahun']."','".$data['no']."')");

        $this->db->set($query);
    }
}

?>