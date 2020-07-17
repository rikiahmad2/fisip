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
        $query = $this->db->query("INSERT INTO notif(jenis,id_aktif) VALUES ('".$data['jenis']."','".$data['id_aktif']."')");

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
        $edit['jenis'] = $row->jenis;

        return $edit;
    }

    public function join(){
       $query = $this->db->query("SELECT A.*,B.* FROM aktif_kuliah A INNER JOIN notif B ON A.id_aktif = B.id_aktif");
       $hasil = $query->result();

        return $hasil;
    }

     public function count(){
        $query = $this->db->query( "SELECT COUNT(nim) AS jumlah FROM aktif_kuliah ");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }
}
?>