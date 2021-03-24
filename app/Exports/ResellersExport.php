<?php

namespace App\Exports;

use App\Models\Reseller;
use Maatwebsite\Excel\Concerns\FromCollection;

class ResellersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Reseller::all();
    }
}
