@extends("layout.detail")

@section("judul-halaman")
Halaman Detail Data Buku
@endsection

@section("isi-halaman")
      <div class="container">
        <div class="row gy-2">
            <div class="col-md-12 ">   
               
                <span class="mr-2 d-none d-lg-inline text-white-600 "><h5>DETAIL DATA BUKU : {{$buku->judul_buku}} </h5></span>
            </div>
            <hr>
            <div class="col-md-6"></div>
            <div class="col-md-12">
            <table class="table table-striped table-hover">
                    <tr>
                       
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Genre</th>
                        <th>Tahun Rilis</th>
                    </tr>  
                    <tr>
                       
                        <td>{{$buku->judul_buku}}</td>
                        <td>{{$buku->penulis}}</td>
                        <td>{{$buku->genre}}</td>
                        <td>{{$buku->tahun_rilis}}</td>
                    </tr> 
            </table>
            </div>
        </div>
      </div>
    @endsection