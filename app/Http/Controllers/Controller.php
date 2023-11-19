<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\api_data;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function createmhs(Request $req){
        api_data::create([
            'nama' => $req->nama,
            'nim' => $req->nim,
            'tahunMasuk' => $req->tahunMasuk,
            'prodi' => $req->prodi,
            'jurusan' => $req->jurusan,
            'ipk' => $req->ipk,
            'alpha' => $req->alpha,
            'spk' => 0,
            'sertifikat' => 0,
            'username' => '',
            'password' => '',
        ]);

        return redirect()->intended('/inputData');
    }
}
