<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    use HasFactory;
     // protected $table = 'tb_outlets';
    // protected $primaryKey = 'outlet_id';
    protected $fillable = ['nama', 'alamat','telepon'];
    public function outlets()
    {
        return $this->hasOne(outlet::class,'outlet_id','id');
    }
}
