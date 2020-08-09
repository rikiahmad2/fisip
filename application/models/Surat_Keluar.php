<?php
class Surat_Keluar extends CI_Model {
    
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
        $query = $this->db->query("INSERT INTO surat_keluar(id_notif,jenis) VALUES ('".$data['id_notif']."','".$data['jenis']."')");

        $this->db->set($query);
    }

    public function count(){
        $query = $this->db->query( "SELECT COUNT(jenis) AS jumlah FROM surat_keluar");
        $row = $query->row();

        $edit = $row->jumlah;

        return $edit;
    }
}
?>