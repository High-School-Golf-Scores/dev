<?php

namespace App\Livewire;

use App\Livewire\Forms\CardForm;
use App\Models\User;
use Livewire\Component;

class AddCardDialog extends Component
{

    public User $user;

    public CardForm $form;

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
        return view('livewire.add-card-dialog');
    }
}
