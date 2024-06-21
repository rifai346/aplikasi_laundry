<?php

namespace App\Models;
use App\Models\outlet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;
    // protected $table = 'tb_pakets';
    // protected $primaryKey = 'paket_id';
    protected $fillable = ['outlet_id','jenis','nama_paket','harga'];

    public function outlets()
    {
        return $this->hasOne(outlet::class,'id','outlet_id');
    }
}
