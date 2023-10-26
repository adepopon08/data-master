<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPtk extends Model
{
    use HasFactory;

    protected $table = 'tb_jnsptk';
    protected $fillable = [
        'jenis_ptk',
    ];
}
