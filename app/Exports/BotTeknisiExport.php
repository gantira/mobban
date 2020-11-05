<?php

namespace App\Exports;

use App\Models\BotTeknisi;
use Maatwebsite\Excel\Concerns\FromCollection;

class BotTeknisiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BotTeknisi::all();
    }
}
