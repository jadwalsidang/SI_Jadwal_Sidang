<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Jadwal Sidang Kantor DPRD Kab.Asahan </h2>
                        <h4>Kisaran Naga, Kec.Kisaran Tim., Kabupaten Asahan Sumatera Utara 21216 </h4>
                        <hr>
                        <h3>DATA  ARSIP SELURUH JADWAL SIDANG</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
							<tr>
                                <th>No.</th>
                                <th width="17%">No Jadwal</th>
                                <th>Hari</th>
                                <th width="14%">Ruangan Sidang</th>
                                <th width="10%">Tanggal Masuk</th>
                                <th>Perihal</th>
                               
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM jadwal";
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
                                    <td><?= $data['no_jadwal'] ?></td>
                                    <td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['hari'] ?></td>
                                    <td><?= $data['ruangan'] ?></td>
                                    <td><?= $data['perihal'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                               
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>