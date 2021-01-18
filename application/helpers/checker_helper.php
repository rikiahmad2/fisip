<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('check_login'))
{
    function check_login($must_level = 0)
    {
       $CI = & get_instance();
       $id_mahasiswa= $CI->session->userdata('id_mahasiswa');
       $username= $CI->session->userdata('username');
       $password= $CI->session->userdata('password');
       $jurusan= $CI->session->userdata('jurusan');
       
        if($id_mahasiswa == null && $username == null && $password == null && $jurusan == null){
            $b = 'no';
        }
        else{
          if($must_level != 0 && $must_level != $id_level) $b = 'no';
          else $b = 'ok';
        }

        return $b;
    }   
}

if ( ! function_exists('check_admin'))
{
    function check_admin($must_level = 0)
    {
       $CI = & get_instance();
       $id_user= $CI->session->userdata('id_user');
       $username= $CI->session->userdata('username');
       $password= $CI->session->userdata('password');
       $status= $CI->session->userdata('status');
       
        if($id_user == null && $username == null && $password == null && $status == null){
            $b = 'no';
        }
        else{
           $b = 'ok';
        }

        return $b;
    }   
}
?>


