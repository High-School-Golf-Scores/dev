<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\School;

class MultiSelectSchools extends Component
{
    public $schools = [];
    public $selectedSchools = [];

    public function mount()
    {
        // Load the list of schools
        $this->schools = School::orderBy('name')->get(['id', 'name']);
        dd($this->schools);
    }

    public function render()
    {
        return view('livewire.multi-select-schools');
    }
}
