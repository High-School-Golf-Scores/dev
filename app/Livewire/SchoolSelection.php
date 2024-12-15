<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\School;
use App\Models\Tournament;

class SchoolSelection extends Component
{
    public $selectedSchools = []; // Array to store selected school IDs
    public $schools; // List of schools

    public function mount()
    {
        $this->schools = School::all(); // Fetch all schools from the database
    }

    public function submit()
    {
        // Validate that at least one school is selected
        $this->validate([
            'selectedSchools' => 'required|array|min:1',
        ]);

        // Add selected schools to the tournament (replace 1 with your tournament ID)
        $tournament = Tournament::find(1);
        $tournament->schools()->sync($this->selectedSchools);

        // Optionally, provide feedback to the user
        session()->flash('message', 'Selected schools added to the tournament!');

        // Reset the selection
        $this->selectedSchools = [];
    }

    public function render()
    {
        return view('livewire.school-selection');
    }
}
