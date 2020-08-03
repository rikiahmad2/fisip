<?php
class Beasiswa extends CI_Model {
    
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
        $query = $this->db->query("INSERT INTO beasiswa(id_mahasiswa,nama_beasiswa) VALUES ('".$data['id_mahasiswa']."','".$data['nama_beasiswa']."')");

        $this->db->set($query);
    }

     public function count($data){
        $query = $this->db->query( "SELECT COUNT(id_mahasiswa) AS jumlah FROM beasiswa WHERE id_mahasiswa = '".$data['id_mahasiswa']."'");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }

    public function showdata($data){
        $query = $this->db->query( "SELECT * FROM beasiswa WHERE id_mahasiswa = '".$data['id_mahasiswa']."'");
        $row = $query->row();

        $edit['id_beasiswa'] = $row->id_beasiswa;

        return $edit;
    }

    public function join($data){
        $query = $this->db->query( "SELECT A.*,B.* FROM beasiswa A INNER JOIN mahasiswa B ON A.id_mahasiswa = B.id_mahasiswa WHERE id_beasiswa = ".$data."");
        $row = $query->row();

        $edit['nama'] = $row->nama;
        $edit['nim'] = $row->nim;
        $edit['jurusan'] = $row->jurusan;
        $edit['semester'] = $row->semester;
        $edit['tahun_akademik'] = $row->tahun_akademik;
        $edit['program'] = $row->program;
        $edit['nama_beasiswa'] = $row->nama_beasiswa;

        return $edit;
    }

    public function delete($data){
        $query = $this->db->query( "DELETE  from beasiswa WHERE id_beasiswa = '".$data['id_beasiswa']."'");
        $this->db->set($query);
    }
}
?>