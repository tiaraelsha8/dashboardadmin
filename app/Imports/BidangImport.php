<?php

namespace App\Imports;

use App\Models\bidang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BidangImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   

        return new bidang([
            'nama_bidang' => $row['nama_bidang'],
        ]);
    }
}
