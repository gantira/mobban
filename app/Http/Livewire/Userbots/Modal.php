<?php

namespace App\Http\Livewire\Userbots;

use App\Models\UserBot;
use Livewire\Component;

class Modal extends Component
{
    public $userbot;
    public $bot;
    public $user_name_telegram;
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.userbots.modal');
    }

    public function add()
    {
        $this->reset();
        $this->editMode = false;
        $this->emit('modal');
    }

    public function edit(UserBot $userbot)
    {
        $this->editMode = true;
        $this->fill($userbot);
        $this->userbot = $userbot;
        $this->emit('modal');
    }

    public function submit()
    {
        if (!$this->editMode) {
            $validateData = $this->validate([
                'bot' => 'required|string',
                'user_name_telegram' => 'required|string',
            ]);

            UserBot::create($validateData);
        } else {
            $validateData = $this->validate([
                'bot' => 'required|string',
                'user_name_telegram' => 'required|string',
            ]);

            $this->userbot->update($validateData);
        }
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }
}
