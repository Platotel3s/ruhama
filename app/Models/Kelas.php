<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='kelas';
    protected $fillable=[
        'nama_kelas',
        'siswa_id',
        'walas_id',
    ];
    public function siswa(){
        return $this->hasMany(Siswa::class,'id');
    }
    public function walas(){
        return $this->belongsTo(Walas::class,'id');
    }
    public function dokumen(){
        return $this->hasMany(Dokumen::class,'id');
    }
}
