<?php

namespace App\Livewire;

use App\Livewire\Forms\CourseForm;
use App\Models\User;
use Livewire\Component;

class AddCourseDialog extends Component
{

    public User $user;

    public CourseForm $form;

    public $show = false;

    public function mount()
    {
        $this->user = auth()->user();
        $this->coach_id = $this->user->id;
    }

    public function add()
    {
        $this->form->save();

        $this->reset('show');

        $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.add-course-dialog');
    }
}
