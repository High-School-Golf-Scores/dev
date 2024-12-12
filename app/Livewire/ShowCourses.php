<?php


namespace App\Livewire;

use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class ShowCourses extends Component
{
    public User $user;

    public function delete($courseId)
    {
        $course = Course::find($courseId);

        // Authorization...

        $course->delete();

//        sleep(1);
    }

    public function render()
    {
        return view('livewire.show-courses', [
            'courses' => Course::all(),

        ]);
    }
}
