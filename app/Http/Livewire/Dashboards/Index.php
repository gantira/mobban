<?php

namespace App\Http\Livewire\Dashboards;

use App\Exports\DashboardExport;
use App\Models\BotSf;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $datel;
    public $sto;

    protected $listeners = ['export'];

    public function render()
    {
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

        return view('livewire.dashboards.index', [
            'selectCategories' => Category::order()->visible()->get(),
            'datels' => $datels,
            'selectDatels' => BotSf::groupBy('datel')->get(),
            'selectStos' => BotSf::when($this->datel, function ($query) {
                $query->where('datel', $this->datel);
            })->groupBy('sto')->get(),
        ]);
    }

    public function export()
    {
        return (new DashboardExport)->filter($this->datel, $this->sto)->download('dashboard.xlsx');
    }
}
