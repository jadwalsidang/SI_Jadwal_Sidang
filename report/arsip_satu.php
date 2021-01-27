<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM jadwal WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Arsip Jadwal Sidang Kantor DPRD Kab.Asahan </h2>
                        <h4>Kisaran Naga, Kec.Kisaran Tim., Kabupaten Asahan Sumatera Utara 21216 </h4>
                        <hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nomor  Jadwal</td> <td><?= $data['no_jadwal'] ?></td>
                                </tr>

								<tr>
                                    <td>Hari</td> <td><?= $data['hari'] ?></td>
                                </tr>
								<tr>
                                    <td>Ruangan Sidang</td> <td><?= $data['ruangan'] ?></td>

                                </tr>
                                 <tr>
                               
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>
                                <tr>
                                    <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>