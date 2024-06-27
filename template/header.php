<?php
// session_start();
//mengatasi jika user langsung masuk menggunakan link, tanpa login
// if(empty($_SESSION['id_user']) or empty($_SESSION['username']))
// {
//   echo "<script>
//       alert('Maaf, untuk mengakses halaman ini, silahkan Login terlebih dahulu..!!');
//       document.location='index.php';
//       </script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Responsive Admin Dashboard Template">
      <meta name="keywords" content="admin,dashboard">
      <meta name="author" content="stacks">
      <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      
      <!-- Title -->
      <title>Aplikasi Sertifikat DPK APINDO Kota Cirebon</title>

      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
      <link rel="manifest" href="assets/images/favicon/site.webmanifest">

      <!-- Styles -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700,800&display=swap" rel="stylesheet">
      <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
      <link href="assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
      <link href="assets/plugins/apexcharts/apexcharts.css" rel="stylesheet">

      
      <!-- Theme Styles -->
      <link href="assets/css/main.min.css" rel="stylesheet">
      <link href="assets/css/custom.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif] -->
  </head>

  <!-- Awal body -->
  <body>
    <!-- <div class='loader'>
      <div class='spinner-grow text-primary' role='status'>
        <span class='sr-only'>Loading...</span>
      </div>
    </div> -->

      <!-- Awal Container -->
      <div class="page-container">
        <!-- Awal Header -->
        <div class="page-header">
          <nav class="navbar navbar-expand-lg d-flex justify-content-between">

            <div class="" id="navbarNav">
              <ul class="navbar-nav" id="leftNav">
                <li class="nav-item">
                  <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                </li>
              </ul>
            </div>
                      
            <!-- Logo Header -->
            <div class="logo">
              <a class="navbar-brand" href="index.php"></a>
            </div>
                
              <!-- Nav kanan -->
              <div class="" id="headerNav">
                <ul class="navbar-nav">
            
                  <!-- Pencarian -->
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link search-dropdown" href="#" id="searchDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="search"></i></a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-lg search-drop-menu" aria-labelledby="searchDropDown">
                        <form>
                          <input class="form-control" type="text" placeholder="Cari Disini ..." aria-label="Search">
                        </form>
                          <h6 class="dropdown-header">(Belum Berfungsi)</h6>
                      </div>
                  </li> -->
                          
                  <!-- Profil -->
                  <li class="nav-item dropdown">
                    <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/images/avatars/profile-image.png" alt=""></a>
                    <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                      <?php if($_SESSION['lvl'] == true) : ?>
                        <a class="dropdown-item" href="#"><i data-feather="user"></i>Admin</a>
                      <?php else:  ?>
                        <a class="dropdown-item" href="#"><i data-feather="user"></i>Ketua</a>
                      <?php endif;  ?>
                        <div class="dropdown-divider"></div>
                      <!-- <a class="dropdown-item" href="Settings.html"><i data-feather="settings"></i>Settings</a> -->
                      <a class="dropdown-item" href="logout.php"><i data-feather="log-out"></i>Logout</a>
                    </div>
                  </li>
                  <!-- Akhir Profil -->
                </ul>
              </div>
              <!-- Akhir Nav kanan -->
          </nav>
        </div>
        <!-- Akhir Header -->