<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    protected $table='walas';
    protected $fillable=[
        'nuptk',
        'nama',
        'password',
        'nomorHp',
        'alamat',
        'role',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class,'id');
    }
}
