<?php

namespace App\Http\Livewire\Dashboards;

use App\Models\BotSf;
use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        foreach (BotSf::groupBy('datel')->get() as $key => $datel) {
            foreach (Category::all() as $key => $category) {
                $datels[$datel->datel][] = BotSf::whereDatel($datel->datel)->whereKategori($category->name)->count(); 
            }
        }

        return view('livewire.dashboards.index', [
            'selectCategories' => Category::all(),
            'datels' => $datels,
        ]);
    }
}
