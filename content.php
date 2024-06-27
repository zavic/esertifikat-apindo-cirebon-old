<?php

    @$halaman = $_GET["halaman"];

    if($halaman == "list-data")
    {
        if(@$_GET['hal'] == "hapusdata"){
			include "halaman/hapus-data.php";
        } elseif(@$_GET['hal'] == "editdata"){
            include "halaman/edit-data.php";
        } 
        else {
            include "halaman/list-data.php";
        }
    }
    elseif($halaman == "tambah-data")
    {
        include "halaman/tambah-data.php";
    }
    elseif($halaman == "hapus-data")
    {
        include "halaman/hapus-data.php";
    }
    elseif($halaman == "cetak-sertifikat")
    {
        include "halaman/cetak-sertifikat.php";
    }
    elseif($halaman == "verifikasi-sertifikat")
    {
        include "halaman/verifikasi-sertifikat.php";
    }
    else
    {
        include "halaman/beranda.php";
    }

?>