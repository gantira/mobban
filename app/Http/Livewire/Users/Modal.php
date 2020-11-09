<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Modal extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $roles;
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.users.modal', [
            'selectRoles' => Role::all()
        ]);
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

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
            $user->syncRoles($this->roles);
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
            $this->user->syncRoles($this->roles);
        }
        $this->emit('reset');
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }

    public function isSelected($permissionName)
    {
        if (!$this->editMode) {
            return;
        }
        return in_array($permissionName, $this->user->getRoleNames()->toArray()) ? 'selected' : 'null';
    }
}
