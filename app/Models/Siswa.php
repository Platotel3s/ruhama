<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswas';
    protected $fillable=[
        'nisn',
        'nama',
        'password',
        'nomorHp',
        'alamat',
        'role'
    ];
    protected $hidden=[
        'password',
    ];
    public function getAuthIdentifierName(){
        return 'nisn';
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class,'id');
    }
    public function mapel(){
        return $this->hasMany(Mapel::class,'id');
    }
    public function absen(){
        return $this->belongsTo(Absensi::class,'id');
    }
    public function uas(){
        return $this->hasMany(Uas::class,'id');
    }
    public function uts(){
        return $this->hasMany(Uts::class,'id');
    }
    public function dokumen(){
        return $this->hasMany(Dokumen::class,'id');
    }
    public function nilai(){
        return $this->hasMany(Nilai::class,'id');
    }
}
