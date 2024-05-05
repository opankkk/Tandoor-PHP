<?php include("inc_header2.php")?>
    <?php
    $nama_produk    ="";
    $harga          ="";
    $deskripsi      ="";
    $error          ="";
    $sukses         ="";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = "";
    }


    if($id != ""){
        $sql1       = "select * from produk where id = '$id'";
        $q1         = mysqli_query($koneksi,$sql1);
        $r1         = mysqli_fetch_array($q1);
        $nama_produk      = $r1['nama_produk'];
        $harga            = $r1['harga'];
        $deskripsi        = $r1['deskripsi'];

        if(empty($r1)){
            $error  = "Data tidak ditemukan";   
        }
    }



    if(isset($_POST['simpan'])){
        $nama_produk    =$_POST['nama_produk'];
        $harga          =$_POST['harga'];
        $deskripsi      =$_POST['deskripsi'];

        if($nama_produk == '' or $harga == ''){
            $error  ="Silahkan masukkan semua data yakni adalah nama produk dan harga";
        }
        if(empty($error)){
            if($id != ""){
                $sql1   = "update produk set nama_produk = '$nama_produk',harga='$harga',deskripsi='$deskripsi',tgl_isi=now() where id = '$id'";
            }else{
                $sql1       =   "insert into produk(nama_produk,harga,deskripsi) values ('$nama_produk', '$harga', '$deskripsi')";
            }

            $q1         =   mysqli_query($koneksi,$sql1);
            if($q1){
                $sukses     ="Sukses memasukkan data";
            }else{
                $error      ="Gagal memasukkan data";
            }
        }
    }   
    ?>
    <h1>Halaman Admin Input Data</h1>
    <div class="mb-3 row">
        <a href="hal_produk.php"><< Kembali ke Halaman Admin</a>
    </div>
    <?php
    if($error){
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error ?>
            </div>
        <?php
    }
    ?>
    <?php
    if($sukses){
        ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $sukses ?>
            </div>
        <?php
    }
    ?>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="nama_produk" class="col-sm-2 col-form-label"><b>Nama Produk</b></label>
            <div class="col-sm-10">
                <input type="text"  class="form-control border border-5" id="nama_produk" value="<?php echo $nama_produk?>" name="nama_produk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="harga" class="col-sm-2 col-form-label"><b>Harga</b></label>
            <div class="col-sm-10">
                <input type="text"  class="form-control border border-5" id="harga" value="<?php echo $harga?>" name="harga">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label"><b>Deskripsi</b></label>
            <div class="col-sm-10">
                <textarea name="deskripsi" class="form-control border border-5" id="summernote"><?php echo $deskripsi ?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"/> 
            </div>
        </div>

    
    </div>
    </form>
    <?php include("footer.php")?>