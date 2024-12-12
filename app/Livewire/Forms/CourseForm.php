<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use App\Models\Course;
use App\Models\User;

class CourseForm extends Form
{
    public User $user;

    #[Rule('required')]
    public string $name = '';

//    #[Rule('required')]
    public string $par = '';

//    #[Rule('required')]
    public string $slope = '';

//    #[Rule('required')]
    public string $front_tee_rating = '';

//    #[Rule('required')]
    public string $middle_tee_rating = '';

//    #[Rule('required')]
    public string $back_tee_rating = '';

//    #[Rule('required')]
    public string $front_tee_yardage = '';

//    #[Rule('required')]
    public string $middle_tee_yardage = '';

//    #[Rule('required')]
    public string $back_tee_yardage = '';



    public Course $course;
    public function mount()
    {
        $user = $this->user;
        $this->user = $user;
    }

    public function setCourse($course)
    {
        $this->course = $course;
        $this->name = $course->name;
        $this->par = $course->par;
        $this->slope = $course->slope;
        $this->front_tee_rating = $course->front_tee_rating;
        $this->middle_tee_rating = $course->middle_tee_rating;
        $this->back_tee_rating = $course->back_tee_rating;
        $this->front_tee_yardage = $course->front_tee_yardage;
        $this->middle_tee_yardage = $course->middle_tee_yardage;
        $this->back_tee_yardage = $course->back_tee_yardage;
    }



    public function save() {

//        $this->validate();

        Course::create([
            'name' => $this->name,
            'par' => $this->par,
            'slope' => $this->slope,
            'front_tee_rating' => $this->front_tee_rating,
            'middle_tee_rating' => $this->middle_tee_rating,
            'back_tee_rating' => $this->back_tee_rating,
            'front_tee_yardage' => $this->front_tee_yardage,
            'middle_tee_yardage' => $this->middle_tee_yardage,
            'back_tee_yardage' => $this->back_tee_yardage,
        ]);
        $this->reset(['name']);
    }

    public function update() {
//                $this->validate();

        $this->course->update([
            'name' => $this->name,
            'par' => $this->par,
            'slope' => $this->slope,
            'front_tee_rating' => $this->front_tee_rating,
            'middle_tee_rating' => $this->middle_tee_rating,
            'back_tee_rating' => $this->back_tee_rating,
            'front_tee_yardage' => $this->front_tee_yardage,
            'middle_tee_yardage' => $this->middle_tee_yardage,
            'back_tee_yardage' => $this->back_tee_yardage,

        ]);


    }
}
