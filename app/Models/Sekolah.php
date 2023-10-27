<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'tb_sekolah';
protected $fillable = [
        'nama_sekolah',
        'jenjang'
    ];
}
