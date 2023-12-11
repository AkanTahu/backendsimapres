<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class api_data extends Model
{
    use HasFactory;

    // protected $primaryKey = 'id';

    protected $guarded = ['id'];

    // protected $fillable = [
    //     'nama','nim','prodi','jurusan','tahunMasuk','alpha','ipk','sertifikat','spk','username','password'
    // ];

    public function sertifikats()
    {
        return $this->hasMany(sertifikat::class,'nim_mhs','nim');
    }

    public function peringkat()
    {
        return $this->hasOne(peringkat::class,'nim_mhs','nim');
    }

}
