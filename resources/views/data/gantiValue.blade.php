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
        <div class="row">
            <div class="col-md-12 mt-1">
                <h3>Form Edit Mahasiswa</h3>
                <form method="post" action="/data/{{ $datamhs->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input class="form-control" type="text" name="nama" id="name" value="{{ $datamhs->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input class="form-control" type="text" name="nim" id="nim" value="{{ $datamhs->nim }}">
                    </div>
                    <div class="form-group">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="jurusan" id="jurusan">
                        <option selected>Pilih Jurusan</option>
                        <option value="TK">Teknik Kimia</option>
                        <option value="TI">Teknologi Informasi</option>
                        <option value="TE">Teknik Elektro</option>
                        <option value="TS">Teknik Sipil</option>
                        <option value="TM">Teknik Mesin</option>
                        <option value="AK">Akuntansi</option>
                        <option value="AN">Adminitrasi Niaga</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Progam Studi</label>
                        <input class="form-control" type="text" name="prodi" id="prodi" value="{{ $datamhs->prodi }}">
                    </div>
                    <div class="form-group">
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"  name="tahunMasuk"  id="tahunMasuk">
                            <option selected>Pilih Tahun Masuk</option>
                            <option value=20>20</option>
                            <option value=21>21</option>
                            <option value=22>22</option>
                            <option value=23>23</option>
                          </select>
                        </div>
                    <div class="form-group">
                        <label for="kelas">IPK</label>
                        <input class="form-control" type="text" name="ipk" id="ipk" placeholder="masukkan ipk" value="{{ $datamhs->ipk }}">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Ketidak Hadiran (Alpha)</label>
                        <input class="form-control" type="text" name="alpha" id="alpha" placeholder="masukkan alpha" value="{{ $datamhs->alpha }}">
                    </div>
                    <div class="form-group float-right">
                        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
                        <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>