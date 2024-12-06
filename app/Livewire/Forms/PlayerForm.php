<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use App\Models\Player;



class PlayerForm extends Form
{

    #[Rule('required')]
    public string $first_name = '';

    #[Rule('required')]
    public string $last_name = '';

    #[Rule('required')]
    public string $grad_year = '';

    #[Rule('required')]
    public string $active = '';

    public Player $player;

    public function setPlayer($player)
    {
//        $this->first_name = $player->first_name;
//        $this->last_name = $player->last_name;
//        $this->grad_year = $player->grad_year;
    }


    public function save() {

        $this->validate();

        Player::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'grad_year' => $this->grad_year,
            'active' => 1,
            'school_id' => 1
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
