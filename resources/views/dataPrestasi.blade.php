
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Cek Sertifikat SIMAPRES</title>
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
        <h3>Data Prestasi Mahasiswa</h3>
    </div>
    

    <div class="tabelSertif">
        <table class="table table-dark table-sm">
            <thead>
                <tr>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Sertifikat</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Juara</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Prodi</th>
                </tr>
            </thead>
            @foreach ($dataSertif as $sertif)
                <tbody>
                    <tr>
                        <td>
                            <div class="photo-st">
                                <img src="/sertifikat/{{ $sertif->nim }}_st.png">
                            </div>
                        </td>
                        <td>{{ $sertif->namaSertif }}</td>
                        <td>{{ $sertif->tingkatSertif }}</td>
                        <td>{{ $sertif->juaraSertif }}</td>
                        <td>{{ $sertif->nama }}</td>
                        <td>{{ $sertif->prodi }}</td>
                        <td>{{ $sertif->jurusan }}</td>
                    </tr>
                </tbody>
                @endforeach
        </table>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script>
        document.getElementById('button1').addEventListener('click', function(){
            Swal.fire({
            title: "Valid",
            text: "Data Sertifikat Valid",
            icon: "success"
            });
        })
      </script>
      <script>
        document.getElementById('button2').addEventListener('click', function(){
            Swal.fire({
            title: "Tidak Valid",
            text: "Data Sertifikat Tidak Valid",
            icon: "error"
            });
        })
      </script>
</body>
  
</body>
</html>