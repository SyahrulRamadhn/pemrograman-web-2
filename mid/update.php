<?php 
        //include file koneksi
		include "koneksi.php";

        if( isset($_POST['update']) )
        {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kategori = $_POST['kategori'];
            $penerbit = $_POST['penerbit'];
            $tahun = $_POST['tahun_rilis'];
            $direktori = 'gambar/'; //Folder penyimpanan file
            $max_size  = 1000000*10; //Ukuran file maximal 10mb
            $nama_file = $_FILES['file']['name']; //Nama file yang akan di Upload
            $file_size = $_FILES['file']['size']; //Ukuran file yang akan di Upload
            $nama_tmp  = $_FILES['file']['tmp_name']; //Nama file sementara
            $tipe_file = $_FILES['file']['type'];
            $upload = $direktori . $nama_file; //Memposisikan direktori penyimpanan dan file
            //Proses akan dimulai apabila File telah dipilih sebelumnya
                if($nama_file == "")//jika tidak memilih gambar tetap update, dengan catatan field gambar dihilangkan dari query update
                {
                    if($file_size <= $max_size)
                    {
                        move_uploaded_file($nama_tmp, $upload);
                        
                            $sql ="UPDATE data SET nama_game='$nama', kategori='$kategori', penerbit='$penerbit', tahun_rilis='$tahun' WHERE id_data='$id'";
                            $kueri=$koneksi->query($sql);
                            if($kueri)
                            {
                                header("location: dashboard.php");
                            }
                            else
                            {
                                echo "
                                     <tr>
                                         <td>Terjadi Kesahalan dalam mengupload file</td> 
                                     </tr>";
                            }                        
                    }
                }
                else //jika memasukkan gambar, maka hapus gambar lama dan timpa denga  gambar baru.
                {
                    $sql2 ="SELECT * FROM data where id_data='$id'";//scrip menampilkan data dari database
                    $kueri2 = $koneksi->query($sql2);
                    $run = $kueri2->fetch_array();//memecah data
                    $del= unlink("gambar/$run[gambar]");//menghapus data dari folder komputer
                if(file_exists($nama_file))//cek gambar lama
                    {
                        if($del)//hapus jika terdapat file gambar
                        {
                            echo"Gambar Terhapus";
                        }
                    }
                    else
                    {
                        move_uploaded_file($nama_tmp, $upload);//upload atau timpa dengan gambar baru
                        
                            $sql ="UPDATE data SET nama_game='$nama', kategori='$kategori', penerbit='$penerbit', tahun_rilis='$tahun', gambar='$nama_file' WHERE id_data='$id'";
                            $kueri=$koneksi->query($sql);
                            if($kueri)
                            {
                                header("location: dashboard.php");
                            }
                            else
                            {
                                echo "
                                     <tr>
                                         <td>Terjadi Kesahalan dalam mengupload file</td> 
                                     </tr>";
                            }                     
                    }
                }
        }
        else
        {
            echo "Gagal Mengupdate Data : ".$koneksi->error;
        }

            ?>
