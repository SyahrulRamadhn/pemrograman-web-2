<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Edit Data Mahasiswa</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Edit Data Mahasiswa</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="{{route('mahasiswa.update', [$mahasiswa->nim])}}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" />
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">NIM</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nim" value="@if(old('nim')){{old('nim')}}@else{{$mahasiswa->nim}}@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_mahasiswa" value="@if(old('nama_mahasiswa')){{old('nama_mahasiswa')}}@else{{$mahasiswa->nama_mahasiswa}}@endif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-4 col-form-label">Program Studi</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="program_studi">
                                    <option @if(old("program_studi")) @if(old("program_studi") == "Teknik Informatika"){{ "selected" }} @endif @else @if($mahasiswa->program_studi == "Teknik Informatika"){{ "selected" }} @endif @endif>Teknik Informatika</option>
                                    <option @if(old("program_studi")) @if(old("program_studi") == "Sistem Informasi"){{ "selected" }} @endif @else @if($mahasiswa->program_studi == "Sistem Informasi"){{ "selected" }} @endif @endif>Sistem Informasi</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>