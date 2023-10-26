<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasTambahan extends Model
{
    use HasFactory;

    protected $table = 'tb_tgstambahan';
    protected $fillable = [
        'tgs_tambahan',
    ];
}
