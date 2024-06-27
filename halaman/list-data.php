
<!-- isi List Data -->
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

              <?php if($_SESSION['lvl'] == 1) : ?>
                <p><i data-feather="edit"></i> = Edit Data</p>
                <p><i data-feather="delete"></i> = Hapus Data</p>
                <br>
                <div class="row">
                  <div class="col-sm-8">
                    <a href="?halaman=tambah-data"><button type="button" class="btn btn-outline-primary m-b-xs">Tambah Data</button></a>
                  </div>
                </div>
                <?php else:  ?>
                <br>                
              <?php endif;  ?> 

                <!-- Awal Tabel -->  
                <div class="table-responsive">
                  <table id="zero-conf" class="display" style="width:100%">
                    <thead>
                    <tr>
                      <?php if($_SESSION['lvl'] == 1) : ?>
                        <th></th>
                      <?php else:  ?>          
                      <?php endif;  ?> 
                      <th>No</th>
                      <th>Nama Perusahaan</th>
                      <th>Jenis Anggota</th>
                      <th>Jenis Usaha</th>
                      <th>No. KBLI</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>No. Telp</th>
                      <th>Masuk</th>
                      <th>Berakhir</th>
                    </tr>
                    </thead>


                    <tbody>
                      <?php
                        $data_perusahaan = query("SELECT * FROM tbl_perusahaan");
                        $no = 1 ;
                        foreach($data_perusahaan as $row) :
                      ?>
                    <tr>
                      <?php if($_SESSION['lvl'] == 1) : ?>
                        <td>
                        <a href="?halaman=list-data&hal=editdata&id_perusahaan=<?= $row['id_perusahaan']; ?>"><i data-feather="edit"></i></a>
                          <br>
                        <a href="?halaman=list-data&hal=hapusdata&id_perusahaan=<?= $row['id_perusahaan']; ?>"
                          onclick="return confirm('Apakah yakin ingin menghapus data ini?')"><i data-feather="delete" ></i></a>                    
                      </td>
                      <?php else:  ?>          
                      <?php endif;  ?> 
                      <td><?=$no++?></td>
                      <td><?=$row['nama_perusahaan'];?></td>
                      <td><?=$row['jenis_anggota'];?></td>
                      <td><?=$row['jenis_usaha'];?></td>
                      <td><?=$row['no_kbli'];?></td>
                      <td><?=$row['alamat'];?></td>
                      <td><?=$row['email'];?></td>
                      <td><?=$row['no_telp'];?></td>
                      <td><?=$row['tgl_masuk'];?></td>
                      <td><?=$row['tgl_berakhir'];?></td>
                    
                                         
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                <!-- </div> -->
                

              <!-- Akhir Tabel -->
              
                        
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Tabel Seluruh Anggota  -->
      <p class="mt-1 mb-1 text-muted text-center">&copy; <?=date('Y')?> DPK APINDO Kota Cirebon</p>
  </div>
</div>
<!-- Akhir isi Edit Data -->