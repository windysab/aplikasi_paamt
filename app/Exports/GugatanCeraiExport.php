<?php

namespace App\Exports;

use App\Models\GugatanCerai;
use Maatwebsite\Excel\Concerns\FromCollection;

class GugatanCeraiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return GugatanCerai::all();
    }
}
