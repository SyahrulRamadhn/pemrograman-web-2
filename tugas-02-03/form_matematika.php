<!DOCTYPE html>
    <head>
        <title>form_matematika.php</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>       
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-3"></div>
                <div class="col-sm-4 text-center">
                    <h2> Operator Aritmetika </h2>
                    <p>20192205140 - Syahrul Ramadhan </p>
                    <p>
                    <?php
                        $hari=date('l');
                        $bulan=date('m');
                        $tanggal=date('d');
                        $tahun=date('Y'); 

                        switch ($hari) 
                        {
                            case"Sunday":$hari="Minggu";break;
                            case"Monday":$hari="Senin";break;
                            case"Tuesday":$hari="Selasa";break;
                            case"Wednesday":$hari="Rabu";break;
                            case"Thursday":$hari="Kamis";break;
                            case"Friday":$hari="Jumat";break;
                            case"Saturday":$hari="Sabtu";break;
                        }

                        switch($bulan)
                        {
                            case"1":$bulan="Januari";break;
                            case"2":$bulan="Februari";break;
                            case"3":$bulan="Maret";break;
                            case"4":$bulan="April";break;
                            case"5":$bulan="Mei";break;
                            case"6":$bulan="Juni";break;
                            case"7":$bulan="Juli";break;
                            case"8":$bulan="Agustus";break;
                            case"9":$bulan="September";break;
                            case"10":$bulan="Oktober"; break;
                            case"11":$bulan="Nopember";break;
                            case"12":$bulan="Desember";break;
                            }
                        

                        echo "<br/>$hari, $tanggal-$bulan-$tahun ";echo date(" G:i:s");  
                        ?>
                    </p>
                </div>
                <div class="col-sm-5" ></div>
            </div>
            
            <form action="" method="post">
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label ">Angka Pertama</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="angka1">
                    </div>
                    <div class="col-sm-2"></div>
                    </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Angka Kedua</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="angka2">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            <input type="submit" class="btn btn-primary" name="hitung" value="hitung"/>
            <hr>
           <table class="table table-striped table-danger text-center">
            <?php
                $angka1 = isset($_POST["angka1"]) ? $_POST["angka1"] : "";               
                 $angka2 = isset($_POST["angka2"]) ? $_POST["angka2"] : "";  

                
                    if($angka1 == "")
                    {
                        echo "
                        <tr>
                        <td>Angka pertama tidak boleh dikosongkan</td> 
                        </tr>";
                    }
                
                    else if($angka2 == "")
                    {
                        echo "
                        <tr>
                        <td>Angka kedua tidak boleh dikosongkan</td> 
                        </tr>";   
                    }
                    else if($angka1<$angka2)
                            {
                                echo "
                        <tr>
                        <td>Angka pertama harus lebih besar dari angka kedua</td> 
                        </tr>";
                            }
                    else
                    {
                        echo "";
                    }
            ?>
            </table>
            <p><h2>Hasil Operasi Aritmatika</h2></p>
            <?php
            if($angka1 && $angka2)
                        {
                            if($angka1<$angka2)
                            {
                                echo "";
                            }
                            else
                            {
                            echo "# Hasil Penjumlahan = ".($angka1 + $angka2)."</br>";
                            echo "# Hasil Pengurangan = ".($angka1 - $angka2)."</br>";
                            echo "# Hasil Perkalian = ".($angka1 * $angka2)."</br>";
                            echo "# Hasil Pembagian = ".($angka1 / $angka2)."</br>";
                            echo "# Sisa Hasil Bagi = ".($angka1 % $angka2);
                            }
                        }
                        else
                        {
                            echo "";
                        }
            ?>

          </form>
      </div>
    </body>
</html>