<!DOCTYPE html>
<html>
<head>
    <title>fdsflds</title>
</head>
<body>
    <?php
       session_start();
       if(!isset($_SESSION["nama"]))
       {
        header("location: login.php");
       }
       else
       {
        
        }
?>
          <center><h2>20192205140 Syahrul Ramadhan</h2></center>
          <center><a href="logout.php">logout</a></center>
</body>

</html>