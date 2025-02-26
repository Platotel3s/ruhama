<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table='mapels';
    protected $fillable=[
        'nama_mapel',
        'id_guru'
    ];
    public function absen(){
        return $this->hasMany(Walas::class,'id');
    }
    public function guru(){
        return $this->belongsTo(Guru::class,'id');
    }
    public function siswa(){
        return $this->hasMany(Siswa::class,'id');
    }
    public function uts(){
        return $this->belongsTo(Uts::class,'id');
    }
    public function uas(){
        return $this->belongsTo(Uas::class,'id');
    }
    public function nilai(){
        return $this->belongsTo(Nilai::class,'id');
    }

}
