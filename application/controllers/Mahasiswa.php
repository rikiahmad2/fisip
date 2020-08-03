<?php

class Mahasiswa extends CI_Controller
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
		$data = [
			'title' => 'Halaman Utama',
			'isi' => 'v_home',
			'user' => $this->session->userdata('username'),
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function ajuansk()
	{
		$data = [
			'title' => 'Ajuan SK',
			'isi' => 'v_ajuansk',
			'user' => $this->session->userdata('username'),
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	// Layanan Persuratan
	public function aktifkuliah()
	{
		$data = [
			'title' => 'Surat Aktif Kuliah',
			'isi' => 'v_aktifkuliah',
			'user' => $this->session->userdata('username'),
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function beasiswa()
	{
		$data = [
			'title' => 'Surat Pindah Kuliah',
			'isi' => 'v_pindahkuliah',
			'user' => $this->session->userdata('username'),
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function sksidang()
	{
		$data = [
			'title' => 'Surat Lulus Tahfidz',
			'isi' => 'v_sksidang',
			'user' => $this->session->userdata('username'),
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function izinkp()
	{
		$data = [
			'title' => 'Surat Izin Magang',
			'isi' => 'v_izinkp',
			'user' => $this->session->userdata('username'),
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function izinkuliahlapangan()
	{
		$data = [
			'title' => 'Surat Izin Kuliah Lapangan',
			'isi' => 'v_izinkuliahlapangan',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function cutikuliah()
	{
		$data = [
			'title' => 'Surat Cuti Kuliah',
			'isi' => 'v_cutikuliah',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function ketlulus()
	{
		$data = [
			'title' => 'Surat Keterangan Lulus',
			'isi' => 'v_ketlulus',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function pengantarwisuda()
	{
		$data = [
			'title' => 'Surat Pengantar Wisuda',
			'isi' => 'v_pengantarwisuda',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function ketmasihkuliah()
	{
		$data = [
			'title' => 'Surat Keterangan Masih Kuliah',
			'isi' => 'v_ketmasihkuliah',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function izinpenelitian()
	{
		$data = [
			'title' => 'Surat Izin Penelitian',
			'isi' => 'v_izinpenelitian',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function downloadtu()
	{
		$data = [
			'title' => 'Download Surat Selesai dari TU',
			'isi' => 'v_downloadtu',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function downloadjurusan()
	{
		$data = [
			'title' => 'Download Surat Selesai dari Jurusan',
			'isi' => 'v_downloadjurusan',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	// Pendaftaran Ujian Sidang
	public function daftarseminar()
	{
		$data = [
			'title' => 'Daftar Seminar KP, Proposal, Kolokium, Komprehensif, Munaqosyah',
			'isi' => 'v_daftarseminar',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function uploadsyaratkp()
	{
		$data = [
			'title' => 'Upload Syarat Seminar KP',
			'isi' => 'v_uploadsyaratkp',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function uploadsyaratkolokium()
	{
		$data = [
			'title' => 'Upload Syarat Kolokium',
			'isi' => 'v_uploadsyaratkolokium',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function uploadsyaratmunaqosyah()
	{
		$data = [
			'title' => 'Upload Syarat Munaqosyah',
			'isi' => 'v_uploadsyaratmunaqosyah',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function uploadsyaratproposal()
	{
		$data = [
			'title' => 'Upload Syarat Proposal',
			'isi' => 'v_uploadsyaratproposal',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function uploadsyaratkomprehensif()
	{
		$data = [
			'title' => 'Upload Syarat Lomprehensif',
			'isi' => 'v_uploadsyaratkomprehensif',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	// Transkrip
	public function ajuantranskrip()
	{
		$data = [
			'title' => 'Ajuan Transkrip',
			'isi' => 'v_ajuantranskrip',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function ajuantranslatetranskrip()
	{
		$data = [
			'title' => 'Ajuan Translate Transkrip',
			'isi' => 'v_ajuantranslatetranskrip',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	// Praktek Ibadah, Tilawah dan Tahfidz 
	public function ibadah()
	{
		$data = [
			'title' => 'Praktek Ibadah',
			'isi' => 'v_ibadah',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function tilawah()
	{
		$data = [
			'title' => 'Praktek Tilawah',
			'isi' => 'v_tilawah',
		];
		$this->load->view('layout/v_wrapper', $data);
	}

	public function tahfidz()
	{
		$data = [
			'title' => 'Tahfidz',
			'isi' => 'v_tahfidz',
		];
		$this->load->view('layout/v_wrapper', $data);
	}
	//--------------------------------------------------------------------

}
