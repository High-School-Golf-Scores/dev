<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Form;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use App\Models\Player;
use App\Models\User;

class PlayerForm extends Form
{
    public User $user;

    #[Rule('required')]
    public string $first_name = '';

    #[Rule('required')]
    public string $last_name = '';

    #[Rule('required')]
    public string $grad_year = '';

    #[Rule('required')]
    public string $active = '';

    public Player $player;

    public function mount()
    {
        $user = $this->user;
        $this->user = $user;
    }

    public function setPlayer($player)
    {

        $this->player = $player;
        $this->first_name = $player->first_name;
        $this->last_name = $player->last_name;
        $this->grad_year = $player->grad_year;
    }


    public function save() {

//        $this->validate();


        Player::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'grad_year' => $this->grad_year,
            'active' => 1,
            'school_id' => Auth::user()->school_id,
        ]);
        $this->reset(['first_name', 'last_name', 'grad_year']);
    }

    public function update() {
//                $this->validate();

        $this->player->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'grad_year' => $this->grad_year,
            'active' => 1,
            'school_id' => 1,
        ]);


    }
}
