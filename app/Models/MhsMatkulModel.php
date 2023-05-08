<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MhsMatkulModel extends Model
{
    use HasFactory;
    protected $table = 'mhs_matkuls';
    protected $fillable = ['id_mhs', 'id_matkul', 'nilai'];

    public function mhs()
    {
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matkul()
    {
        return $this->belongsTo(MatkulModel::class);
    }
}
