<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'hobis';
    protected $primaryKey = 'hobi_id';
    protected $fillable = [
        'nama',
        'kategori',
        'level',
        'deskripsi'
    ];
}
