<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GolfCourse;

class GolfCourseForm extends Component
{
    public $name;
    public $holes = [];
    public $total_rating;
    public $total_slope;
    public $total_yardage;

    public function mount()
    {
        $this->holes = array_fill(0, 18, ['par' => '', 'distance' => '', 'tees' => ['red' => '', 'white' => '', 'blue' => '']]);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
            'holes.*.par' => 'required|integer',
            'holes.*.distance' => 'required|integer',
            'holes.*.tees.red' => 'required|integer',
            'holes.*.tees.white' => 'required|integer',
            'holes.*.tees.blue' => 'required|integer',
            'total_rating' => 'required|integer',
            'total_slope' => 'required|integer',
            'total_yardage' => 'required|integer',
        ]);

        GolfCourse::create([
            'name' => $this->name,
            'holes' => json_encode($this->holes),
            'total_rating' => $this->total_rating,
            'total_slope' => $this->total_slope,
            'total_yardage' => $this->total_yardage,
        ]);

        session()->flash('message', 'Golf Course created successfully.');
    }

    public function render()
    {
        return view('livewire.golf-course-form');
    }
}
