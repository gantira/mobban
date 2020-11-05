<?php

namespace App\Exports;

use App\Models\BotSf;
use Maatwebsite\Excel\Concerns\FromCollection;

class BotSfExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BotSf::all();
    }
}
