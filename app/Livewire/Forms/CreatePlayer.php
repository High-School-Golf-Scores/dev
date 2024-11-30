<?php

namespace App\Livewire\Forms;

use App\Models\Player;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreatePlayer extends Form
{
    #[Rule('required')]
    public $first_name = '';

    #[Rule('required')]
    public $last_name = '';

    #[Rule('required')]
    public $grad_year = '';

    #[Rule('required')]
    public $active = '';


    public function save() {
//        $this->validate();

        Player::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'grad_year' => $this->grad_year,
            'active' => 1,
            'level_id' => 1,
            'team_id' => 1,
            'card_id' => null,
        ]);
        $this->reset(['first_name', 'last_name', 'grad_year', 'active']);
    }
}
