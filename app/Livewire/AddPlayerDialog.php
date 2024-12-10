<?php

namespace App\Livewire;

use App\Livewire\Forms\PlayerForm;
use Livewire\Component;
use App\Models\User;

class AddPlayerDialog extends Component
{

    public User $user;

    public PlayerForm $form;

    public $show = false;

    public function mount()
    {
        $this->user = auth()->user();
        $this->coach_id = $this->user->id;
    }

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
