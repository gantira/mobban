<?php

namespace App\Http\Livewire\Botteknisis;

use App\Exports\BotTeknisiExport;
use App\Models\BotTeknisi;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

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
        return view('livewire.botteknisis.index', [
            'botteknisis' => BotTeknisi::when($this->search, function ($query) {
                $query
                    ->orWhere('track_id',  $this->search)
                    ->orWhere('datel',  $this->search)
                    ->orWhere('kategori',  $this->search)
                    ->orWhere('user_name_telegram',  $this->search);
            })
                ->orderByDesc('created_at')->paginate($this->paginate),
        ]);
    }

    public function export()
    {
        return Excel::download(new BotTeknisiExport, 'bot teknisi.xlsx');
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
        BotTeknisi::find($id)->delete();
    }
}
