<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    // protected $table = 'tb_members';
    // protected $primaryKey = 'members_id';
    protected $fillable = ['nama', 'alamat','jenis_kelamin','telepon'];
}
