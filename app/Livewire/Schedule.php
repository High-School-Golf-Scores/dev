<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Home Page')]
class Schedule extends Component
{
    public function render()
    {
        return view('livewire.schedule');
    }
}
