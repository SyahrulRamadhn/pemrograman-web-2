<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["username"]))
       {
       }
       else
       {
        header("location: login.php");
        }
?>

Selamat Datang Users <?php echo $_SESSION['username']?>
          <center><h2>20192205140 Syahrul Ramadhan</h2></center>
          <center><a href="logout.php">logout</a></center>
</body>
</html>