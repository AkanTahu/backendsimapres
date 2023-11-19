<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Halaman Admin SIMAPRES</title>
</head>
<body>
    <div class="image">
        <a href="/"><img src="/SIMAPRESputih.png" alt=""></a>
    </div>

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Prodi</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">IPK</th>
                <th scope="col">Alpha</th>
                <th scope="col">Edit</th>
              </tr>  
            </thead>

            @foreach ($datamhs as $mhs)
            <tbody>
                <tr>
                    <th>{{ $mhs->nama }}</th>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->tahunMasuk }}</td>
                    <td>{{ $mhs->ipk }}</td>
                    <td>{{ $mhs->alpha }}</td>
                    <td>
                        <a href="/data/{{ $mhs->id }}" class="btn btn-secondary">UBAH</a>
                        <form class="d-inline" action="/data/{{ $mhs->id }}" method="POST">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                      </td>
                </tr>
            </tbody>
            @endforeach        
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>