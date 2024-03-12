<?php

namespace App\Livewire;

use App\Models\name;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Update extends Component
{
    public $nameModel;

    public $name;

    public function mount($id)
    {
        $this->nameModel = name::findOrFail($id);

        $this->name = $this->nameModel->name;
    }

    public function updateName()
    {
        $this->nameModel->update([
            "name" => $this->name,
        ]);

        session()->flash('success', 'Name successfully updated.');
    }
    


    public function render()
    {
        return view('livewire.update');
    }
}
