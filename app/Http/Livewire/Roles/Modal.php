<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Modal extends Component
{
    public $role;
    public $name;
    public $permissions = [];
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.roles.modal', [
            'selectPermissions' => Permission::all(),
            'selectRoles' => collect(Role::all())->reject(function ($value, $key) {
                return $value['name'] == 'super admin';
            }),
        ]);
    }

    public function add()
    {
        $this->reset();
        $this->editMode = false;
        $this->emit('modal');
    }

    public function edit(Role $role)
    {
        $this->editMode = true;
        $this->fill($role);
        $this->role = $role;
        // dd($this->permissions);
        $this->emit('modal');
    }

    public function submit()
    {
        if (!$this->editMode) {
            $validateData = $this->validate([
                'name' => 'required|unique:roles,name',
            ]);

            $role = Role::create($validateData);
            $role->syncPermissions($this->permissions);
        } else {

            $validateData = $this->validate([
                'name' => 'required|unique:roles,name,' . $this->role->id,
            ]);

            $this->role->update($validateData);
            $this->role->syncPermissions($this->permissions);
        }
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }

    public function isSelected($permissionName)
    {
        if (!$this->editMode) {
            return;
        }
        return in_array($permissionName, $this->role->getPermissionNames()->toArray()) ? 'selected' : 'null';
    }
}
