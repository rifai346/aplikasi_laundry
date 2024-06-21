<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    use HasFactory;
    // protected $table = 'detail_transaksis';
    // protected $primaryKey = 'detail_transaksi_id';
    protected $fillable = ['transaksi_id', 'paket_id','qty','keterangan'];

    public function transaksis()
    {
        return $this->hasOne(Transaksi::class,'id','transaksi_id');
    }
    public function pakets()
    {
        return $this->hasOne(Paket::class,'id','paket_id');
    }
}
