@extends("layout.cetakan")

@section("judul-halaman")
Halaman tambah Data Buku
@endsection

@section("isi-halaman")
<div class="container">
        <form class="row" action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
            <div class="row p-5">
                <div class="col-md-3 "></div>
                <div class="col-md-6 " id="card">
                    <div class="col-md-12 text-center">
                        <h2>Masukkan Data</h2>
                        <hr>
                    </div>
                    <div class="col-md-12 ">
                        <div class="col-md-12 col-md-12 d-grip gap-2 mx-auto">
                            <div class="row gy-3 p-3"> 
                              <div class="col-md-3"> <label for="Judul"><h6>Judul Buku</h6></label></div>
                              <div class="col-md-9"> <input type="text" name="judul_buku" class="form-control" autocomplete="off" required></div>
                              <div class="col-md-3"> <label for="penulis"><h6>Penulis</h6></label></div>
                              <div class="col-md-9"> <input type="text" name="penulis" class="form-control" autocomplete="off" required></div>
                              <div class="col-md-3"> <label for="tahun"><h6>Tahun Rilis</h6></label></div>
                              <div class="col-md-9"> <input type="date" name="tahun_rilis" class="form-control" placeholder="YYYY" autocomplete="off"></div>
                              <div class="col-md-3"> <label for="genre"><h6>Genre</h6></label></div>
                              <div class="col-md-9"> <select name="genre" class="form-control">
                                                      <option>Action</option>
                                                      <option>Mystery</option>
                                                      </select>
                              </div>
                              <!---<div class="col-md-3"> <label for="file"><h6>Tambah gambar</h6></label></div>
                              <div class="col-md-9"> <input type="file" name="gambar" class="form-control" id="file"></div>--->
                              <div class="col-md-3"></div>
                              <div class="col-md-9"> 
                                <input type="submit" class=" btn btn-primary" name="tambah" value="Tambah">
                                <a class="btn btn-primary"  href="{{route('buku.index')}}" id="a" role="button">Batal</a>
                              </div>
                          </div>
                        </div>      
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div> 
@endsection