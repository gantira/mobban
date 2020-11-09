<?php

namespace App\Http\Livewire\Roles;

use App\Exports\RoleExport;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;

    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refresh' => '$refresh', 'destroy', 'export'];

    public function render()
    {
        return view('livewire.roles.index', [
            'roles' => Role::orWhere('name', 'like', '%' . $this->search . '%')->paginate($this->paginate),
        ]);
    }

    public function export()
    {
        return Excel::download(new RoleExport, 'roles.xlsx');
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
        Role::find($id)->delete();
    }
}
