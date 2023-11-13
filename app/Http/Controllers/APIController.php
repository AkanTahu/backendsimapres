<?php

namespace App\Http\Controllers;

use App\Models\api_data;
use Illuminate\Http\Request;


class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function create()
    {
        //
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
        // $data = api_data::where($nim);
        // $data->username = $request->input('username');
        // $data->password = $request->input('password');
        // $data->update();
        // return "work update";
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
