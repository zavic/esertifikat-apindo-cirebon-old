            <!-- Sidebar -->
            <div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                  <li class="sidebar-title">
                    Utama
                  </li>
                  <li>
                    <a href="?halaman=beranda"><i data-feather="home"></i>Beranda</a>
                  </li>
                  <?php if($_SESSION['lvl'] == 1) : ?>
                    <li class="sidebar-title">
                      Manajemen Data
                    </li>
                    <li>
                      <a href=""><i data-feather="list"></i>Data Anggota<i class="fas fa-chevron-right dropdown-icon"></i></a>
                      <ul class="">
                        <li><a href="?halaman=list-data"><i class="far fa-circle"></i>List Data</a></li>
                        <li><a href="?halaman=tambah-data"><i class="far fa-circle"></i>Tambah Data</a></li>
                      </ul>
                    </li>
  
                    <li class="sidebar-title">
                      Sertifikat
                    </li>

                    <li>
                      <a href="?halaman=cetak-sertifikat"><i data-feather="inbox"></i>Cetak E-Sertifikat</a>
                    </li>
  
                    <li class="sidebar-title">
                      Pengaturan
                    </li>
  
                    <li>
                      <a href="logout.php"><i data-feather="user"></i>Logout</a>
                    </li>
                    <?php elseif($_SESSION['lvl'] == 0) : ?>
                      <li class="sidebar-title">
                        Manajemen Data
                      </li>
                      <li>
                        <a href="?halaman=list-data"><i data-feather="list"></i>List Data Anggota</a>
                      </li>
    
                      <li class="sidebar-title">
                        Sertifikat
                      </li>

                      <li>
                        <a href="?halaman=cetak-sertifikat"><i data-feather="inbox"></i>Cetak E-Sertifikat</a>
                      </li>
    
                      <li class="sidebar-title">
                        Pengaturan
                      </li>
    
                      <li>
                        <a href="logout.php"><i data-feather="user"></i>Logout</a>
                      </li>
                    <?php else:  ?>    
                      <li class="sidebar-title">
                        Sertifikat
                      </li>

                      <li>
                        <a href="?halaman=cetak-sertifikat"><i data-feather="inbox"></i>Cetak E-Sertifikat</a>
                      </li>
    
                      <li class="sidebar-title">
                        Pengaturan
                      </li>
    
                      <li>
                        <a href="logout.php"><i data-feather="user"></i>Logout</a>
                      </li>
                  <?php endif;  ?> 
                </ul>
            </div>
            <!-- Akhir Sidebar -->