<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Input Data Mahasiswa</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Input Data Mahasiswa</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">NIM</label>
                <div class="col-sm-8">
                    <input type="text"class="form-control">

                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-8">
                    <input type="text"class="form-control">
                </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Program Studi</label>
                <div class="col-sm-8">
                    <select class="form-control">
                        <option>Teknik Informatika</option>
                        <option>Sistem Informasi</option>
                    </select>
                </div>
                </div>
                <button class="btn btn-success">SIMPAN</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>