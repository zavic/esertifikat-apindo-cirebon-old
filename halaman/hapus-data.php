<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-body">
                        <br>
                        <?php
                        // include "config/koneksi.php";
                        // include "config/functions.php";

                        $id = $_GET["id_perusahaan"];

                        if(hapus($id) > 0) {
                            echo "Data Berhasil dihapus";
                        } else {
                            echo "Data Gagal dihapus"; 
                            }

                        ?>
                        <br>
                        <br>
                        <a href="?halaman=list-data"><button type="button" class="btn btn-outline-primary m-b-xs">Kembali ke list data</button></a>

                    </div>
                   
                </div>
            </div> 
        </div>
        <p class="mt-1 mb-1 text-muted text-center">&copy; <?=date('Y')?> DPK APINDO Kota Cirebon</p>
    </div>
</div>