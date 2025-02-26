<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kepsek extends Model
{
    protected $table='kepsek';
    protected $fillable=[
        'nuptk',
        'nama',
        'password',
        'nomorHp',
        'alamat',
        'role',
    ];
}
