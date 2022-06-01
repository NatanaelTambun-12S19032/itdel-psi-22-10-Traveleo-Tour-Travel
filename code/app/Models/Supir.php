<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;
    protected $table = 'supir';
    protected $fillable = ['nama', 'usia', 'email', 'jenis_kelamin', 'no_telepon', 'alamat', 'tgl_lahir'];
}
