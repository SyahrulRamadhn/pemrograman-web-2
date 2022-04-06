<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <form class="row g-3" action="" method="post">
            <div class="row gy-3 p-5">
                <div class="col-md-3 "></div>
                <div class="col-md-6 p-5 border">
                    <div class="col-md-12 text-center text-white">
                        <h2>Silahkan Login</h2>
                        <hr>
                    </div>
                    
                    <div class="col-md-12 ">
                        <div class="col-md-12 col-md-12 d-grip gap-2 mx-auto">
                            <div class="row gy-3 p-3"> 
                                <input type="text" name="nama" class="form-control" placeholder="Username">                                
                                <input type="password" name="pass" class="form-control" placeholder="Password">                               
                                <input type="submit" class="btn btn-primary" name="login" value="Login"/>
                                <table class="table table-striped table-danger text-center">
                                <?php
                                    include "koneksi.php";
                                    //mengambil inputan dari form login
                                    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
                                    $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
                                    $login = isset($_POST["login"]) ? $_POST["login"] : "";

                                    if($login)
                                    {
                                    if(!empty($nama))
                                    {
                                        if(!empty($pass))
                                        {
                                            $sql = "SELECT * FROM user WHERE username='".$nama."' AND password='".$pass."'";
                                            $kueri = $koneksi->query($sql);
                                            if($kueri)
                                            {
                                                $cek = $kueri->num_rows;
                                                    if($cek == 1){
                                                        session_start();
                                                        $_SESSION["username"] = $nama;
                                                        header("location: dashboard.php");
                                                    }
                                                    else
                                                    {
                                                        echo "
                                                            <tr>
                                                                <td>Username Atau Password salah</td> 
                                                            </tr>";
                                                    }
                                            }
                                        }
                                        else
                                        {
                                            echo "
                                            <tr>
                                                <td>Password Tidak Boleh Kosong</td> 
                                            </tr>";
                                        }
                                    }
                                        else
                                        {
                                            echo "
                                            <tr>
                                                <td>Username Tidak Boleh Kosong</td> 
                                            </tr>";
                                        }
                                } ?>
    
                                </table>
                            
                            </div>
                        </div>
                             
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>   
</body>
</html>