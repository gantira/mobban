<?php

namespace App\Http\Livewire\Dashboards;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboards.index', [
            'categoriesCount' => Category::all()
        ]);
    }
}
