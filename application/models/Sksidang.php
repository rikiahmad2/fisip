<?php
class Sksidang extends CI_Model {
    
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
        $query = $this->db->query("INSERT INTO sksidang(judul,id_mahasiswa) VALUES ('".$data['judul']."','".$data['id_mahasiswa']."')");

        $this->db->set($query);
    }

    public function count($data){
        $query = $this->db->query( "SELECT COUNT(judul) AS jumlah FROM sksidang WHERE judul = '".$data['judul']."'");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }

     public function delete($data){
        $query = $this->db->query( "DELETE  from sksidang WHERE id_sk = '".$data['id_sk']."'");
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
        $query = $this->db->query( "SELECT * FROM sksidang WHERE judul = '".$data['judul']."' AND id_mahasiswa = '".$data['id_mahasiswa']."'");
        $row = $query->row();

        $edit['id_sk'] = $row->id_sk;

        return $edit;
    }

    public function join($data){
        $query = $this->db->query( "SELECT A.*,B.* FROM sksidang A INNER JOIN mahasiswa B ON A.id_mahasiswa = B.id_mahasiswa WHERE id_sk = ".$data['id_sk']."");
        $row = $query->row();

        $edit['nama'] = $row->nama;
        $edit['nim'] = $row->nim;
        $edit['jurusan'] = $row->jurusan;
        $edit['semester'] = $row->semester;
        $edit['tahun_akademik'] = $row->tahun_akademik;
        $edit['program'] = $row->program;
        $edit['judul'] = $row->judul;
        $edit['dp1'] = $row->dp1;
        $edit['dp2'] = $row->dp2;

        return $edit;
    }

    public function tambah_dp($data){
        $query = $this->db->query("UPDATE sksidang SET dp1 = '".$data['dp1']."', dp2 = '".$data['dp2']."' WHERE id_sk = '".$data['id_sk']."'");

        $this->db->set($query);
    }
}
?>