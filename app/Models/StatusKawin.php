<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusKawin extends Model
{
    use HasFactory;
    protected $table = 'tb_statkawin';
    protected $fillable = [
        'status_kawin',
    ];
}
