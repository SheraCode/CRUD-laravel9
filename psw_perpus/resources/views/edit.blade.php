<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3><b>Edit Data Mahasiswa</b></h3>
            </div>
            <div class="card-body">
                <form action="/simpan/{{ $data->id }}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label"><b>Nama Lengkap</b></label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value="{{ $data->nama }}">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"><b>NIM</b></label>
                      <input type="number" class="form-control" id="exampleInputPassword1" name="nim" value="{{ $data->nim }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><b>Fakultas</b></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fakultas" value="{{ $data->fakultas }}">
                        
                      </div>
                      <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary"><b>Tambah Data</b></i>
                      </div>                  
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>