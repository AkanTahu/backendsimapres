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
    <title>Detail Mahasiswa</title>
</head>
<body>
<div class="image">
        <a href="/"><img src="/SIMAPRESputih.png"></a>
    </div>

    <div class="judul">
        <div class="row">
                <h1>Detail Mahasiswa</h1>
                    @csrf
                    <div class="photo-img">
                    <img src="data:image/png;base64,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">
</div>
                    <div class="containerdetail">
                        <label for="nama">Nama Mahasiswa</label>
                    </div>
                    <div class="containerdetail">
                        <label for="nim">214176131</label>
                    </div>
                    <div class="containerdetail">
                        <label for="prodi">D-IV Sistem Informasi Bisnis</label>
                    </div>
                    <div class="containerdetail">
                    <label for="jurusan">Teknologi Informasi</label>
                    </div>
                    <br>
                        <hr>
                        <div class="containerdetailrank">
                            <label for="ranking">RANKING</label>
                        </div>
                    <br>
                        <div class="judulrank">
                            <label for="norank">#1</label>
                        </div>
                        
                    <div class="rounded-box">
                        <h2>Daftar Prestasi</h2>
                         <p>Prestasi 1</p>
                         <p>Prestasi 2</p>
                     </div>
                    
</div>

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