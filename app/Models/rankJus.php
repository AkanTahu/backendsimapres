<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rankJus extends Model
{
    use HasFactory;

    protected $primaryKey = 'peringkat';
    protected $guarded = ['peringkat'];
    // protected $fillable = [
    //     'namaSertif','nim_mhs','tingkatSertif','juaraSertif','gambarSertif','cek'
    // ];

    


}
