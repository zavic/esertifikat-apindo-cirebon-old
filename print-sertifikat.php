
<?php
    include "config/koneksi.php";
    include "config/functions.php";

    require_once __DIR__ . '/vendor/autoload.php';
    
    // $mpdf = new \Mpdf\Mpdf();
    $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [620, 450]]);
    $id = $_GET['id_perusahaan'];
    $data = query("SELECT * FROM tbl_perusahaan WHERE id_perusahaan = $id")[0];
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
     
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
        
            .p1 {
            font-family: Montserrat, Helvetica, sans-serif;
            }
            
            .container{
                width:100%;
                height:100%;
                background-image: url("./assets/images/template-sertifikat.png");
                background-repeat: no-repeat;
                background-size:cover;
                font-family: Montserrat, Helvetica, sans-serif;
                
            }


           .no {
            padding-top: 480px;
            text-align:center;
            
           }
           .no p{
            font-size:35px;
           }
           
           .noo p{
            text-align:center;
            font-size:35
           }
           .nooo p{
            padding-top: 240px;
            padding-left: 300px;
            font-size:35px;
           }


           table{
               padding-left:300px;
               font-size:35px;
           }
           #space{
               margin-left:2rem;
           }


                  
        </style>
        <title>Print sertifikat</title>
        
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
    </head>
    <body>
    <div></div>
     <div class="container">
      <div class="no">
      <p >NO '.' '.':'.' '. $data["no_sertifikat"] .'</p>
      </div>
      <div class="table">
      <table cellpadding="10">
        <tr>
            <td>Nama Perusahaan</td>
            <td id="space" >  :  </td>
            <td>'. $data["nama_perusahaan"] .'</td>
        </tr>
        <tr>
            <td>Alamat Domisili Perusahaan</td>
            <td id="space" >:</td>
            <td>'. $data["alamat"] .'</td>
        </tr>
        <tr>
            <td>Kabupaten/Kota</td>
            <td id="space" >:</td>
            <td>'. $data["kota"] .'</td>
        </tr>
        <tr>
            <td>Jenis Usaha</td>
            <td id="space" >:</td>
            <td>'. $data["jenis_usaha"] .'</td>
        </tr>
        <tr>
            <td>No. (KBLI)</td>
            <td id="space" >:</td>
            <td>'. $data["no_kbli"] .'</td>
        </tr>
       </table>
      </div>
      <div class="noo">
      <p >Cirebon,  '. tgl_indo($data["tgl_masuk"]) .'</p>
      </div>
      <div class="nooo">
      <p >Berlaku  '. $data["tgl_masuk"] .' s/d '. $data['tgl_berakhir'] .'</p>
      </div>
     </div>
    </body>
    </html>
    ';

    $mpdf->WriteHTML($html);
    $mpdf->Output();