<?php
class Notif extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data

    public function display_record(){
        $query = $this->db->query("select * from notif");
        $data = $query->result();

        return $data;
    }

    public function tambah_data($data){
        $query = $this->db->query("INSERT INTO notif(jenis,id_aktif,id_mahasiswa) VALUES ('".$data['jenis']."','".$data['id_aktif']."','".$data['id_mahasiswa']."')");

        $this->db->set($query);
    }

     public function delete($data){
        $query = $this->db->query( "DELETE  from notif WHERE id_notif = '".$data."'");
        $this->db->set($query);
    }

     public function display_edit($data){
        $query = $this->db->query( "select * from notif WHERE id_notif = '".$data."'");
        $row = $query->row();

        $edit['id_aktif'] = $row->id_aktif;
        $edit['id_magang'] = $row->id_magang;
        $edit['id_beasiswa'] = $row->id_beasiswa;
        $edit['id_sk'] = $row->id_sk;
        $edit['jenis'] = $row->jenis;

        return $edit;
    }

    public function join(){
       $query = $this->db->query("SELECT A.*,B.* FROM notif A INNER JOIN mahasiswa B ON A.id_mahasiswa = B.id_mahasiswa");
       $hasil = $query->result();

        return $hasil;
    }

     public function count(){
        $query = $this->db->query( "SELECT COUNT(id_notif) AS jumlah FROM notif ");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }

     public function tambah_data_magang($data){
        $query = $this->db->query("INSERT INTO notif(jenis,id_magang,id_mahasiswa) VALUES ('".$data['jenis']."','".$data['id_magang']."','".$data['id_mahasiswa']."')");

        $this->db->set($query);
    }

    public function tambah_data_beasiswa($data){
        $query = $this->db->query("INSERT INTO notif(jenis,id_beasiswa,id_mahasiswa) VALUES ('".$data['jenis']."','".$data['id_beasiswa']."','".$data['id_mahasiswa']."')");

        $this->db->set($query);
    }

    public function tambah_data_sksidang($data){
        $query = $this->db->query("INSERT INTO notif(jenis,id_sk,id_mahasiswa) VALUES ('".$data['jenis']."','".$data['id_sk']."','".$data['id_mahasiswa']."')");

        $this->db->set($query);
    }
}
?>