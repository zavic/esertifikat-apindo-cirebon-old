<?php
session_start();
if(!isset($_SESSION['login'])){
     header('location:index.php');
 }
  // session_start();
  // echo "<pre>";
  // echo var_dump($_SESSION);
  // echo "</pre>";
  // // session_destroy();exit();
  // if(!isset($_SESSION['username'])) {
  //   include 'login.php';
  //   exit();
    
  // }
  // else {
  //   echo 'debug';
  // }
  // echo '<hr> <h1>debug</h1>';
  
  include "config/koneksi.php";
  include "config/functions.php";
  include "template/header.php";
  include "template/sidebar.php";
  include "content.php";
  include "template/footer.php";
?>