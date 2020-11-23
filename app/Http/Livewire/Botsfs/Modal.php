<?php

namespace App\Http\Livewire\Botsfs;

use App\Models\BotSf;
use App\Models\Category;
use App\Models\UserBot;
use Livewire\Component;

class Modal extends Component
{
    public $botsf;
    public $sto;
    public $datel;
    public $nama;
    public $track_id;
    public $no_hp1;
    public $no_hp2;
    public $alamat;
    public $odp;
    public $kode_sales;
    public $user_name_telegram;
    public $user_name_telegram_teknisi;
    public $info_progress;
    public $kategori;
    public $paket;
    public $sc_id;
    public $nd_internet;
    public $nd_telp;
    public $teknisi;
    public $layanan;
    public $wo_id;
    public $crew;
    public $ncx_id;
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.botsfs.modal', [
            'selectUserBots' => UserBot::all(),
            'selectCategories' => Category::all(),
        ]);
    }

    public function add()
    {
        $this->reset();
        $this->editMode = false;
        $this->emit('modal');
    }

    public function edit(BotSf $botsf)
    {
        $this->editMode = true;
        $this->fill($botsf);
        $this->botsf = $botsf;
        $this->emit('modal');
    }

    public function submit()
    {
        if (!$this->editMode) {
            $validateData = $this->validate([
                'sto' => 'nullable',
                'datel' => 'nullable',
                'nama' => 'nullable',
                'track_id' => 'nullable|unique:bot_sfs',
                'no_hp1' => 'nullable',
                'no_hp2' => 'nullable',
                'alamat' => 'nullable',
                'odp' => 'nullable',
                'kode_sales' => 'nullable',
                'user_name_telegram' => 'nullable',
                'user_name_telegram_teknisi' => 'nullable',
                'info_progress' => 'nullable',
                'kategori' => 'nullable',
                'paket' => 'nullable',
                'sc_id' => 'nullable',
                'nd_internet' => 'nullable',
                'nd_telp' => 'nullable',
                'teknisi' => 'nullable',
                'layanan' => 'nullable',
                'wo_id' => 'nullable',
            ]);

            BotSf::create($validateData);
        } else {
            $validateData = $this->validate([
                'sto' => 'nullable',
                'datel' => 'nullable',
                'nama' => 'nullable',
                'track_id' => 'nullable',
                'no_hp1' => 'nullable',
                'no_hp2' => 'nullable',
                'alamat' => 'nullable',
                'odp' => 'nullable',
                'kode_sales' => 'nullable',
                'user_name_telegram' => 'nullable',
                'user_name_telegram_teknisi' => 'nullable',
                'info_progress' => 'nullable',
                'kategori' => 'nullable',
                'paket' => 'nullable',
                'sc_id' => 'nullable',
                'nd_internet' => 'nullable',
                'nd_telp' => 'nullable',
                'teknisi' => 'nullable',
                'layanan' => 'nullable',
                'wo_id' => 'nullable',
            ]);

            $this->botsf->update($validateData);
        }
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }
}
