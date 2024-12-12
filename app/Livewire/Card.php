<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('Courses | KGCA')]
class Card extends Component
{
    public function render()
    {
        return view('livewire.cards', [
            'cards' => Card::all(),
        ]);
    }
}
