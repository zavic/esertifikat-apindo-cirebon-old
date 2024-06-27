
<!-- isi Edit Data -->
<div class="page-content">
  <div class="main-wrapper">
    <!-- Tabel Seluruh Anggota  -->
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <!-- Judul Tabel -->
              <h5 class="card-title">Data Seluruh Anggota</h5>
              <p>Semua data perusahaan yang terdaftar menjadi anggota di DPK APINDO Kota Cirebon</p>
                
                <!-- Awal Tabel -->  
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Usaha</th>
                      <th>No. KBLI</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>No. Telp</th>
                      <th>Masuk</th>
                      <th>Berakhir</th>
                      <th>Status</th>
                    </tr>
                    </thead>


                    <tbody>
                    <?php
                      $data_perusahaan = query("SELECT * FROM tbl_perusahaan");
                      $no = 1 ;
                      foreach($data_perusahaan as $row) :
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$row['nama_perusahaan']?></td>
                      <td><?=$row['jenis_usaha']?></td>
                      <td><?=$row['no_kbli']?></td>
                      <td><?=$row['alamat']?></td>
                      <td><?=$row['email']?></td>
                      <td><?=$row['no_telp']?></td>
                      <td><?=$row['tgl_masuk']?></td>
                      <td><?=$row['tgl_berakhir']?></td>
                      <td></td>                     
                    </tr>
                    <?php endforeach; ?>
                    </tbody>

                </table>
              </div>
              <!-- Akhir Tabel -->  
                        
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Tabel Seluruh Anggota  -->
  </div>
</div>
<!-- Akhir isi Edit Data -->