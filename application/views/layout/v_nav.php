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
                         <a href="<?= base_url() ?>/Mahasiswa/izinkp">Surat Izin Magang</a>
                     </li>
                     <!-- <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                            </li> -->
                 </ul>
             </li>

             <!-- Ajuan SK -->
             <li>
                 <a href="<?= base_url('Mahasiswa/sksidang') ?>"><i class="fa fa-file"></i>Ajuan SK</a>
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