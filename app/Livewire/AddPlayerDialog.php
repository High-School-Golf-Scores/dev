<?php

namespace App\Livewire;

use App\Livewire\Forms\PlayerForm;
use Livewire\Component;

class AddPlayerDialog extends Component
{
    public PlayerForm $form;

    public $show = false;

    public function add()
    {
        $this->form->save();

        $this->reset('show');

        $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.add-player-dialog');
    }
}
