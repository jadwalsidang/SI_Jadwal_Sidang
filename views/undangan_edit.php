<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM undangan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data undangan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
                        <div class="form-group">
                            <label for="no_undangan" class="col-sm-3 control-label">No Undangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_undangan" value="<?=$data['no_undangan']?>"class="form-control" id="inputEmail3" placeholder="Nomor undangan">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tamu_undangan" class="col-sm-3 control-label">Tamu Undangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="tamu_undangan" value="<?=$data['tamu_undangan']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
						
						
							
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                         <div class="form-group">

                            <label for="tgl_undangan" class="col-sm-3 control-label">Tanggal Undangan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_undangan" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>
                        <!--end tanggal lahir-->           

                        
                        <div class="form-group">
                            <label for="perihal_undangan" class="col-sm-3 control-label">Perihal Undangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="perihal_undangan" value="<?=$data['perihal_undangan']?>" class="form-control" id="inputPassword3" placeholder="Penerima Berkas">
                            </div>
                        </div>
                        <!--Status-->
                        
                      
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data undangan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=undangan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data undangan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
   $no_undangan=$_POST['no_undangan'];
  $tamu_undangan=$_POST['tamu_undangan'];
  $tgl_undangan=$_POST['tgl_undangan'];
  $perihal_undangan=$_POST['perihal_undangan'];
    //buat sql
    $sql="UPDATE undangan SET no_undangan='$no_undangan',tamu_undangan='$tamu_undangan',tgl_undangan='$tgl_undangan',
	perihal_undangan='$perihal_undangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=undangan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



