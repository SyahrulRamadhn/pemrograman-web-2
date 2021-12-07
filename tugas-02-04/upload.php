<!DOCTYPE html>
<html>
    <head>
        <title>form Unggah</title>
    </head>
    <body>
    <form name="form" enctype="multipart/form-data" action="upload.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
Pilih File: <input name="file" type="file" style="cursor:pointer;" />
<input type="submit" name="submit" value="Upload" />
</form>
<br/>
    </body>
    <?php
        if(isset($_POST["submit"])){
            $direktori = 'images/'; //Folder penyimpanan file
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
                     echo "File Berhasil diupload ke Direktori: ".$direktori.""."<br />";
                     echo "Nama File : ".$nama_file.""."<br />";
                     echo "Ukuran File : ".$file_size.""."<br />";
                     echo "Tipe File : ".$tipe_file.""."<br />";
                }
             else{echo "File ".$nama_file." Gagal diupload";}
            }
           else
           {
            //Jika ukuran file lebih besar dari yang ditentukan
            echo "File ".$nama_file." Gagal di Upload, karena terlalu besar, batas yang ditentukan adalah : ".$max_size." bait.";
           }}}
           else
           {
            echo "Harus melalui Form Upload sebelum ke halaman ini!";
           }
           ?>  
           <?php
            $images = glob("images/$nama_file"); 
                for ($i=0; $i<count($images); $i++) 
                { 
            $single_image = $images[$i];
                ?>
                    <img src="<?php echo $single_image; ?>" width="260" height="260" />
                <?php
            }
            ?>
</html>

