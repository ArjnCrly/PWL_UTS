<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 't_penjualan';
    protected $primaryKey = 'penjualan_id';
    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(PenjualanDetail::class, 'penjualan_id');
    }
    public function user()
    {
        return $this->belongsTo(UserBaru::class, 'user_id');
    }
}

