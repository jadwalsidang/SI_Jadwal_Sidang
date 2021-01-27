<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Jadwal</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM undangan WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        
                            
                        
						<tr>
                            <td>No. Undangan</td> <td><?= $data['no_undangan'] ?></td>
                        </tr>
						<tr>
                            <td>Tamu Undangan</td> <td><?= $data['tamu_undangan'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Undangan</td> <td><?= $data['tgl_undangan'] ?></td>
                        </tr>
                        <tr>
                            <td>Perihal Undangan</td> <td><?= $data['perihal_undangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=undangan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data  </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

