<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
