<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['nasabah_id','jenis_transaksi','total'];
    
    function nasabah()
    {
        return $this->belongsTo('App\Nasabah');
    }
}
