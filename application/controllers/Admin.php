<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		    $this->load->helper('url');
		    $this->load->library('session');
        $this->load->model('Aktif_kuliah');
        $this->load->model('Notif');
        $this->load->library('cetak_pdf');
    }

    public function index(){
        $user['username'] = $this->session->userdata('username');
        $count['surat_masuk'] = $this->Notif->count();

        $this->load->view('admin/navbar');
    	  $this->load->view('admin/dashboard', $count);
        $this->load->view('admin/sidenav', $user);
        $this->load->view('admin/footer');
    }

     public function surat_masuk(){

        $result['data'] = $this->Notif->join();
        $user['username'] = $this->session->userdata('username');

    	  $this->load->view('admin/navbar');
        $this->load->view('admin/table', $result);
        $this->load->view('admin/sidenav', $user);
        $this->load->view('admin/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("Home/" , "refresh");
    }

    public function aktif_kuliah(){
       $input['nama'] =  $this->input->post('nama');
       $input['nim'] =  $this->input->post('nim');
       $input['jurusan'] =  $this->input->post('jurusan');
       $input['semester'] =  $this->input->post('semester');
       $input['tahun_akademik'] =  $this->input->post('tahun_akademik');
       $input['program'] =  $this->input->post('program');
       $input['jenis'] = 'Aktif Kuliah';


       $count = $this->Aktif_kuliah->count($input);
       if($count > 0){
           $message = "Data Sudah Ada !!";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/aktifkuliah', 'refresh');
       }
       else {

           $this->Aktif_kuliah->tambah_data($input);
           $cek = $this->Aktif_kuliah->showdata($input);
           $input['id_aktif'] = $cek['id_aktif'];
           $this->Notif->tambah_data($input);
           $message = "Tanggapan terkirim, suratmu akan segera d proses :)";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/', 'refresh');
       }

       
       
       
    }

    public function delete(){
        $input  = $this->uri->segment('3');
        $hapus = $this->Notif->display_edit($input);

        $this->Aktif_kuliah->delete($hapus);
        $result['data'] = $this->Notif->delete($input);

        redirect('Admin/surat_masuk', 'refresh');
    }

    public function surat() { 

        $input = $this->uri->segment('3');
        $result['data'] = $this->Aktif_kuliah->display_edit($input);
        $this->load->view('surat/aktif_kuliah', $result);

    }

}