<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'artikel_id';
    protected $table = 'artikels';
    protected $fillable = [
        'judul',
        'penulis',
        'kategori',
        'tgl_publish'
    ];
}
