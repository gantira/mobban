<?php

namespace App\Exports;

use App\Models\BotSf;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DashboardExport implements WithStyles, FromView
{

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

    public function view(): View
    {
        $selectCategories = Category::order()->visible()->get();

        foreach (BotSf::groupBy('datel')->get() as $key => $datel) {
            foreach (Category::order()->visible()->get() as $key => $category) {
                $datels[$datel->datel][] = BotSf::when($this->datel, function ($query) {
                    $query->where('datel', $this->datel);
                })->when($this->sto, function ($query) {
                    $query->where('sto', $this->sto);
                })->whereBetween('updated_at', [Carbon::parse(now()->format('Y-m-d') . " 00:00:00"), Carbon::parse(now()->format('Y-m-d') . " 23:59:59")])
                    ->whereDatel($datel->datel)
                    ->whereKategori($category->name)
                    ->count();
            }
        }


        return view('exports.dashboard', [
            'selectCategories' => $selectCategories,
            'datels' => $datels,
        ]);
    }
}
