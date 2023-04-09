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
        'nama',
        'dosen',
        'sks',
        'hari',
        'ruang'
    ];
}
