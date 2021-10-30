<?php

namespace App\Imports;

use App\Models\Dishut;
use Maatwebsite\Excel\Concerns\ToModel;

class DishutImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dishut([
            'id_dishut' => $row[0],
            'nama' => $row[1],
            'nip' => $row[2],
            'anggota' => $row[3],
            'jenis_kelamin' => $row[4],
            'golongan' => $row[5],
            'jabatan' => $row[6],
            'eselon' => $row[7],
            'nama_jabatan' => $row[8],
            'kelas_jabatan' => $row[9],
            'unit_kerja' => $row[10],
            'keterangan' => $row[11]
        ]);
    }
}
