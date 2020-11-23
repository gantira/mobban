<?php

namespace App\Exports;

use App\Models\BotSf;
use App\Models\Category;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DashboardExport implements WithHeadings, FromQuery, WithStyles
{
    public function headings(): array
    {
        $category = Category::order()->visible()->pluck('name')->toArray();
        array_unshift($category, 'DATEL');
        return $category;
    }

    use Exportable;

    public function filter($datel, $sto)
    {
        $this->datel = $datel;
        $this->sto = $sto;

        return $this;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }

    public function query()
    {
        foreach (BotSf::groupBy('datel')->get() as $key => $datel) {
            foreach (Category::order()->visible()->get() as $key => $category) {
                $datels[$datel->datel][] = BotSf::when($this->datel, function ($query) {
                    $query->whereIn('datel', $this->datel);
                })->when($this->sto, function ($query) {
                    $query->whereIn('sto', $this->sto);
                })->whereBetween('updated_at', [Carbon::parse(now()->format('Y-m-d') . " 00:00:00"), Carbon::parse(now()->format('Y-m-d') . " 23:59:59")])
                    ->whereKategori($category->name);
            }
        }

        return $datels;
    }
}
