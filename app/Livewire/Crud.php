<?php

namespace App\Livewire;
use App\Models\name as ModelName;
use Livewire\Component;

class Crud extends Component
{
    public $names;
    public $NameAdd;
    public function mount()
    {
        $this->names =ModelName::all();
    }
    public function add ()
    {
        $newName =ModelName::create([
            'name'=> $this->NameAdd,

        ]);
        $this->NameAdd = '';

        $this->names[] = $newName;
    }
    public function erasedata($id)
    {
        $this->names = $this->names->where('id', '!=', $id);
        ModelName::destroy($id);
        session()->flash('success', 'Delete successfully updated.');
    }
    public function render()
    {
        return view('livewire.crud');
    }
}
