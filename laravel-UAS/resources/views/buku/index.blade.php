@extends("layout.detail")

@section("judul-halaman")
Halaman Data Buku
@endsection

@section("gambar")
<img src="gambar/buku.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
@endsection
        

@section("isi-halaman")
               
      <div class="container">
   
                @if(session("teks"))
                <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">
                        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Notification</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                            {{session("teks")}}
                            </div>
                    </div>
                    </div>
                @endif
                
        <div class="row gy-2">
            <div class="col-md-12">
                 @if(session("pesan"))
                    <div aria-live="polite" aria-atomic="true" class="position-relative">
                    <div class="toast-container position-absolute top-0 end-0">
                        <div class="toast show align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true"  delay="500" autohide="true">
                        <div class="d-flex">
                            <div class="toast-body">
                            {{session("pesan")}}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        </div>
                    </div>
                    </div>
                @endif
            </div>
            <div class="col-md-12 ">   
                <img class="img-profile" width="30px" src="gambar/book-outline.svg" style="float:left">
                <span class="mr-2 d-none d-lg-inline text-white-600 "><h5>DATA BUKU</h5></span>
            </div>
            
            <hr>
            <div class="col-md-2">
                <button class="btn btn-primary" type="button">
                    <a href="{{route('buku.tambah')}}" id='a'>Tambah Data Buku</a>
                </button> 
            </div>
            <!---<div class="col-md-4">
                <form action="#" method="post" class="d-flex">
                    
                  <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off" required>
                  <input class="btn btn-primary" style="margin-right: 20px;" type="submit" value="Search">
                </form>
            </div>--->
            <div class="col-md-6"></div>
            <div class="col-md-12">
            <table class="table table-striped table-hover" style="text-align: left;">
                    <tr>
                    <th>No</th>
                   
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Detail Buku</th>
                    <th>Aksi</th>
                    </tr>
                    @foreach ($buku as $buku)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                           
                            <td>{{$buku->judul_buku}}</td>
                            <td>{{$buku->penulis}}</td>
                            <td><a href="{{route('buku.detailbuku', [$buku->id_buku])}}" class="btn btn-primary">Detail</a></td>
                            <td>
                                <table>
                                    <tr>
                                        <td>
                                            <a href="{{route('buku.edit', [$buku->id_buku])}}" class="btn btn-warning">Edit</a>
                                        </td>
                                        <td>
                                        <form action="{{route('buku.destroy', [$buku->id_buku])}}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data buku dengan nama buku {{$buku->judul_buku}}?')">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    @endforeach
            </table>
            </div>
        </div>
      </div>
      <footer>
        <div class="copyright text-center my-auto p-3 " style="background-color:#000000;">
            <span>Copyright © Tumpukan Buku 2022</span>
        </div>
      </footer>
    @endsection

    