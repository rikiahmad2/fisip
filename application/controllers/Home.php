<?php

class Home extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('User');
        $this->load->model('Mahasiswa');
		$this->load->library('session');
    }

	public function index()
	{
		$this->load->view('landingpage');
	}

	public function login()
	{	
		$this->load->view('login/login');
	}

	public function submit_login()
	{

		$login = $this->User->login($this->input->post('username'), $this->input->post('password'));

        if($login == "ok"){
            $message = "Login Berhasil !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect("/Admin" , "refresh");
        }

        else{
            $message = "Login Gagal !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect("/Home/login" , "refresh");
        }
	}
	//--------------------------------------------------------------------

    public function login_mhs()
    {   
        $session = $this->session->all_userdata();
        if(isset($session["jurusan"])){
            redirect("Mahasiswa/" , "refresh");
        }
        $session = $this->session->all_userdata();
        if(isset($session["status"])){
            redirect("Admin/" , "refresh");
        }
        $this->load->view('login/login_mhs');
    }

    public function submit_login_mhs()
    {

        $login = $this->Mahasiswa->login($this->input->post('username'), $this->input->post('password'));

        if($login == "ok"){
            $message = "Login Berhasil !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect("/Mahasiswa" , "refresh");
        }

        else{
            $message = "Login Gagal !";
            echo "<script type='text/javascript'>alert('$message');</script>";
            redirect("/Home/login_mhs" , "refresh");
        }
    }

}
