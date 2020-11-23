<?php

namespace App\Http\Livewire\Botsfs;

use App\Exports\BotSfExport;
use App\Models\BotSf;
use App\Models\Category;
use App\Models\UserBot;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $paginate = 10;
    public $kategori = 'WAITING';
    public $datel;
    public $sto;
    public $search;
    public $date;

    protected $queryString = ['search'];
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refresh' => '$refresh', 'destroy', 'export'];

    public function render()
    {
        $botsf = BotSf::when($this->kategori, function ($query) {
            $query->where('kategori', $this->kategori);
        })->when($this->datel, function ($query) {
            $query->whereIn('datel', $this->datel);
        })->when($this->sto, function ($query) {
            $query->whereIn('sto', $this->sto);
        })->when($this->date, function ($query) {
            $date = explode(" - ", $this->date);
            $query->whereBetween('updated_at', [Carbon::parse($date[0] . " 00:00:00"), Carbon::parse($date[1] . " 23:59:59")]);
        })->when($this->kategori, function ($query) {
            $query->where('kategori', $this->kategori);
        })->when($this->search, function ($query) {
            $query
                ->orWhere('track_id',  $this->search)
                ->orWhere('sc_id',  $this->search)
                ->orWhere('nd_internet',  $this->search)
                ->orWhere('ncx_id',  $this->search)
                ->orWhere('nama',  $this->search);
        })->orderByDesc('updated_at')->paginate($this->paginate);

        return view('livewire.botsfs.index', [
            'botsfs' => $botsf,
            'selectUserBots' => UserBot::all(),
            'selectDatels' => BotSf::groupBy('datel')->get(),
            'selectStos' => BotSf::groupBy('sto')->get(),
            'selectCategories' => Category::order()->visible()->get(),
        ]);
    }

    public function export()
    {
        return (new BotSfExport)->filter($this->kategori, $this->datel, $this->sto, $this->date)->download('botsfs.xlsx');
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
