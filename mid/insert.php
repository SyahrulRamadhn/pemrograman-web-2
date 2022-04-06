<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        a
        {
            float:right;
        }
    </style>
</head>
<body>
    <div>
        <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="row gy-3 p-5">
                <div class="col-md-3 "></div>
                <div class="col-md-6 p-5 border">
                    <div class="col-md-12 text-center text-white">
                        <h2>Masukkan Data</h2>
                        <hr>
                    </div>
                   
                    <div class="col-md-12">
                        <div class="col-md-12 col-md-12 d-grip gap-2 mx-auto">
                            <div class="row gy-3 p-3 "> 
                                    <div class="col-md-3 "><label for="nama">Nama Game</label></div>
                                    <div class="col-md-9 "><input type="text" name="nama" class="form-control" id="nama"></div>
                                    <div class="col-md-3 "><label for="kategori">Kategori Game</label></div>
                                    <div class="col-md-9 "><input type="text" name="kategori" class="form-control" id="kategori"></div>
                                    <div class="col-md-3 "><label for="penerbit">Penerbit</label></div>
                                    <div class="col-md-9 "><input type="text" name="penerbit" class="form-control" id="penerbit"></div>
                                    <div class="col-md-3 "><label for="tahun_rilis">Tahun Rilis</label></div>
                                    <div class="col-md-9 "><input type="text" name="tahun_rilis" class="form-control" id="tahun_rilis" placeholder="YYYY-MM-DD"></div>
                                    <div class="col-md-3 "><label for="file">Tambah File</label></div>
                                    <div class="col-md-9 "><input type="file" name="file" class="form-control" id="file"></div>
                                    <div class="col-md-6"><input type="submit" class="btn btn-primary" name="insert" value="Tambahkan Data"/></div>
                                    <div class="col-md-6"><a href="dashboard.php" name="batal" class="btn btn-primary" role="button" data-bs-toggle="button">Batal</a></div>
                                        <?php
                                        $batal = isset($_POST["batal"]) ? $_POST["batal"] : "";
                                            if($batal)
                                            {
                                                header("location: dashboard.php");
                                            }
                                        ?> 
                                    <table class="table table-striped table-danger text-center">
                                    <?php 
                                            //include file koneksi
                                            include "koneksi.php";
                                            
                                            $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
                                            $kategori = isset($_POST["kategori"]) ? $_POST["kategori"] : "";
                                            $penerbit = isset($_POST["penerbit"]) ? $_POST["penerbit"] : "";
                                            $tahun = isset($_POST["tahun_rilis"]) ? $_POST["tahun_rilis"] : "";
                                            $insert = isset($_POST["insert"]) ? $_POST["insert"] : "";

                                            //sql select
                                            if($insert)
                                            {
                                            /*$sql ="INSERT INTO data(nama_game,kategori,penerbit,tahun_rilis) VALUES('$nama','$kategori','$penerbit','$tahun')";        
                                            $kueri = $koneksi->query($sql);*/
                                                if(!empty($nama))
                                                {
                                                    $direktori = 'gambar/'; //Folder penyimpanan file
                                                    $max_size  = 1000000*10; //Ukuran file maximal 10mb
                                                    $nama_file = $_FILES['file']['name']; //Nama file yang akan di Upload
                                                    $file_size = $_FILES['file']['size']; //Ukuran file yang akan di Upload
                                                    $nama_tmp  = $_FILES['file']['tmp_name']; //Nama file sementara
                                                    $tipe_file = $_FILES['file']['type'];
                                                    $upload = $direktori . $nama_file; //Memposisikan direktori penyimpanan dan file
                                                            //Proses akan dimulai apabila File telah dipilih sebelumnya
                                                            if($nama_file == "")
                                                            {
                                                                echo "
                                                                <tr>
                                                                    <td>Upload File Terlebih Dahulu!</td> 
                                                                </tr>";
                                                            }
                                                            else{
                                                                //Proses upload file jika ukuran lebih kecil dari yang di tentukan
                                                                if($file_size <= $max_size)
                                                                    {
                                                                    if(move_uploaded_file($nama_tmp, $upload))
                                                                        {
                                                                            $sql ="INSERT INTO data(nama_game,kategori,penerbit,tahun_rilis, gambar) VALUES('$nama','$kategori','$penerbit','$tahun','$nama_file')";
                                                                            $kueri=$koneksi->query($sql);
                                                                            if($kueri)
                                                                            {
                                                                            echo "File Berhasil diupload ke Direktori: ".$direktori.""."<br />";
                                                                            echo "Nama File : ".$nama_file.""."<br />";
                                                                            echo "Ukuran File : ".$file_size.""."<br />";
                                                                            echo "Tipe File : ".$tipe_file.""."<br />";
                                                                            header("location: dashboard.php");
                                                                            }
                                                                            else{
                                                                                echo "
                                                                                <tr>
                                                                                    <td>Terjadi Kesahalan dalam mengupload file</td> 
                                                                                </tr>";
                                                                            }
                                                                        }
                                                                    else{
                                                                        echo "
                                                                        <tr>
                                                                            <td>File ".$nama_file." Gagal diupload</td> 
                                                                        </tr>";
                                                                    }
                                                                    }
                                                                else
                                                                {
                                                                    //Jika ukuran file lebih besar dari yang ditentukan
                                                                    echo "
                                                                    <tr>
                                                                        <td>File ".$nama_file." Gagal di Upload, karena terlalu besar, batas yang ditentukan adalah : ".$max_size." bait.</td> 
                                                                    </tr>";
                                                                                }
                                                                            }
                                                                        }
                                                                    else
                                                                    {
                                                                        echo "
                                                                        <tr>
                                                                            <td>Nama Game Tidak Boleh Kosong</td> 
                                                                        </tr>";
                                                                    }
                                                                }
                                                         ?>
                                    </table>
                                </div>
                            </div>
                                                                
                    </div>
                </div>
                <div class="col-md-3"></div>
        </div>
    </form>
    </div>
    <?php 
        //include file koneksi
		include "koneksi.php";
         
        $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
        $kategori = isset($_POST["kategori"]) ? $_POST["kategori"] : "";
        $penerbit = isset($_POST["penerbit"]) ? $_POST["penerbit"] : "";
        $tahun = isset($_POST["tahun_rilis"]) ? $_POST["tahun_rilis"] : "";
        $insert = isset($_POST["insert"]) ? $_POST["insert"] : "";

        //sql select
         if($insert)
         {
       /*$sql ="INSERT INTO data(nama_game,kategori,penerbit,tahun_rilis) VALUES('$nama','$kategori','$penerbit','$tahun')";        
         $kueri = $koneksi->query($sql);*/
            if(!empty($nama))
            {
                $direktori = 'gambar/'; //Folder penyimpanan file
                $max_size  = 1000000*10; //Ukuran file maximal 10mb
                $nama_file = $_FILES['file']['name']; //Nama file yang akan di Upload
                $file_size = $_FILES['file']['size']; //Ukuran file yang akan di Upload
                $nama_tmp  = $_FILES['file']['tmp_name']; //Nama file sementara
                $tipe_file = $_FILES['file']['type'];
                $upload = $direktori . $nama_file; //Memposisikan direktori penyimpanan dan file
            //Proses akan dimulai apabila File telah dipilih sebelumnya
            if($nama_file == ""){echo "File Gagal di Upload karena anda tidak memilih file apapun!";}
            else{
                //Proses upload file jika ukuran lebih kecil dari yang di tentukan
                if($file_size <= $max_size)
                    {
                    if(move_uploaded_file($nama_tmp, $upload))
                        {
                            $sql ="INSERT INTO data(nama_game,kategori,penerbit,tahun_rilis, gambar) VALUES('$nama','$kategori','$penerbit','$tahun','$nama_file')";
                            $kueri=$koneksi->query($sql);
                            if($kueri)
                            {
                            echo "File Berhasil diupload ke Direktori: ".$direktori.""."<br />";
                            echo "Nama File : ".$nama_file.""."<br />";
                            echo "Ukuran File : ".$file_size.""."<br />";
                            echo "Tipe File : ".$tipe_file.""."<br />";
                            header("location: dashboard.php");
                            }
                            else{
                                echo "Terjadi Kesahalan dalam mengupload file";
                            }
                        }
                    else{echo "File ".$nama_file." Gagal diupload";}
                    }
                else
                {
                    //Jika ukuran file lebih besar dari yang ditentukan
                    echo "File ".$nama_file." Gagal di Upload, karena terlalu besar, batas yang ditentukan adalah : ".$max_size." bait.";
                }
            }
        }
    else
    {
        echo"Nama Game Tidak Boleh Kosong";
    }
}
            ?>
</body>
</html>