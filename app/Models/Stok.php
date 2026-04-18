<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\Barang;
use App\Models\UserBaru;

class Stok extends Model
{
    protected $table = 't_stok';
    protected $primaryKey = 'stok_id';
    protected $guarded = [];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

    public function user()
    {
        return $this->belongsTo(UserBaru::class, 'user_id');
    }
}
