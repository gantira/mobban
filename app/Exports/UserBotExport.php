<?php

namespace App\Exports;

use App\Models\UserBot;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserBotExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return UserBot::all();
    }
}
