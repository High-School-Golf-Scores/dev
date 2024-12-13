<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GolfHole;

class GolfHoles extends Component
{
    public $holes = [];

    public function mount()
    {
        // Initialize with 18 holes for simplicity
        for ($i = 1; $i <= 18; $i++) {
            $this->holes[$i] = [
                'hole_number' => $i,
                'par' => '',
                'distance_red' => '',
                'distance_white' => '',
                'distance_blue' => '',
            ];
        }
    }

    public function saveHoles()
    {
        foreach ($this->holes as $hole) {
            GolfHole::updateOrCreate(
                ['hole_number' => $hole['hole_number']],
                [
                    'par' => $hole['par'],
                    'distance_red' => $hole['distance_red'],
                    'distance_white' => $hole['distance_white'],
                    'distance_blue' => $hole['distance_blue'],
                ]
            );
        }

        session()->flash('message', 'Golf holes saved successfully!');
    }

    public function render()
    {
        return view('livewire.golf-holes');
    }
}
