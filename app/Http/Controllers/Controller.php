<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use App\Models\api_data;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function createmhs(Request $req){
        $ipk_spk = 0;
        $ipk_spk = (float)$req->ipk;
        if($ipk_spk >= 0 && $ipk_spk < 1){
            $ipk_spk = 1;
        }
        else if ($ipk_spk >= 1 && $ipk_spk < 2.5){
            $ipk_spk = 2;
        }
        else if ($ipk_spk >= 2.5 && $ipk_spk < 3){
            $ipk_spk = 3;
        }
        else if ($ipk_spk >= 3 && $ipk_spk < 3.5){
            $ipk_spk = 4;
        }
        else if ($ipk_spk >= 3.5 && $ipk_spk < 4){
            $ipk_spk = 5 ;
        }
        
        $alpha_spk = 0;
        $alpha_spk = (int)$req->alpha;

        if($alpha_spk >= 0 && $alpha_spk < 5){
            $alpha_spk = 1;
        }
        else if ($alpha_spk >= 5 && $alpha_spk < 10){
            $alpha_spk = 2;
        }
        else if ($alpha_spk >= 10 && $alpha_spk < 20){
            $alpha_spk = 3;
        }
        else if ($alpha_spk >= 20 && $alpha_spk < 50){
            $alpha_spk = 4;
        }
        else if ($alpha_spk >= 50){
            $alpha_spk = 5 ;
        }

        api_data::create([
            'nama' => $req->nama,
            'nim' => $req->nim,
            'tahunMasuk' => $req->tahunMasuk,
            'prodi' => $req->prodi,
            'jurusan' => $req->jurusan,
            'ipk' => $ipk_spk,
            'alpha' => $alpha_spk,
            'spk' => 0,
            'sertifikat' => 0,
            'username' => '',
            'password' => '',
        ]);

        return redirect()->intended('/inputData');
    }

    public function showDatamhs()
    {
        $datamhs = api_data::all();
        return view('data.editData',compact('datamhs'));
    }

    public function editmhs($id)
    {
        $datamhs = api_data::find($id);
        return view('data.gantiValue',compact('datamhs'));
    }

    public function updateDatamhs(Request $req, $id)
    {
        $datamhs = api_data::findOrFail($id);
        $datamhs->nama = $req->nama;
        $datamhs->nim = $req->nim;
        $datamhs->tahunMasuk = $req->tahunMasuk;
        $datamhs->prodi = $req->prodi;
        $datamhs->jurusan = $req->jurusan;
        $datamhs->ipk = $req->ipk;
        $datamhs->alpha = $req->alpha;

        $datamhs->save();
        return redirect()->intended('data');
    }

    public function hapus($id)
    {
        $data = api_data::find($id);
        $data->delete();
        DB::statement('SET @var := 0');
        DB::statement('UPDATE api_datas SET id = (@var := @var+1)');
        DB::statement('ALTER TABLE api_datas AUTO_INCREMENT=1');
        return redirect()->intended('/data');
    }
}
