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
    
    public function pasiens(): HasMany
    {
        return $this->hasMany(periksa::class, 'id_pasien');
    }

    public function dokters():HasMany
    {
        return $this->hasMany(periksa::class, 'id_dokter');
    } 
}
