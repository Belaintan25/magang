<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protacted $table = pesertas

    protected $fillable = [
        'nama', 'nik', 'email', 'no_hp', 'alamat', 'asal_kampus', 'jurusan',
         'id_divisi', 'alasan_ditolak', 'status', 'khs', 'foto', 'surat_pengantar',
        ];
}
