<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pttpk extends Model
{
    use HasFactory;

    protected $table = 'pttpks';
    protected $primaryKey = 'id_pttpk';
    protected $fillable = [
        'id_pttpk','nama','nipttpk','jenis_kelamin','tempat','tanggallahir','pendidikan','jurusan','jabatan','upt','keterangan'
    ];
}
