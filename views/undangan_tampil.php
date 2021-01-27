<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #008000;>
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Undangan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Udangan</th>
                                <th>Tamu Undangan</th>
                                <th>Tanggal Undangan</th>
                                <th>Perihal Undangan</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM undangan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_undangan'] ?></td>
									<td><?= $data['tamu_undangan'] ?></td>
									<td><?= $data['tgl_undangan'] ?></td>
                                    <td><?= $data['perihal_undangan'] ?></td> 

                                    <a href="?page=undangan&actions=tambah&nope=<?= $data['id'] ?>" class="btn btn-info btn-xs">
											<span class="fa fa-forward"></span></a>
                                    <td>
                                        <a href="?page=undangan&actions=detail&id=<?= $data['id'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"c></span>
                                        </a>
                                        <a href="?page=undangan&actions=edit&id=<?= $data['id'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=undangan&actions=delete&id=<?= $data['id'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>

                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                          <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=undangan&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Undangan

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
