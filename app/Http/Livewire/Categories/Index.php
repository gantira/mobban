<?php

namespace App\Http\Livewire\Categories;

use App\Exports\CategoryExport;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $kategori;

    public $search;

    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refresh' => '$refresh', 'destroy', 'export'];

    public function render()
    {
        return view('livewire.categories.index', [
            'categories' => Category::orWhere('name', 'like', '%' . $this->search . '%')->paginate($this->paginate),
        ]);
    }

    public function export()
    {
        return Excel::download(new CategoryExport, 'categories.xlsx');
    }

    public function showConfirmation($id)
    {
        $this->emit("swal:confirm", [
            'type'        => 'warning',
            'title'       => 'Are you sure?',
            'text'        => "You won't be able to revert this!",
            'confirmText' => 'Yes, delete!',
            'method'      => 'destroy',
            'params'      => $id,
            'callback'    => '',
        ]);
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
    }
}
