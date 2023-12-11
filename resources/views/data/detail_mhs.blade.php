<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png"></a>
    </div>

        <div class="row">
            <div class="judul">
                <h1>Detail Mahasiswa</h1>
            </div>    
                <div class="photo-box">
                    <img src="/images/{{ $datamhs->nim }}_fotoprofil.jpg">
                </div>
                <div class="judul">
                    <h2>{{ $datamhs->nama }}</h2>
                </div>
                <div class="judul">
                    <h2>{{ $datamhs->nim }}</h2>
                </div>
                <div class="judul">
                    <h2>{{ $datamhs->jurusan }}</h2>
                </div>
                <div class="judul">
                    <h2>{{ $datamhs->prodi }}</h2>
                </div>
                <br>
                <hr>
                <div class="judul">
                    <h1>RANGKING</h1>
                </div>
                <br>
                <div class="judul">    
                    <h1>#{{ $datamhs->id_peringkat }}</h1> 
                </div>  
        </div>
    <div class="cardSertif">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $datamhs->namaSertif }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Tingkat = {{ $datamhs->tingkatSertif }}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Juara = {{ $datamhs->juaraSertif }}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Tanggal Pelaksanaan = {{ $datamhs->tanggalSertif }}</h6>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>