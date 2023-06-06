<!doctype html>
<html lang="en">
  <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Data Mahasiswa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         
        </ul>
        @if(!Auth::user())
          <a href="/login" class="btn btn-primary m-1">Login</a>
          <a href="/register" class="btn btn-danger m-1">Register</a>
        @endif
        @if(Auth::user())
        <b>{{ Auth::user()->name }}</b>
        <a href="/logout" class="btn btn-danger m-1">Logout</a>
        @endif
      </div>
    </div>
  </nav>
  <body class="bg-warning">
    <div class="container mt-5">
      @if(Auth::user())
      
        <a href="/tambah" class="btn btn-success m-2">Tambah Data</a>
      
      @endif
      @if(!Auth::user())
      
        <a class="btn btn-success m-2" onclick="alerttambah()">Tambah Data</a>
      
      @endif
        <div class="card">
            <div class="card-header text-center">
                <h2><b>Data Mahasiswa</b></h2>
            </div>
            <div class="row">
              @if ($message = Session::get('success'))
              <div class="alert alert-success" role="alert">
                {{ $message}}
              </div>
              @endif
            <div class="container-body">
                <table class="table bg-dark text-light">
                    <thead class="bg-secondary">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $no = 0;
                    @endphp
                      @foreach($data1 as $tampil)
                      <tr>
                        <th scope="row">{{ $tampil->id }}</th>
                        <td>{{ $tampil->nim }}</td>
                        <td>{{ $tampil->nama }}</td>
                        <td>{{ $tampil->fakultas }}</td>
                        <td>
                          @if(Auth::user())
                          
                            <a href="/editdata/{{ $tampil->id }}" class="btn btn-success">Edit</a>
                            <a href="/hapus/{{ $tampil->id }}" class="btn btn-danger">Hapus</a>
         
                          
                          @endif
                          @if(!Auth::user())
                          <a  onclick="edit()" class="btn btn-success">Edit</a>
                          <a  onclick="alert()" class="btn btn-danger">Hapus</a>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script>
    function alert() {
        swal({
      title: "Tidak Dapat Menghapus Data",
      text: "Silahkan Login Terlebih Dahulu",
      icon: "warning",
      button: "Ok",
    });
  }
  function edit() {
      swal({
    title: "Tidak Dapat Mengedit Data",
    text: "Silahkan Login Terlebih Dahulu",
    icon: "warning",
    button: "Ok",
  });
}
  function alerttambah() {
      swal({
    title: "Tidak Dapat Menambah Data",
    text: "Silahkan Login Terlebih Dahulu",
    icon: "warning",
    button: "Ok",
  });
}
    </script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>