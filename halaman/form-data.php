<?php

	//Uji Jika klik tombol edit / hapus

	if(isset($_GET['hal']))
	{
		if($_GET['hal'] == "edit")
		{
			//tampilkan data yang akan diedit
      $tampil = mysqli_query($koneksi, "SELECT * from tbl_perusahaan order by id_perusahaan='$_GET[id]'");

			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//jika data ditemukan, maka data ditampung ke dalam variabel
				$vnama_perusahaan = $data['nama_perusahaan'];
				$vjenis_anggota = $data['jenis_anggota'];
				$vno_sertifikat = $data['no_sertifikat'];
				$vemail = $data['email'];
				$vno_telp = $data['no_telp'];
				$valamat = $data['alamat'];
				$vkota = $data['kota'];
				$vkode_pos = $data['kode_pos'];
				$vjenis_usaha = $data['jenis_usaha'];
        $vno_kbli = $data['no_kbli'];
        $vtgl_masuk = $data['tgl_masuk'];
        $vtgl_berakhir = $data['tgl_berakhir'];
			}

		}
		elseif($_GET['hal'] == 'hapus')
		{
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_perusahaan WHERE id_perusahaan='$_GET[id]'");
			if($hapus){
				echo "<script>
						alert('Hapus Data Sukses');
						document.location='?halaman=edit-data';
					  </script>";
			}
		}
	}

  //uji jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		
		//pengujian apakah data akan diedit / simpan baru
		if(@$_GET['hal'] == "edit"){
			//perintah edit data
			//ubah data

			$ubah = mysqli_query($koneksi, "UPDATE tbl_perusahaan SET 
                        nama_perusahaan = $_POST['nama_perusahaan'],
                        jenis_anggota = $_POST['jenis_anggota'],
                        no_sertifikat = $_POST['no_sertifikat'],
                        email = $_POST['email'],
                        no_telp = $_POST['no_telp'],
                        alamat = $_POST['alamat'],
                        kota = $_POST['kota'],
                        kode_pos = $_POST['kode_pos'],
                        jenis_usaha = $_POST['jenis_usaha'],
                        no_kbli = $_POST['no_kbli'],
                        tgl_masuk = $_POST['tgl_masuk'],
                        tgl_berakhir = $_POST['tgl_berakhir']
											where id_perusahaan = '$_GET[id]' ");
			
			if($ubah)
			{
				echo "<script>
						alert('Ubah Data Sukses');
						document.location='?halaman=edit-data';
					  </script>";
			}
			else
			{
				echo "<script>
						alert('Ubah Data GAGAL!!');
						document.location='?halaman=edit-data';
					  </script>";
			}
		}
		else
		{
			//perintah simpan data baru
			//simpan data
			$simpan = mysqli_query($koneksi, "INSERT INTO tbl_perusahaan 
											  VALUES (	'', 
											  		  	'$_POST[nama_perusahaan]',
                                '$_POST[jenis_anggota]',
                                '$_POST[no_sertifikat]',
                                '$_POST[email]',
                                '$_POST[no_telp]',
                                '$_POST[alamat]',
                                '$_POST[kota]',
                                '$_POST[kode_pos]',
                                '$_POST[jenis_usaha]',
                                '$_POST[no_kbli]',
                                '$_POST[tgl_masuk]',
                                '$_POST[tgl_berakhir]'
											  		    ) ");

			if($simpan)
			{
				echo "<script>
						alert('Simpan Data Sukses');
						document.location='?halaman=edit-data';
					  </script>";
			}else
			{
				echo "<script>
						alert('Simpan Data GAGAL!!');
						document.location='?halaman=edit-data';
					  </script>";
			}

		}


		
	}


	

?>


            <div class="page-content">
              <div class="main-wrapper">


                  <div class="row">
                    <div class="col">
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="card-title">Formulir Data Anggota</h5>
                                <form>
                                    <br>
                                    <div class="row mb-3">
                                      <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?=@$vnama_perusahaan?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="jenis_anggota" class="col-sm-2 col-form-label">Jenis anggota</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_anggota" name="jenis_anggota" value="<?=@$vjenis_anggota?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="no_sertifikat" class="col-sm-2 col-form-label">Nomor Sertifikat</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_sertifikat" name="no_sertifikat" value="<?=@$vno_sertifikat?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                                      <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" value="<?=@$vemail?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?=@$vno_telp?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?=@$valamat?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="kota" class="col-sm-2 col-form-label">kota</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kota" name="kota" value="<?=@$vkota?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="<?=@$vkode_pos?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="jenis_usaha" class="col-sm-2 col-form-label">Jenis Usaha</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" value="<?=@$vjenis_usaha?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="no_kbli" class="col-sm-2 col-form-label">Nomor KBLI</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="no_kbli" name="no_kbli" value="<?=@$vno_kbli?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Daftar</label>
                                      <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="<?=@$vtgl_masuk?>">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="tgl_berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                                      <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tgl_berakhir" name="tgl_berakhir" value="<?=@$vtgl_berakhir?>">
                                      </div>
                                    </div>
                                    
                                    
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan Data</button>
                                    <button type="reset" class="btn btn-danger" name="bbatal">Batal</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                  </div>
                   
