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
        $query = $this->db->query("INSERT INTO aktif_kuliah(keperluan,id_mahasiswa) VALUES ('".$data['keperluan']."','".$data['id_mahasiswa']."')");

        $this->db->set($query);
    }

    public function count($data){
        $query = $this->db->query( "SELECT COUNT(keperluan) AS jumlah FROM aktif_kuliah WHERE keperluan = '".$data['keperluan']."'");
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
        $query = $this->db->query( "SELECT * FROM aktif_kuliah WHERE keperluan = '".$data['keperluan']."' AND id_mahasiswa = '".$data['id_mahasiswa']."'");
        $row = $query->row();

        $edit['id_aktif'] = $row->id_aktif;

        return $edit;
    }

    public function join($data){
        $query = $this->db->query( "SELECT A.*,B.* FROM aktif_kuliah A INNER JOIN mahasiswa B ON A.id_mahasiswa = B.id_mahasiswa WHERE id_aktif = ".$data."");
        $row = $query->row();

        $edit['nama'] = $row->nama;
        $edit['nim'] = $row->nim;
        $edit['jurusan'] = $row->jurusan;
        $edit['semester'] = $row->semester;
        $edit['tahun_akademik'] = $row->tahun_akademik;
        $edit['program'] = $row->program;
        $edit['keperluan'] = $row->keperluan;

        return $edit;
    }
}
?>