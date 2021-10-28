<?php
/**
* Inisialisasi variabel
*/
$nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$prodi = isset($_POST["prodi"]) ? $_POST["prodi"] : "";
$simpan = isset($_POST["simpan"]) ? $_POST["simpan"] : "";
/**
* Menangkap variabel dan data serta menampilkan ke layar
*/
if ($simpan) 
{
echo "Hai, perkenalkan nama saya : " .$nama.
" dengan NIM " .$nim. " Saya adalah seorang
mahasiswa dari program studi " . $prodi;
}
?>