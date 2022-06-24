<?php

namespace App\Exports;

use App\Models\inspirasi_user;
use Maatwebsite\Excel\Concerns\FromCollection;

class InspirasiUserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return inspirasi_user::all();
    }
}
