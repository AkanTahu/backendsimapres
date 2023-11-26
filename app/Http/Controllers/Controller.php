<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use App\Models\api_data;
use App\Models\sertifikat;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function workSPK()
    {
        $data = api_data::all();
        $response = Http::post('http://127.0.0.1:5000/post-rank',["api_datas"=>$data]);
        return $response;
        // return Gpu::all();
        // return "hello";
    }

    public function showDataSertif()
    {
        $dataSertif = DB::table('sertifikats')
                    ->join('api_datas','sertifikats.nim_mhs','=','api_datas.nim')
                    ->get();
        return view('cekSertif',compact('dataSertif'));
    }

    public function validSertif($id_sertif)
    {
        sertifikat::where('id_sertif',$id_sertif)
        ->update(['cek' => 1]);

        $datanim = DB::table('sertifikats')
                    ->join('api_datas','sertifikats.nim_mhs','=','api_datas.nim')
                    ->where('id_sertif','=',$id_sertif)
                    ->first();

        $dataSertif = DB::table('sertifikats')
                    ->join('api_datas','sertifikats.nim_mhs','=','api_datas.nim')
                    ->where('id_sertif','=',$id_sertif)
                    ->first();            

        $sertif_spk = 0;
        $tingkat = 0;
        $juara = 0;
        
        if($dataSertif->tingkatSertif == 'Kota'){
            $tingkat = 1;
        }
        else if($dataSertif->tingkatSertif == 'Provinsi'){
            $tingkat = 2;
        }
        else if($dataSertif->tingkatSertif == 'Nasional'){
            $tingkat = 3;
        }
        else if($dataSertif->tingkatSertif == 'Internasional'){
            $tingkat = 4;
        }

        if($dataSertif->juaraSertif == 'Partisipan'){
            $juara = 1;
        }
        else if($dataSertif->juaraSertif == '3'){
            $juara = 2;
        }
        else if($dataSertif->juaraSertif == '2'){
            $juara = 3;
        }
        else if($dataSertif->juaraSertif == '1'){
            $juara = 4;
        }

        $sertif_spk = ($tingkat + $juara) / 2;

        $masuk = api_data::where('nim', $datanim->nim_mhs)->first();
        $masuk->sertifikat = $sertif_spk;
        $masuk->save();

        return redirect()->intended('cekSertif');
    }

    public function tolakSertif($id_sertif){
        sertifikat::where('id_sertif',$id_sertif)
        ->update(['cek' => 2]);

        return redirect()->intended('cekSertif');
    }
}
