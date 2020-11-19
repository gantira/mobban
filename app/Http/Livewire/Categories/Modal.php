<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Modal extends Component
{
    public $name;
    public $category;
    public $order;
    public $visible;
    public $color;
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
                'order' => 'required',
                'visible' => 'required',
                'color' => 'nullable',
            ]);

            Category::create($validateData);
        } else {
            $validateData = $this->validate([
                'name' => 'required',
                'order' => 'required',
                'visible' => 'required',
                'color' => 'nullable',
            ]);

            $this->category->update($validateData);
        }
        $this->emit('refresh');
        $this->emit('swal');
        $this->emit('modal');
    }
}
