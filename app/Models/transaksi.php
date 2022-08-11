<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function detail_transaksi()
    {
        return $this-> hasMany(detail_transaksi::class, 'transaksi_id');
    }
    public function user()
    {
        return $this-> belongsTo(user::class);
    }
}
