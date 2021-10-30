<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dishut extends Model
{
    use HasFactory;

    protected $table = "dishuts";
    protected $primaryKey = 'id_dishut';
    protected $fillable = [
        'id_dishut','nama','nip','anggota','jenis_kelamin','golongan','jabatan','eselon','nama_jabatan','kelas_jabatan','unit_kerja','keterangan'
    ];
}
