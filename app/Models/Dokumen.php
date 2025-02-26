<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table='dokumens';
    protected $fillable=[
        'id_siswa',
        'id_kelas',
        'jenis_dok',
        'path_docs'
    ];
    public function siswa(){
        return $this->belongsTo(Siswa::class,'id');
    }
    public function kelas(){
        return $this->hasMany(Kelas::class,'id');
    }
}
