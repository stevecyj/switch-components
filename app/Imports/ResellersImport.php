<?php

namespace App\Imports;

use App\Models\Reseller;
use Maatwebsite\Excel\Concerns\ToModel;

class ResellersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row);
        return new Reseller([
            //
        ]);
    }
}
