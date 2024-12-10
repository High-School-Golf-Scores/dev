<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\TournamentForm;

class TournamentRow extends Component
{
    public User $user;
    public $tournament;
    public $start_type_btn = '1';

    public TournamentForm $form;

    public $showEditDialog = false;

    public function mount()
    {
        $this->user = auth()->user();
        $this->coach_id = $this->user->id;
        $this->form->setTournament($this->tournament);
    }

    public function save()
    {
        $this->form->update();

        $this->tournament->refresh();

        $this->reset('showEditDialog');
    }

    public function render()
    {
        return view('livewire.tournament-row');
    }
}
