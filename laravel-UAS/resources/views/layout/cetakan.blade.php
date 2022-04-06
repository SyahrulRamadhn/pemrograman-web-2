<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>@yield("judul-halaman")</title>
  <style type="text/css">
    #a
    {
      float:right;
    }
    #card{
      background: #00000099;
      color: white;
    }
  </style>
</head>
<body>
<div id="vanta-container">
@yield("isi-halaman")
</div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.birds.min.js"></script>
              <script>
              VANTA.BIRDS({
                el: "#vanta-container",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 641.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                backgroundColor: 0x2577de,
                color1: 0xf01616,
                color2: 0x1ff036,
                birdSize: 1.30,
                wingSpan: 35.00,
                separation: 75.00,
                alignment: 35.00,
                cohesion: 32.00
              })
              </script> 
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
