<?php

namespace App\Livewire\Forms;

use App\Models\Card;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CardForm extends Form
{
    public User $user;

    #[Rule('required')]
    public string $starting_hole = '';

//    #[Rule('required')]
    public string $tee_time = '';

//    #[Rule('required')]
    public string $comment = '';





    public Card $card;
    public function mount()
    {
        $user = $this->user;
        $this->user = $user;
    }

    public function setCard($card)
    {
        $this->card = $card;
        $this->starting_hole = $card->starting_hole;
        $this->tee_time = $card->tee_time;
        $this->comment = $card->comment;
    }



    public function save() {

//        $this->validate();

        Card::create([
            'starting_hole' => $this->starting_hole,
            'tee_time' => $this->tee_time,
            'comment' => $this->comment,
        ]);
        $this->reset(['starting_hole']);
    }

    public function update() {
//                $this->validate();

        $this->card->update([
            'starting_hole' => $this->starting_hole,
            'tee_time' => $this->tee_time,
            'comment' => $this->comment,
        ]);


    }
}
