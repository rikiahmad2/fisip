 <!-- /. NAV TOP  -->
 <nav class="navbar-default navbar-side" role="navigation">
     <div class="sidebar-collapse">
         <ul class="nav" id="main-menu">
             <li class="text-center">
                 <img src="<?= base_url() ?>/public/template/assets/img/find_user.png" class="user-image img-responsive" />
             </li>


             <li>
                 <a href="<?= base_url('Mahasiswa') ?>"><i class="fa fa-desktop"></i>Dashboard</a>
             </li>

             <!-- Layanan Persuratan -->
             <li>
                 <a href="#"><i class="fa fa-file-text"></i>Layanan Persuratan<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                     <li>
                         <a href="<?= base_url('Mahasiswa/aktifkuliah') ?>">Surat Aktif Kuliah</a>
                     </li>
                     <li>
                         <a href="<?= base_url('Mahasiswa/beasiswa') ?>">Surat Beasiswa</a>
                     </li>
                     <li>
                         <a href="<?= base_url('Mahasiswa/sksidang') ?>">SK Sidang</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/Mahasiswa/izinkp">Surat Izin Magang</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/izinkuliahlapangan">Surat Izin Kuliah Lapangan</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/cutikuliah">Surat Cuti Kuliah</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/ketlulus">Surat Keterangan Lulus</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/pengantarwisuda">Surat Pengantar Wisuda</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/ketmasihkuliah">Surat Keterangan Masih Kuliah (TNI, POLRI, PNS, BUMN)</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/izinpenelitian">Surat TA, Penelitian, Uji Sampel, Permintaan Data</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/downloadtu">Download Surat Selesai Dari TU</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/downloadjurusan">Download Surat Selesai Dari Jurusan</a>
                     </li>
                     <!-- <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            </li> -->
                 </ul>
             </li>

             <!-- Ajuan SK -->
             <li>
                 <a href="<?= base_url() ?>/home/ajuansk"><i class="fa fa-file"></i>Ajuan SK</a>
             </li>

             <!-- Pendaftaran Ujian Sidang -->
             <li>
                 <a href="#"><i class="fa fa-file-text-o"></i>Pendaftaran Ujian Sidang<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                     <li>
                         <a href="<?= base_url() ?>/home/daftarseminar">Daftar Seminar KP, Proposal, Kolokium, Komprehensif, Munaqosyah</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/uploadsyaratkp">Upload Syarat Seminar KP</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/uploadsyaratkolokium">Upload Syarat Kolokium</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/uploadsyaratmunaqosyah">Upload Syarat Munaqosyah</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/uploadsyaratproposal">Upload Syarat Proposal</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/uploadsyaratkomprehensif">Upload Syarat Komprehensif</a>
                     </li>
                 </ul>
             </li>

             <!-- Transkrip  -->
             <li>
                 <a href="#"><i class="fa fa-file-text"></i>Transkrip<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                     <li>
                         <a href="<?= base_url() ?>/home/ajuantranskrip">Ajuan Transkrip</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/ajuantranslatetranskrip">Ajuan Translate Transkrip</a>
                     </li>
                 </ul>
             </li>

             <!-- Praktek Ibadah, Tilawah dan Tahfidz -->
             <li>
                 <a href="#"><i class="fa fa-file-o"></i>Praktek<span class="fa arrow"></span></a>
                 <ul class="nav nav-second-level">
                     <li>
                         <a href="<?= base_url() ?>/home/ibadah">List Kelompok Ibadah</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/tilawah">List Kelompok Tilawah</a>
                     </li>
                     <li>
                         <a href="<?= base_url() ?>/home/tahfidz">List Kelompok Tahfidz</a>
                     </li>
                 </ul>
             </li>

         </ul>

     </div>

 </nav>
 <!-- /. NAV SIDE  -->
 <div id="page-wrapper">
     <div id="page-inner">
         <div class="row">
             <div class="col-md-12">
                 <h2><?= $title; ?></h2>
                 <h5>Website Layanan Akademik Fakultas Ilmu Sosial dan Ilmu Politik. </h5>

             </div>
         </div>
         <!-- /. ROW  -->
         <hr />