<?php
class User extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    //query login

    public function login($username, $password){
        $result = "no";
        $query = $this->db->query("select * from user WHERE username = '".$username."' AND password = '".$password."'");

        $row = $query->row();

        if ($query->num_rows() > 0){
            $result = "ok"; 
            $user['id_user'] = $row->id_user;
            $user['username'] = $row->username;
            $user['password'] = $row->password;
            $user['level'] = $row->level;
            $this->session->set_userdata($user);
        }   
        
        return $result;
    }
}

?>