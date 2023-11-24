<?php

namespace App\Http\Controllers;
use App\Models\api_data;
use App\Models\sertifikat;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
// use Illuminate\Http\JsonResponse;
// use illuminate\Support\Facades\DB;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpFoundation\Cookie;
// use Symfony\Component\HttpFoundation\Cookie;


class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $nim_mahasiswa;

    public function test()
    {
        $data = api_data::all();
        return $data;
    }

    public function index()
    {
        $data = api_data::all();
        return $data;
    }

    public function top5(){
        $data = api_data::all()->take(5);
        return $data;    
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function setCookie()
    //     {
    //         $cookieValue = 'Hello, Laravel 10 Cookies!';
    //         $cookie = cookie('cookie_name', $cookieValue, $minutes = 60);
            
    //         return response()
    //             ->withCookie($cookie);
    //     }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data = api_data::where('username','=',$username)->
        where('password','=',$password)->first();
        $nim_mahasiswa = $data->nim;

        // $masuk = new sertifikat;
        // $masuk->nim_mhs = $nim_mahasiswa;
        // $masuk->save();

        // return $nim_mahasiswa;
        $cookie = cookie('nim', $nim_mahasiswa, $minutes = 60);
        return response()
            ->json(['success' => "logged in"], 200)   // JsonResponse object
            ->withCookie(cookie('nim', $nim_mahasiswa, $minutes = 60));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = new api_data;
        $save->nama = $request->nama;
        $save->nim = $request->nim;
        $save->prodi = $request->prodi;
        $save->jurusan = $request->jurusan;
        $save->tahunMasuk = $request->tahunMasuk;
        $save->ipk = $request->ipk;
        $save->alpha = $request->alpha;
        $save->sertifikat = $request->sertifikat;
        $save->spk = $request->spk;
        $save->save();

        // return "work save";
    }
    
    public function makeSertif(Request $request){
        #use awed method
        $nim = $request->cookie('nim');
        // $nim_mahasiswa = $nim;

        $save = new sertifikat;
        $save->nim_mhs = $nim;
        $save->namaSertif = $request->namaSertif;
        $save->tingkatSertif = $request->tingkatSertif;
        // $save->juaraSertif = $request->juaraSertif;
        $save->tanggalSertif = $request->tanggalSertif;
        // $save->gambarSertif = $request->gambarSertif;
        $save->save();
        #use isal method
         //$nim = sertifikat::all()->last();
        // $nim_mahasiswa = $nim->nim_mhs;
        // $data = sertifikat::where('nim_mhs',$nim_mahasiswa)
        //         ->update(['namaSertif' => $request->namaSertif,
        //         'tingkatSertif' => $request->tingkatSertif,
        //         // 'juaraSertif' => $request->juaraSertif,
        //         'tanggalSertif' => $request->tanggalSertif,
        //         // 'gambarSertif' => $request->gambarSertif,
        //         ]);
        // $data->save();   
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = api_data::all()->where('id', $request->id)->first();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $data = api_data::all()->where('id', $request->id)->first();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->prodi = $request->prodi;
        $data->jurusan = $request->jurusan;
        $data->tahunMasuk = $request->tahunMasuk;
        $data->ipk = $request->ipk;
        $data->alpha = $request->alpha;
        $data->sertifikat = $request->sertifikat;
        $data->spk = $request->spk;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->save();

        // return "edit";
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function updateAkun(Request $request)
    {
        $nim = $request->nim;
        api_data::where('nim',$nim)
                ->update(['username' => $request->username,'password' => $request->password]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $del = api_data::all()->where('id', $request->id)->first();
        $del->delete();
        return "work delete";
    }
}
