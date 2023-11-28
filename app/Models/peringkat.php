<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class peringkat extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_peringkat';
    protected $guarded = ['id_peringkat'];
    // protected $fillable = [
    //     'namaSertif','nim_mhs','tingkatSertif','juaraSertif','gambarSertif','cek'
    // ];

    public function api_datas(): BelongsTo
    {
        return $this->belongsTo(api_data::class,'nim_mhs','nim');
    }

    


}
