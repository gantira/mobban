<?php

namespace App\Http\Livewire\Botsfs;

use App\Exports\BotSfExport;
use App\Models\BotSf;
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

        return view('livewire.botsfs.index', [
            'botsfs' => BotSf::when($this->kategori, function ($query) {
                $query->where('kategori', $this->kategori);
            })->when($this->search, function ($query) {
                $query
                    ->orWhere('track_id', 'like', '%' . $this->search . '%')
                    ->orWhere('nama', 'like', '%' . $this->search . '%');
            })
                ->orderByDesc('created_at')
                ->paginate($this->paginate),
        ]);
    }

    public function export()
    {
        return Excel::download(new BotSfExport, 'bot sf.xlsx');
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
        BotSf::find($id)->delete();
    }
}
