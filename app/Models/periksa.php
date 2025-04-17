<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class periksa extends Model
{
       //protected $fillable = [
      //  'id_pasien',
        //'id_dokter',
        //'tanggal',
        //'keluhan',
        //'diagnosis'
    //];
    
    public function pasiens():BelongsTo
    {
        return $this->belongsTo(User::class, 'id_pasien');
    }

    public function dokters():BelongsTo
    {
        return $this->belongsTo(User::class, 'id_dokter');
    } 
}
