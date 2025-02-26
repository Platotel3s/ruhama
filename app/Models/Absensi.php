<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table='absensis';
    protected $fillable=[
        'mapel_id',
        'siswa_id',
        'keterangan'
    ];
    public function mapel(){
        return $this->belongsTo(Mapel::class,'id');
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class,'id');
    }
}
