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
    <title>Peringkat SIMAPRES</title>
</head>
<body>

  <div class="topnav">
    <a href="/data">Data Mahasiswa</a>
    <a href="#Prestasi">Data Prestasi</a>
    <a href="/cekSertif">Cek Sertifikat</a>
    <a href="/rangking">Rangking</a>
  </div>

    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png" alt=""></a>
    </div>

    <div class="judul">
      <h3>Rangking Mahasiswa</h3>
    </div>

    <div class="container">
        <table class="table" style="background-color: #333">
            <thead>
              <tr>
                <th scope="col">Peringkat</th>
                <th scope="col">Nama</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Prodi</th>
                <th scope="col">Score SPK</th>
              </tr>  
            </thead>

            @foreach ($datamhs as $mhs)
            <tbody>
                <tr>
                    <th>{{ $mhs->id_peringkat }}</th>
                    <th>{{ $mhs->namamhs }}</th>
                    <td>{{ $mhs->jurusanmhs }}</td>
                    <td>{{ $mhs->prodimhs }}</td>
                    <td>{{ $mhs->score }}</td>
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