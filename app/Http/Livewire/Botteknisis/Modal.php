<?php

namespace App\Http\Livewire\Botteknisis;

use App\Models\BotTeknisi;
use Livewire\Component;

class Modal extends Component
{
    public $botteknisis;
    public $datel;
    public $sto;
    public $track_id;
    public $info_progress;
    public $date;
    public $kategori;
    public $evidence;
    public $user_name_telegram;
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.botteknisis.modal');
    }

    public function add()
    {
        $this->reset();
        $this->editMode = false;
        $this->emit('modal');
    }

    public function edit(BotTeknisi $botteknisis)
    {
        $this->editMode = true;
        $this->fill($botteknisis);
        $this->botteknisis = $botteknisis;
        $this->emit('modal');
    }

    public function submit()
    {
        if (!$this->editMode) {
            $validateData = $this->validate([
                'datel' => 'nullable',
                'sto' => 'nullable',
                'track_id' => 'nullable',
                'info_progress' => 'nullable',
                'date' => 'nullable',
                'kategori' => 'nullable',
                'evidence' => 'nullable',
                'user_name_telegram' => 'nullable',
            ]);

            BotTeknisi::create($validateData);
        } else {
            $validateData = $this->validate([
                'datel' => 'nullable',
                'sto' => 'nullable',
                'track_id' => 'nullable',
                'info_progress' => 'nullable',
                'date' => 'nullable',
                'kategori' => 'nullable',
                'evidence' => 'nullable',
                'user_name_telegram' => 'nullable',
            ]);

            BotTeknisi::find($this->botteknisis->id)->update($validateData);
        }
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }
}
