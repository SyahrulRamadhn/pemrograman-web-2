<?php
    include "koneksi.php";
    if( isset($_GET['id']) ){
       
    
    $id = isset($_GET["id"]) ? $_GET["id"] : "";
    $nama_file = isset($_GET["file"]) ? $_GET["file"] : "";

    $sql = "DELETE FROM data WHERE id_data='$id'";//scrip hapus file di database

    $sql2 ="SELECT * FROM data where id_data='$id'";//scrip menampilkan data dari database
    $kueri2 = $koneksi->query($sql2);
    $run = $kueri2->fetch_array();//memecah data
    unlink("gambar/$run[gambar]");//menghapus data dari folder komputer
    $kueri = $koneksi->query($sql);// menghapus data dari database
            if( $kueri )
            {              
                header('Location: dashboard.php');
            } else {
                echo"Gagal Menghapus Data".$koneksi->error;
            }
        } else {
        echo "akses dilarang...";
        }
?>
 
        