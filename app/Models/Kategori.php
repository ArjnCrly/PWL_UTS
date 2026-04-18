<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($kategori) {
            $kategori->barangs()->delete();
        });
    }

    public function barangs()
    {
        return $this->hasMany(Barang::class, 'kategori_id');
    }
}