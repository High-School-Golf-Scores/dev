<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PlayerForm;

class PlayerRow extends Component
{
    public $player;

    public PlayerForm $form;

    public $showEditDialog = false;

    public function mount()
    {
        $this->form->setPlayer($this->player);
    }

    public function save()
    {
        $this->form->update();

        $this->player->refresh();

        $this->reset('showEditDialog');
    }

    public function render()
    {
        return view('livewire.player-row');
    }
}
