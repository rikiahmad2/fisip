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
        $this->load->model('Magang');
        $this->load->model('Beasiswa');
        $this->load->model('Sksidang');
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
       $input['keperluan'] =  $this->input->post('keperluan');
       $input['id_mahasiswa'] = $this->session->userdata('id_mahasiswa');
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

    public function sk_sidang(){

     $input['judul'] =  $this->input->post('judul');
     $input['id_mahasiswa'] = $this->session->userdata('id_mahasiswa');
     $input['jenis'] = 'SK Sidang';

     $count = $this->Sksidang->count($input);
     if($count > 0){
           $message = "Data Sudah Ada !!";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/sksidang', 'refresh');
       }
       else {

           $this->Sksidang->tambah_data($input);
           $cek = $this->Sksidang->showdata($input);
           $input['id_sk'] = $cek['id_sk'];
           $this->Notif->tambah_data_sksidang($input);
           $message = "Tanggapan terkirim, suratmu akan segera d proses :)";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/', 'refresh');
       } 
    }

    public function delete(){
        $input  = $this->uri->segment('3');
        $hapus = $this->Notif->display_edit($input);

        if($hapus['jenis'] == 'Aktif Kuliah'){
        $this->Aktif_kuliah->delete($hapus);
        }
        if($hapus['jenis'] == 'Izin Magang'){
        $this->Magang->delete($hapus);
        }
        if($hapus['jenis'] == 'Beasiswa'){
        $this->Beasiswa->delete($hapus);
        }
        if($hapus['jenis'] == 'SK Sidang'){
        $this->Sksidang->delete($hapus);
        }

        $result['data'] = $this->Notif->delete($input);

        redirect('Admin/surat_masuk', 'refresh');
    }

    public function surat() { 

        $input = $this->uri->segment('3');
        $result['data'] = $this->Aktif_kuliah->join($input);
        $this->load->view('surat/aktif_kuliah', $result);

    }
    public function izinmagang(){
       $input['tujuan'] = $this->input->post('tujuan');
       $input['di'] = $this->input->post('di');
       $input['id_mahasiswa'] = $this->session->userdata('id_mahasiswa');
       $input['jenis'] = 'Izin Magang';


       $count = $this->Magang->count($input);
       if($count > 0){
           $message = "Data Sudah Ada !!";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/izinkp', 'refresh');
       }
       else {

           $this->Magang->tambah_data($input);
           $cek = $this->Magang->showdata($input);
           $input['id_magang'] = $cek['id_magang'];
           $this->Notif->tambah_data_magang($input);

           $message = "Tanggapan terkirim, suratmu akan segera d proses :)";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/', 'refresh');
       } 
    }

     public function surat_magang() { 

        $input = $this->uri->segment('3');
        $result['data'] = $this->Magang->join($input);
        $this->load->view('surat/magang', $result);

     }

     public function beasiswa() { 
       $input['nama_beasiswa'] = $this->input->post('nama_beasiswa');
       $input['id_mahasiswa'] = $this->session->userdata('id_mahasiswa');
       $input['jenis'] = 'Beasiswa';


       $count = $this->Beasiswa->count($input);
       if($count > 0){
           $message = "Data Sudah Ada !!";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/izinkp', 'refresh');
       }
       else {

           $this->Beasiswa->tambah_data($input);
           $cek = $this->Beasiswa->showdata($input);
           $input['id_beasiswa'] = $cek['id_beasiswa'];
           $this->Notif->tambah_data_beasiswa($input);

           $message = "Tanggapan terkirim, suratmu akan segera d proses :)";
           echo "<script type='text/javascript'>alert('$message');</script>";
           redirect('Mahasiswa/', 'refresh');
       } 
    }

    public function surat_beasiswa() { 

        $input = $this->uri->segment('3');
        $result['data'] = $this->Beasiswa->join($input);
        $this->load->view('surat/beasiswa', $result);

    }

    public function surat_sksidang() { 

        $input['id_sk'] = $this->input->post('bookId');
        $input['dp1'] = $this->input->post('dp1');
        $input['dp2'] = $this->input->post('dp2');
        $this->Sksidang->tambah_dp($input);

        $result['data'] = $this->Sksidang->join($input);
        $this->load->view('surat/sidang', $result);
    }


}