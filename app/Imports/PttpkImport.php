<?php

namespace App\Imports;

use App\Models\Pttpk;
use Maatwebsite\Excel\Concerns\ToModel;

class PttpkImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pttpk([
            'id_pttpk' => $row[0],
            'nama' => $row[1],
            'nipttpk' => $row[2],
            'jenis_kelamin' => $row[3],
            'tempat' => $row[4],
            'tanggallahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]),
            'pendidikan' => $row[6],
            'jurusan' => $row[7],
            'jabatan' => $row[8],
            'upt' => $row[9],
            'keterangan' => $row[10]
        ]);
    }
}
