<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Daftar Mahasiswa</h3>
                </div>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>#</th>
                        <th>Nama Mahasiswa</th>
                        <th>Detail</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    @foreach ($mahasiswa as $mahasiswa)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mahasiswa->nama_mahasiswa}}</td>
                            <td><a href="{{route('mahasiswa.show', [$mahasiswa->nim])}}" class="btn btn-primary">Detail</a></td>
                            <td><a href="{{route('mahasiswa.edit', [$mahasiswa->nim])}}" class="btn btn-warning">Edit</a></td>
                            <td>
                                <form action="{{route('mahasiswa.destroy', [$mahasiswa->nim])}}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pengguna atas nama {{$mahasiswa->nama_mahasiswa}}?')">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>