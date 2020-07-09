<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
    }

    public function index(){
        $user['username'] = $this->session->userdata('username');

    	$this->load->view('admin/dashboard', $user);
    }

     public function table(){

    	$this->load->view('admin/table');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("Home/login" , "refresh");
    }

}