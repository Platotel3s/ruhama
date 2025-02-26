<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uts extends Model
{
    protected $table='uts';
    protected $fillable=[
        'id_siswa',
        'id_kelas',
        'id_mapel',
        'nilai',
    ];
    public function siswa(){
        return $this->belongsTo(Siswa::class,'id');
    }
    public function mapel(){
        return $this->hasMany(Mapel::class,'id');
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class,'id');
    }
}
