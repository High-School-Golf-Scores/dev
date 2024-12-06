<?php

namespace App\Livewire\Post;

use Livewire\Component;

class Signup extends Component
{
    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.signup');
    }
}
