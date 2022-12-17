<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     {{-- link boxicon --}}
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Data Guru</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Siswa</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                      
                        <form action="" method="POST">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Nama Siswa</label>
                              <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data -> nama_siswa }}">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Gambar Siswa</label>
                              <input type="file" name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NISN</label>
                                <input type="number" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data -> nisn }}">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                                <input type="string" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data -> no_telp }}">
                              </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Kelas & Jurusan</label>
                                <select class="form-select mb-4" name="kelas_id" aria-label="Default select example">
                                    <option selected value="{{ $data -> id }}">{{ $data -> kelas -> kelas_jurusan }}</option>
                                    @foreach ($kelas as $kj)
                                    <option value="{{ $kj->id }}">{{ $kj->kelas_jurusan }}</option>
                                    @endforeach
                                </select>
                              </div>
                            <p>Jenis Kelamin</p>
                            <select class="form-select mb-4" name="jenis_kelamin" aria-label="Default select example">
                              <option selected>Pilih jenis kelamin</option>
                              <option value="Laki-laki" @if($data -> jenis_kelamin == 'Laki-laki') selected @endif>Laki-Laki</option>
                              <option value="Perempuan" @if($data -> jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" name="alamat" required disabled class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data -> alamat }}">
                              </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>