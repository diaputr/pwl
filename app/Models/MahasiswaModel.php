<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas';

    protected $fillable = [
        'nim',
        'nama',
        'id_kelas',
        'id_prodi',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'hp',
        'foto'
    ];

    public function kls()
    {
        return $this->belongsTo(KelasModel::class, 'id_kelas', 'id');
    }

    public function prodi()
    {
        return $this->belongsTo(ProdiModel::class, 'id_prodi', 'id');
    }

    public function matkul()
    {
        return $this->belongsToMany(MatkulModel::class, 'mhs_matkuls', 'id_mhs', 'id_matkul')->withPivot('nilai');
    }
}
