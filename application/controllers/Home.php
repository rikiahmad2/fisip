<?php

class Home extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('User');
		$this->load->library('session');
    }

	public function index()
	{
		$this->load->view('landingpage');
	}

	public function login()
	{	
		$session = $this->session->all_userdata();
        if(isset($session["username"])){
            redirect("Admin/" , "refresh");
        }
		$this->load->view('login/login');
	}

	public function submit_login()
	{

		$login = $this->User->login($this->input->post('username'), $this->input->post('password'));
        if($login == "ok"){
           $user = $this->session->userdata('level');

            if($user == 1 ){
            $message = "Login Berhasil !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect('Admin/', 'refresh');
        	}
        	else{
        	$message = "Login Berhasil !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect("/Mahasiswa" , "refresh");
            }
        }
        else{
           $message = "Password/ Username Salah";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Home/login', 'refresh');
        }
	}
	//--------------------------------------------------------------------

}
