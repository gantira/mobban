<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Modal extends Component
{
    public $name;
    public $category;
    public $editMode = false;

    protected $listeners = ['edit', 'add'];

    public function render()
    {
        return view('livewire.categories.modal');
    }

    public function add()
    {
        $this->reset();
        $this->editMode = false;
        $this->emit('modal');
    }

    public function edit(Category $category)
    {
        $this->editMode = true;
        $this->fill($category);
        $this->category = $category;
        $this->emit('modal');
    }

    public function submit()
    {
        if (!$this->editMode) {
            $validateData = $this->validate([
                'name' => 'required',
            ]);

            Category::create($validateData);
        } else {
            $validateData = $this->validate([
                'name' => 'required',
            ]);

            $this->category->update($validateData);
        }
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }
}
