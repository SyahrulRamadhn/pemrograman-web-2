<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
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
        <?php 
        //include file koneksi
		include "koneksi.php";
        $id = isset($_GET["id"]) ? $_GET["id"] : "";
        //sql select
            $sql ="SELECT id_data,nama_game,kategori,penerbit, tahun_rilis, gambar FROM data WHERE id_data='$id'";        
            $kueri = $koneksi->query($sql);
            if($kueri){
                while($info = $kueri->fetch_array()){
	        ?>
                <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="row gy-3 p-5">
                <div class="col-md-3 "></div>
                <div class="col-md-6 p-5 border">
                    <div class="col-md-12 text-center text-white">
                        <h2>Edit Data</h2>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-12 col-md-12 d-grip gap-2 mx-auto">
                            <div class="row gy-3 p-3 "> 
                                    <div class="col-md-12"><input type="hidden" name="id" value="<?php echo $info['id_data']; ?>"></div>
                                    <div class="col-md-3 "><label for="nama">Nama Game</label></div>
                                    <div class="col-md-9 "><input type="text" id="nama" class="form-control" name="nama" value="<?php echo $info['nama_game']; ?>"></div>
                                    <div class="col-md-3 "><label for="kategori">Kategori Game</label></div>
                                    <div class="col-md-9 "><input type="text" id="kategori" class="form-control" name="kategori" value="<?php echo $info['kategori']; ?>"></div>
                                    <div class="col-md-3 "><label for="penerbit">Penerbit</label></div>
                                    <div class="col-md-9 "><input type="text" id="penerbit" class="form-control" name="penerbit" value="<?php echo $info['penerbit']; ?>"></div>
                                    <div class="col-md-3 "><label for="tahun_rilis">Tahun Rilis</label></div>
                                    <div class="col-md-9 "><input type="text" id="tahun_rilis" class="form-control" name="tahun_rilis" value="<?php echo $info['tahun_rilis']; ?>"></div>
                                    <div class="col-md-3 "><label for="file">Tambah File</label></div>
                                    <div class="col-md-9 "><input type="file" name="file" class="form-control" id="file" value="<?php echo $info['gambar'];?>"></div>
                                    <div class="col-md-6"><input type="submit" class="btn btn-primary" name="update" value="Simpan Perubahan"></div>
                                    <div class="col-md-6"><a href="dashboard.php" name="batal" class="btn btn-primary" role="button" data-bs-toggle="button">Batal</a></div>
                                        <?php
                                        $batal = isset($_POST["batal"]) ? $_POST["batal"] : "";
                                            if($batal)
                                            {
                                                header("location: dashboard.php");
                                            }
                                        ?> 
                                    <table class="table table-striped table-danger text-center">
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
                }
            }
            else {
                echo "GAGAL MENAMPILKAN DATA";
            }
            ?>
</body>
</html>
