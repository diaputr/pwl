<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'keluarga_id';
    protected $table = 'keluargas';
    protected $fillable = [
        'nama',
        'jk',
        'tgl_lahir',
        'hubungan',
        'pekerjaan'
    ];
}
