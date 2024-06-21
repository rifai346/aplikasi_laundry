<?php

namespace App\Models;
use App\Models\outlet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    // protected $table = 'users';
    // protected $primaryKey = 'user_id';
    protected $fillable = ['nama', 'username','password','role','outlet_id'];
    public function outlets()
    {
        return $this->hasOne(outlet::class,'id','outlet_id');
    }
    
}
