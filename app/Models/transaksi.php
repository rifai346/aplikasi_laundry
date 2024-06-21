<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    // protected $table = 'transaksis';
    // protected $primaryKey = 'transaksi_id';
    protected $fillable = 
    [
        'outlet_id',
        'kode_invoice',
        'member_id',
        'tgl',
        'batas_waktu',
        'tgl_bayar',
        'biaya_tambahan',
        'diskon',
        'pajak',
        'status',
        'dibayar',
        'user_id',

    ];

    public function outlets()
    {
        return $this->hasOne(Outlet::class,'id','outlet_id');
    }
    public function members()
    {
        return $this->hasOne(Member::class,'id','member_id');
    }
    public function users()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
