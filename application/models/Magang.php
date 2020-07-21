<?php
class Magang extends CI_Model {
    
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
        $query = $this->db->query("INSERT INTO magang(id_mahasiswa,tujuan,di) VALUES ('".$data['id_mahasiswa']."','".$data['tujuan']."','".$data['di']."')");

        $this->db->set($query);
    }

    public function count($data){
        $query = $this->db->query( "SELECT COUNT(id_mahasiswa) AS jumlah FROM magang WHERE id_mahasiswa = '".$data['id_mahasiswa']."'");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }

     public function delete($data){
        $query = $this->db->query( "DELETE  from magang WHERE id_magang = '".$data['id_magang']."'");
        $this->db->set($query);
    }

     public function display_edit($data){
        $query = $this->db->query( "SELECT * from magang WHERE id_aktif = '".$data."'");
        $row = $query->row();

        $edit['nama'] = $row->nama;
        $edit['nim'] = $row->nim;
        $edit['jurusan'] = $row->jurusan;
        $edit['semester'] = $row->semester;
        $edit['tahun_akademik'] = $row->tahun_akademik;
        $edit['program'] = $row->program;
        $edit['tujuan'] = $row->tujuan;
        $edit['di'] = $row->di;

        return $edit;
    }

    public function showdata($data){
        $query = $this->db->query( "SELECT * FROM magang WHERE id_mahasiswa = '".$data['id_mahasiswa']."'");
        $row = $query->row();

        $edit['id_magang'] = $row->id_magang;

        return $edit;
    }

    public function join($data){
        $query = $this->db->query( "SELECT A.*,B.* FROM magang A INNER JOIN mahasiswa B ON A.id_mahasiswa = B.id_mahasiswa WHERE id_magang = ".$data."");
        $row = $query->row();

        $edit['nama'] = $row->nama;
        $edit['nim'] = $row->nim;
        $edit['jurusan'] = $row->jurusan;
        $edit['semester'] = $row->semester;
        $edit['tahun_akademik'] = $row->tahun_akademik;
        $edit['program'] = $row->program;
        $edit['tujuan'] = $row->tujuan;
        $edit['di'] = $row->di;

        return $edit;
    }
}
?>