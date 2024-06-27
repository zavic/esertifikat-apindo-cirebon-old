            <!-- Isi Beranda -->
            <div class="page-content">
                <div class="main-wrapper">

                    <div class="row">
                        <div class="col">
                            <div class="card ">
                                <div class="card-body">
                                    <?php if($_SESSION['lvl'] == 1) : ?>
                                        <h1>Selamat datang, Admin</h1>
                                        <br>
                                        <h5>Silahkan pilih menu di sebelah kiri</h5>
                                        <h5>Anda dapat menambah, mengedit, dan menghapus data</h5>
                                        <br>
                                    <?php elseif($_SESSION['lvl'] == 0):  ?>
                                        <h1>Selamat datang, Ketua</h1>
                                        <br>
                                        <h5>Silahkan pilih menu di sebelah kiri</h5>
                                        <br>
                                    <?php else:  ?>
                                        <h1>Selamat datang, anggota</h1>
                                        <br>
                                        <h5>Silahkan pilih menu di sebelah kiri</h5>
                                        <br>
                                    <?php endif;  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-1 mb-1 text-muted text-center">&copy; <?=date('Y')?> DPK APINDO Kota Cirebon</p>

                </div>
            </div>
            <!-- Akhir Beranda -->