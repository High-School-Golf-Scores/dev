<?php

namespace App\Livewire;

use App\Livewire\Forms\CardForm;
use Livewire\Component;

class CardRow extends Component
{
    public $card;

    public CardForm $form;

    public $showEditDialog = false;

    public function mount()
    {
        $this->form->setCard($this->card);
    }

    public function save()
    {
        $this->form->update();

        $this->card->refresh();

        $this->reset('showEditDialog');
    }

    public function render()
    {
        return view('livewire.card-row');
    }
}
