<!DOCTYPE html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>       
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-3"></div>
                <div class="col-sm-4 text-center">
                    <h2> Silahkan login </h2>
                   
                    
                </div>
                <div class="col-sm-5" ></div>
            </div>
            
            <form action="" method="post">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label ">Username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col-sm-4"></div>
                    </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            <input type="submit" class="btn btn-primary" name="login" value="login"/>
          </form>
          <?php
         
        
         //definisi variabel
         $username = "syahrul ramadhan";
         $password = "20192205140";

         //memulai session
         session_start();

         //mengambil inputan dari form login
         $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
         $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";

        if($nama == $username && $pass == $password){
            header("location: dashboard.php");
            
            }
          ?>
      </div>
    </body>
</html>