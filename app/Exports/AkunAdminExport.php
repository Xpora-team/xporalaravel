<?php

namespace App\Exports;

use App\Models\AkunAdmin;
use Maatwebsite\Excel\Concerns\FromCollection;

class AkunAdminExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AkunAdmin::all();
    }
}
