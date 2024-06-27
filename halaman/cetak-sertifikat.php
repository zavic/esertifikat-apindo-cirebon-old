

      <!-- isi Edit Data -->
      <div class="page-content">
        <div class="main-wrapper">

          <!-- Tabel Seluruh Anggota  -->
          <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Cetak E-Sertifikat Keanggotaan</h5>
                  <p>Cetak atau download E-Sertifikat Keanggotaan DPK APINDO Kota Cirebon</p>

                  <br>

                  <div class="row">
                    <div class="col-sm-8">
                      <?php if($_SESSION['lvl'] == true) : ?>
                        <a href="?halaman=list-data"><button type="button" class="btn btn-primary m-b-xs">Edit Data</button></a>
                      <?php else:  ?>
                        
                      <?php endif;  ?> 
                    </div>
                  </div>

                  <!-- <table id="dtHorizontalExample" class="table table-striped table-hovered table-bordered table-sm" cellspacing="0" width="100%"> -->
                  <table id="zero-conf" class="display" style="width:100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>No. Sertifikat</th>
                        <th>Berakhir</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      // $tampil = mysqli_query($koneksi, "SELECT
                      //     tbl_perusahaan.*,
                      //     tbl_jenis_anggota.list_jenis_anggota,
                      //   FROM
                      //     tbl_perusahaan, tbl_jenis_anggota
                      //   WHERE
                      //     tbl_perusahaan.id_jenis_anggota = tbl_jenis_anggota.id_jenis_anggota
                      //   ");
                      $tampil = mysqli_query($koneksi, "SELECT * from tbl_perusahaan order by id_perusahaan desc");
                      $no = 1;
                      while($data = mysqli_fetch_array($tampil)) :
                    ?>
                      <tr>
                        <td><?=$no++?></td>
                        <td><?=$data['nama_perusahaan']?></td>
                        <td><?=$data['no_sertifikat']?></td>
                        <td><?=$data['tgl_berakhir']?></td>
                        

                        <td>
                          <a href="print-sertifikat.php?id_perusahaan=<?= $data['id_perusahaan'] ?>" target="blank" ><i data-feather="download"></i></a>                
                        </td>
                        
                      </tr>
                    <?php endwhile; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <p class="mt-1 mb-1 text-muted text-center">&copy; <?=date('Y')?> DPK APINDO Kota Cirebon</p>
      </div>