<?php

namespace App\Http\Livewire\Userbots;

use App\Exports\UserBotExport;
use App\Models\UserBot;
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
        return view('livewire.userbots.index', [
            'userbots' => UserBot::when($this->search, function ($query) {
                $query
                    ->orWhere('bot',  $this->search)
                    ->orWhere('user_name_telegram',  $this->search);
            })
                ->orderByDesc('created_at')->paginate($this->paginate),
        ]);
    }

    public function export()
    {
        return Excel::download(new UserBotExport, 'user bot.xlsx');
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
        UserBot::find($id)->delete();
    }
}
