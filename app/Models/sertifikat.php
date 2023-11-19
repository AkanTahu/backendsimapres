<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class sertifikat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function api_datas(): BelongsTo
    {
        return $this->belongsTo(api_data::class,'nim_mhs','nim');
    }


}
