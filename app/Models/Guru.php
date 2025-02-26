<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table='gurus';
    protected $fillable=[
        'nuptk',
        'nama',
        'password',
        'nomorHp',
        'alamat',
        'role',
    ];
    protected $hidden=[
        'password',
    ];
    public function getAuthIdentifierName(){
        return 'nuptk';
    }
    public function mapel(){
        return $this->hasMany(Mapel::class,'id');
    }
}
