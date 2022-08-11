<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;
    public function produk()
    {
        return $this-> belongsTo(produk::class);
    }
    public function user()
    {
        return $this-> belongsTo(user::class);
    }
    public function transaksi()
    {
        return $this-> belongsTo(transaksi::class);
    }
}
