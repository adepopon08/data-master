<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPegawai extends Model
{
    use HasFactory;

    protected $table = 'tb_stat_pegawai';
    protected $fillable = [
        'stat_peg',
    ];
}
