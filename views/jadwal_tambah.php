<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading" style="background: #00d9ff;">
                    <h3 class="panel-title">Form Tambah Jadwal Sidang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="no_jadwal" class="col-sm-3 control-label">No. Jadwal</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_jadwal" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Jadwal Sidang" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="hari" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="text" name="hari" class="form-control" id="inputEmail3" placeholder="Inputkan Hari" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="ruangan" class="col-sm-3 control-label">Ruangan Sidang
                            </label>
                            <div class="col-sm-9">
                                <input type="text" name="ruangan" class="form-control" id="inputEmail3" placeholder="Inputkan Ruangan Sidang" required>
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label for="perihal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal"class="form-control" id="inputEmail3" placeholder="Inputkan Perihal Sidang" required>
                            </div>
                        </div>

                        

                        <div class="form-group" ">
                            <div class="col-sm-offset-3 col-sm-2">
                                <button type="submit" class="btn btn-success" style="background: #008000; >
                                    <span class="fa fa-save"></span> Simpan jadwal</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jadwal
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
 
	$no_jadwal=$_POST['no_jadwal'];
  $hari=$_POST['hari'];
  $ruangan=$_POST['ruangan'];
  $tgl_masuk=$_POST['tgl_masuk'];
  $perihal=$_POST['perihal'];
	
    //buat sql
    $sql="INSERT INTO jadwal VALUES ('','$no_jadwal','$hari','$ruangan','$tgl_masuk','$perihal')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Jadwal Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
