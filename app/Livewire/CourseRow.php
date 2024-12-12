<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\CourseForm;

class CourseRow extends Component
{
    public $course;

    public CourseForm $form;

    public $showEditDialog = false;

    public function mount()
    {
        $this->form->setCourse($this->course);
    }

    public function save()
    {
        $this->form->update();

        $this->course->refresh();

        $this->reset('showEditDialog');
    }

    public function render()
    {
        return view('livewire.course-row');
    }
}
