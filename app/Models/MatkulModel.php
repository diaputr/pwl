<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'matkul_id';
    protected $table = 'matkuls';
    protected $fillable = [
        'kode',
        'nama',
        // 'dosen',
        'semester',
        'sks',
        'jam',
        // 'hari',
        // 'ruang'
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(MahasiswaModel::class, 'mhs_matkuls', 'id_matkul', 'id_mhs')->withPivot('nilai');
    }
}
