
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield("judul-halaman")</title>
    <style type="text/css">      
      .bgr{
      background-color: #00FA9A;
      }
      .popular
      {
      padding-top:50px;
      }
      .img
      {
      width: 200px;
      height: 300px;
      }
      #img
      {
      width:300px;
      height:200px;
      }
      a{
      text-decoration: none;
      color:#000000;
      }
      footer
      {
      padding-top:30px;
      color:#ffffff;
      }
      ul 
      {
      list-style-type:none;
      }
      li 
      {
      list-style-type:none;
      }
      #a
      {
      text-decoration: none;
      color:#ffffff;
      }
      .col
      {
      padding-left:30px;
      }
      .text{
      color:#FFFFFF;
      }
    </style>
   
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bgr">
            <div class="container">
                <a class="navbar-brand" href="#">
                    @yield("gambar")
                    
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item color">
                    <a class="nav-link" style="color: #FFFFFF;" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" style="color: #FFFFFF;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Genre
                    </a>
                    <ul class="dropdown-menu bgr" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item text" href="#">Action & Adventure</a></li>             
                      <li><a class="dropdown-item text" href="#">Mystery & Thriller</a></li>
                    </ul>
                  </li>
                </ul>
                <ul class="navbar-nav mb-3 mb-lg-0">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #FFFFFF;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-white-600" >My Profile</span>
                    </a>
                    <ul class="dropdown-menu bgr" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item text" href="#">Profile</a></li>
                      <li><a class="dropdown-item text" href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Log Out</a></li>
                     
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Selection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure want to leave?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="#" type="button">Log Out</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <br>
      <br>
      @yield("isi-halaman")

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
    </body>
</html>