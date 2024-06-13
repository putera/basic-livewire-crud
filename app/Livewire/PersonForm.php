<?php

namespace App\Livewire;

use App\Livewire\Home;
use App\Models\Person;
use Livewire\Component;

class PersonForm extends Component
{
    public $name = '';
    public $email = '';
    public $id;
    public $person;

    function mount()
    {
        if ($this->id) {
            $this->person = Person::find($this->id);
            $this->name = $this->person->name;
            $this->email = $this->person->email;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
        ]);

        if ($this->id) {
            // Update
            $this->person->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        } else {
            // Create
            Person::create([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        }

        $this->redirect(Home::class, true);
    }


    public function render()
    {
        return view('livewire.person-form');
    }
}
