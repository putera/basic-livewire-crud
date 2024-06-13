<?php

namespace App\Livewire;

use App\Models\Person;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public function delete($id)
    {
        $person = Person::find($id);
        $person->delete();

        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.home', [
            'persons' => Person::paginate(5)
        ]);
    }
}
