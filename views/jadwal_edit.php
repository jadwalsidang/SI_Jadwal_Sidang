<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Jadwal</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="no_jadwal" class="col-sm-3 control-label">No Jadwal</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_jadwal" value="<?=$data['no_jadwal']?>"class="form-control" id="inputEmail3" placeholder="Nomor Rak/Lemari">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="hari" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="text" name="hari" value="<?=$data['hari']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="ruangan" class="col-sm-3 control-label">Ruang Sidang</label>
                            <div class="col-sm-9">
                                <input type="text" name="ruangan" value="<?=$data['ruangan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
						
							
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                         <div class="form-group">

                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <!--end tanggal lahir-->           

                        
                        <div class="form-group">
                            <label for="perihal" class="col-sm-3 control-label">Perihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal" value="<?=$data['perihal']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
                            </div>
                        </div>
                        <!--Status-->
                        
                      
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jadwal</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data jadwal
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
    $sql="UPDATE jadwal SET no_jadwal='$no_jadwal',hari='$hari',ruangan='$ruangan',
	tgl_masuk='$tgl_masuk',perihal='$perihal' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



