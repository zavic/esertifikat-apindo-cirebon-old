<?php
function tambah($data) {
    global $koneksi;
    
    $nama_perusahaan = htmlspecialchars($data["nama_perusahaan"]);
    $jenis_anggota = htmlspecialchars($data["jenis_anggota"]);
    $no_sertifikat = htmlspecialchars($data["no_sertifikat"]);
    $email = htmlspecialchars($data["email"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
    $jenis_usaha = htmlspecialchars($data["jenis_usaha"]);
    $no_kbli = htmlspecialchars($data["no_kbli"]);
    $tgl_masuk = htmlspecialchars($data["tgl_masuk"]);
    $tgl_berakhir = htmlspecialchars($data["tgl_berakhir"]);
    

    $query = "INSERT INTO tbl_perusahaan VALUES
              ('',
              '$nama_perusahaan',
              '$jenis_anggota',
              '$no_sertifikat',
              '$email',
              '$no_telp',
              '$alamat',
              '$kota',
              '$jenis_usaha',
              '$no_kbli',
              '$tgl_masuk',
              '$tgl_berakhir')";
              
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
    
function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tbl_perusahaan WHERE id_perusahaan = $id");
    return mysqli_affected_rows($koneksi);
}


function edit($data_prs) {
    global $koneksi;

    $id = $data_prs["id_perusahaan"];
    $nama_perusahaan = htmlspecialchars($data_prs["nama_perusahaan"]);
    $jenis_anggota = htmlspecialchars($data_prs["jenis_anggota"]);
    $no_sertifikat = htmlspecialchars($data_prs["no_sertifikat"]);
    $email = htmlspecialchars($data_prs["email"]);
    $no_telp = htmlspecialchars($data_prs["no_telp"]);
    $alamat = htmlspecialchars($data_prs["alamat"]);
    $kota = htmlspecialchars($data_prs["kota"]);
    $jenis_usaha = htmlspecialchars($data_prs["jenis_usaha"]);
    $no_kbli = htmlspecialchars($data_prs["no_kbli"]);
    $tgl_masuk = htmlspecialchars($data_prs["tgl_masuk"]);
    $tgl_berakhir = htmlspecialchars($data_prs["tgl_berakhir"]);


    $query = "UPDATE tbl_perusahaan SET
                nama_perusahaan = '$nama_perusahaan',
                jenis_anggota = '$jenis_anggota',
                no_sertifikat = '$no_sertifikat',
                email = '$email',
                no_telp = '$no_telp',
                alamat = '$alamat',
                kota = '$kota',
                jenis_usaha = '$jenis_usaha',
                no_kbli = '$no_kbli',
                tgl_masuk = '$tgl_masuk',
                tgl_berakhir = '$tgl_berakhir'
            WHERE id_perusahaan = '$id'
            ";
    // echo $query;
    // exit;
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

?>