<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Halaman Admin SIMAPRES</title>
</head>
<body>

  <div class="topnav">
    <a href="/data">Data Mahasiswa</a>
    <a href="/cekSertifsaja">Data Prestasi</a>
    <a href="/cekSertif">Cek Sertifikat</a>
    <a href="/rangking">Rangking</a>
  </div>

    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png" alt=""></a>
    </div>

    <div class="judul">
      <h3>Data Mahasiswa</h3>
    </div>

    <div class="judul">
      <a class="btn btn-success" href="/inputData" role="button">Tambah</a>
    </div>
    
    <div class="container">
        <table class="table" style="background-color: #333">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Prodi</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">IPK</th>
                <th scope="col">Alpha (hari)</th>
                <th scope="col">Edit</th>
              </tr>  
            </thead>

            @foreach ($datamhs as $mhs)
            <tbody>
                <tr>
                    <td>{{ $mhs->id }}</td>
                    <td><a href="/detail_mhs/{{ $mhs->id }}">{{ $mhs->nama }}</a></td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->tahunMasuk }}</td>
                    <td>{{ $mhs->ipkORI }}</td>
                    <td>{{ $mhs->alphaORI }}</td>
                    <td>
                        <a href="/data/{{ $mhs->id }}"  class="btn btn-secondary">UBAH</a>
                        <form class="d-inline" action="/data/{{ $mhs->id }}" method="POST">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" id="button1" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach        
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script>
      document.getElementById('button1').addEventListener('click', function(){
          Swal.fire({
          title: "Berhasil",
          text: "Berhasil Menghapus Data Mahasiswa!",
          icon: "success"
          });
      })
    </script>

</body>
</html>