<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Modal extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.users.modal');
    }

    public function add()
    {
        $this->reset();
        $this->editMode = false;
        $this->emit('modal');
    }

    public function edit(User $user)
    {
        $this->editMode = true;
        $this->fill($user);
        $this->user = $user;
        $this->emit('modal');
    }

    public function submit()
    {
        if (!$this->editMode) {
            $this->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required|confirmed',
            ]);

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
        } else {
            $this->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'nullable|confirmed',
            ]);

            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password ? bcrypt($this->password) : $this->user->password,
            ]);
        }
        $this->emit('reset');
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }
}
