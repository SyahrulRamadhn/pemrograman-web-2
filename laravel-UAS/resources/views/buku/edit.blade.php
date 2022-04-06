@extends("layout.cetakan")

@section("judul-halaman")
Halaman Edit Data Buku
@endsection

@section("isi-halaman")
<div class="container">
        <form class="row" action="{{route('buku.update', [$buku->id_buku])}}" method="post" enctype="multipart/form-data">
        @csrf
        
            <div class="row p-5">
                <div class="col-md-3 "></div>
                <div class="col-md-6 " id="card">
                    <div class="col-md-12 text-center">
                        <h2>Edit Data</h2>
                        <hr>
                    </div>
                    <div class="col-md-12 ">
                        <div class="col-md-12 col-md-12 d-grip gap-2 mx-auto">
                            <div class="row gy-3 p-3"> 
                              <input type="hidden" name="_method" value="PUT" />
                              <div class="col-md-3"> <label for="Judul"><h6>Judul Buku</h6></label></div>
                              <div class="col-md-9"> <input type="text" class="form-control" name="judul_buku" value="@if(old('judul_buku')){{old('judul_buku')}}@else{{$buku->judul_buku}}@endif" autocomplete="off"></div>
                              <div class="col-md-3"> <label for="penulis"><h6>Penulis</h6></label></div>
                              <div class="col-md-9"> <input type="text" class="form-control" name="penulis" value="@if(old('penulis')){{old('penulis')}}@else{{$buku->penulis}}@endif" autocomplete="off"></div>
                              <div class="col-md-3"> <label for="tahun"><h6>Tahun Rilis</h6></label></div>
                              <div class="col-md-9"> <input type="date" class="form-control" name="tahun_rilis" value="@if(old('tahun_rilis')){{old('tahun_rillis')}}@else{{$buku->tahun_rilis}}@endif" placeholder="YYYY" autocomplete="off"></div>
                              <div class="col-md-3"> <label for="genre"><h6>Genre</h6></label></div>
                              <div class="col-md-9"> <select class="form-control" name="genre">
                                                        <option @if(old("genre")) @if(old("genre") == "action"){{ "selected" }} @endif @else @if($buku->genre == "action"){{ "selected" }} @endif @endif>action</option>
                                                        <option @if(old("genre")) @if(old("genre") == "mystery"){{ "selected" }} @endif @else @if($buku->genre == "mystery"){{ "selected" }} @endif @endif>mystery</option>
                                                     </select>
                              </div>
                              <!---<div class="col-md-3"> <label for="file"><h6>Ubah gambar</h6></label></div>
                              <div class="col-md-9"> <input type="file" name="gambar" class="form-control" id="file" value="@if(old('gambar')){{old('gambar')}}@else{{$buku->gambar}}@endif"></div>--->
                              <div class="col-md-3"></div>
                              <div class="col-md-9">
                                <input type="submit" class=" btn btn-primary" name="Simpan" value="Simpan">
                                <a class="btn btn-primary"  href="{{route('buku.index')}}" id="a" role="button">Batal</a>
                              </div>
                          </div>
                        </div>      
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
@endsection

