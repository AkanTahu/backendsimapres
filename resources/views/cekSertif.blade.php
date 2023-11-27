
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
    <title>Halaman Admin SIMAPRES</title>
</head>
<body>

    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png" alt=""></a>
    </div>

    <div class="judul">
        <h3>Cek Sertifikat Mahasiswa</h3>
    </div>
    

    <div class="tabelSertif">
        <table class="table table-dark table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Sertifikat</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Juara</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Status</th>
                    <th scope="col">Cek</th>
                </tr>
            </thead>
            @foreach ($dataSertif as $sertif)
                <tbody>
                    <tr>
                        <th>{{ $sertif->id_sertif }}</th>
                        <td>{{ $sertif->gambarSertif }}</td>
                        <td>{{ $sertif->namaSertif }}</td>
                        <td>{{ $sertif->tingkatSertif }}</td>
                        <td>{{ $sertif->juaraSertif }}</td>
                        <td>{{ $sertif->tanggalSertif }}</td>
                        <td>{{ $sertif->nama }}</td>
                        @if ($sertif->cek == 0 )
                            <td>Belum di Cek</td>
                        @elseif ($sertif->cek == 1 )
                            <td>Valid</td>
                        @elseif ($sertif->cek == 2 )
                            <td>Ditolak</td>            
                        @endif
                        
                        <td>
                            <a href="/cekSertif/{{ $sertif->id_sertif }}" id="button1" class="btn btn-success">VALID</a>
                            <a href="/cekSertif/tolak/{{ $sertif->id_sertif }}" id="button2" class="btn btn-danger">TOLAK</a>
                        </td>
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