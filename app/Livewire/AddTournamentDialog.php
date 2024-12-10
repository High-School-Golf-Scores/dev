<?php

namespace App\Livewire;

use App\Livewire\Forms\TournamentForm;
use Livewire\Component;
use App\Models\User;

class AddTournamentDialog extends Component
{
    public User $user;
    public $start_type_btn = '1';

    public TournamentForm $form;

    public $show = false;

    public function mount()
    {
        $this->user = auth()->user();
        $this->coach_id = $this->user->id;
    }

    public function add()
    {
//        dd($this->form);
        $this->form->save();

        $this->reset('show');

        $this->dispatch('added');
    }

    public function render()
    {
        return view('livewire.add-tournament-dialog');
    }
}
