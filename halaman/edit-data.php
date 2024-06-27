<div class="page-content">
  <div class="main-wrapper">
    <div class="row">
      <div class="col">
        <div class="card ">
          <div class="card-body">

            <?php
              // Ambil data dari url
              $id = $_GET['id_perusahaan'];

              // query data perusahaan berdasarkan id
              $data_prs = query("SELECT * FROM tbl_perusahaan WHERE id_perusahaan = $id")[0];

                if(isset($_POST["submit"])) {

                  //cek data berhasil ditambah atau tidak
                  if(edit($_POST) > 0) {
                    echo "
                      <script>
                        alert('Data berhasil diperbaharui.')
                        document.location.href = '?halaman=list-data';
                      </script>
                    ";
                  } else {
                    echo "
                      <script>
                        alert('Data gagal diperbaharui.')
                        document.location.href = '?halaman=list-data';
                      </script>
                    ";
                  }
                }                          
            ?>

            <h5 class="card-title">Edit Data Anggota</h5>
            <form action="" method="post">
                <br>
                
                  <input type="hidden" class="form-control" id="id" name="id_perusahaan" value="<?=$data_prs['id_perusahaan']?>">

                <div class="row mb-3">
                  <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?=$data_prs['nama_perusahaan']?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="jenis_anggota" class="col-sm-2 col-form-label">Jenis anggota</label>
                  <div class="col-sm-10">
                    
                    <input type="text" class="form-control" id="jenis_anggota" name="jenis_anggota" value="<?=$data_prs['jenis_anggota']?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="no_sertifikat" class="col-sm-2 col-form-label">Nomor Sertifikat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_sertifikat" name="no_sertifikat" value="<?=$data_prs['no_sertifikat']?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="jenis_usaha" class="col-sm-2 col-form-label">Jenis Usaha</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" value="<?=$data_prs['jenis_usaha']?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="no_kbli" class="col-sm-2 col-form-label">Nomor KBLI</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_kbli" name="no_kbli" value="<?=$data_prs['no_kbli']?>" required>
                  </div>
                </div>
                <br>
                <br>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?=$data_prs['email']?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?=$data_prs['no_telp']?>">
                  </div>
                </div>
                <br>
                <br>
                <div class="row mb-3">
                  <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data_prs['alamat']?>" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="kota" class="col-sm-2 col-form-label">kota</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kota" name="kota" value="<?=$data_prs['kota']?>" required>
                  </div>
                </div>
                <br>
                <br>
                <div class="row mb-3">
                  <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Daftar</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?=$data_prs['tgl_masuk']?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="tgl_berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_berakhir" name="tgl_berakhir" value="<?=$data_prs['tgl_berakhir']?>" required>
                  </div>
                </div>
                
                
                <br>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Edit Data</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <p class="mt-1 mb-1 text-muted text-center">&copy; <?=date('Y')?> DPK APINDO Kota Cirebon</p>
  </div>
</div>