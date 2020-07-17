<?php
class Aktif_kuliah extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data

    public function display_record(){
        $query = $this->db->query("select * from client");
        $data = $query->result();

        return $data;
    }

    public function tambah_data($data){
        $query = $this->db->query("INSERT INTO aktif_kuliah(nama,nim,jurusan,semester,tahun_akademik,program) VALUES ('".$data['nama']."','".$data['nim']."','".$data['jurusan']."','".$data['semester']."','".$data['tahun_akademik']."','".$data['program']."')");

        $this->db->set($query);
    }

    public function count($data){
        $query = $this->db->query( "SELECT COUNT(nim) AS jumlah FROM aktif_kuliah WHERE nim = '".$data['nim']."'");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }

     public function delete($data){
        $query = $this->db->query( "DELETE  from aktif_kuliah WHERE id_aktif = '".$data['id_aktif']."'");
        $this->db->set($query);
    }

     public function display_edit($data){
        $query = $this->db->query( "SELECT * from aktif_kuliah WHERE id_aktif = '".$data."'");
        $row = $query->row();

        $edit['nama'] = $row->nama;
        $edit['nim'] = $row->nim;
        $edit['jurusan'] = $row->jurusan;
        $edit['semester'] = $row->semester;
        $edit['tahun_akademik'] = $row->tahun_akademik;
        $edit['program'] = $row->program;

        return $edit;
    }

    public function showdata($data){
        $query = $this->db->query( "SELECT * FROM aktif_kuliah WHERE nama = '".$data['nama']."' AND nim = '".$data['nim']."' AND semester = '".$data['semester']."' AND tahun_akademik = '".$data['tahun_akademik']."' AND program = '".$data['program']."'");
        $row = $query->row();

        $edit['id_aktif'] = $row->id_aktif;
        $edit['nim'] = $row->nim;

        return $edit;
    }
}
?>