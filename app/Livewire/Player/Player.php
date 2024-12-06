<?php

namespace App\Livewire\Player;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('Player Roster | KGCA')]
class Player extends Component
{
    public function render()
    {
        return view('livewire.player', [
            'players' => Player::all(),
        ]);
    }
}
