<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nohp',
        'email',
        'alamat',
        'jenis_kelamin',
        'status',
    ];
}
