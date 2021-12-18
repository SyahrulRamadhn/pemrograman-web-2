<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Silahkan Login</h2>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="Username"><br/>
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" value="login"/>
    </form>
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
                        echo "Username atau Password Salah";
                    }
            }
        }
        else
        {
            echo"Username atau Password tidak boleh kosong";
        }
     } ?>

</body>
</html>