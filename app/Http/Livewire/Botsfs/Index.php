<?php

namespace App\Http\Livewire\Botsfs;

use App\Exports\BotSfExport;
use App\Models\BotSf;
use App\Models\UserBot;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $kategori = 'WAITING';
    public $search;
    public $date;

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
                    ->orWhere('track_id',  $this->search)
                    ->orWhere('odp',  $this->search)
                    ->orWhere('sto',  $this->search)
                    ->orWhere('datel',  $this->search)
                    ->orWhere('kategori',  $this->search)
                    ->orWhere('teknisi',  $this->search)
                    ->orWhere('nama',  $this->search);
            })->when($this->date, function ($query) {
                $date = explode(" - ", $this->date);
                $query->whereBetween('created_at', [Carbon::parse($date[0] . " 00:00:00"), Carbon::parse($date[1] . " 23:59:59")]);
            })->orderByDesc('created_at')->paginate($this->paginate),
            'selectUserBots' => UserBot::all(),
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
