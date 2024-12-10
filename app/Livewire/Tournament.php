<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('Tournaments | KGCA')]
class Tournament extends Component
{
    public function render()
    {
        return view('livewire.tournament', [
            'tournaments' => Tournament::all(),
        ]);
    }
}
