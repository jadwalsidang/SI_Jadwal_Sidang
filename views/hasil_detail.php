<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Peminjaman Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM hasil WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Perkara</td> <td><?= $data['no_hasil'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Peminjam</td> <td><?= $data['hasil_sidang'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td> <td><?= $data['hari'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Kembali</td> <td><?= $data['tgl_sidang'] ?></td>
                        </tr>
                        <tr>
                            <td>Lama Pinjam</td> <td><?= $data['ruang-sidang'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=hasil&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Hasil </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

