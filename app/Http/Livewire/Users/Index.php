<?php

namespace App\Http\Livewire\Users;

use App\Exports\UserExport;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $search;

    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refresh' => '$refresh', 'destroy', 'export'];

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::when($this->search, function ($query) {
                $query
                    ->orWhere('email',  $this->search)
                    ->orWhere('name',  $this->search);
            })
                ->paginate($this->paginate),
        ]);
    }

    public function export()
    {
        return Excel::download(new UserExport, 'users.xlsx');
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
        User::find($id)->delete();
    }
}
