<?php

namespace App\Exports;

use App\Models\inspirasi_post;
use Maatwebsite\Excel\Concerns\FromCollection;

class InspirasiPostExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return inspirasi_post::all();
    }
}
