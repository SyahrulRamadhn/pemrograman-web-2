@extends("layout.cetakan")

@section("judul-halaman")
Halaman Login
@endsection

@section("isi-halaman")
<div class="container">
          <form class="row g-3" action="/actionlogin" method="post">
              @csrf
              <div class="row gy-3 p-5">
                  <div class="col-md-3 "></div>
                  <div class="col-md-6 p-5" id="card">
                      <div class="col-md-12 text-center text-white">
                          <h2>Silahkan Login</h2>
                          <hr>
                      </div>
                      
                      <div class="col-md-12 ">
                          <div class="col-md-12 col-md-12 d-grip gap-2 mx-auto">
                              <div class="row gy-3 p-3"> 
                                  <input type="email" name="email" class="form-control"  placeholder="Username" autocomplete="off" autofocus required>                                
                                  <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>                               
                                  <input type="submit" class="btn btn-primary" name="login" value="Login"/>
                              </div>
                          </div>
                              
                      </div>
                  </div>
                  <div class="col-md-3"></div>
              </div>
          </form>
      </div>
      @endsection