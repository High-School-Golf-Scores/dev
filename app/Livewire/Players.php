<?php

namespace App\Livewire;

use Livewire\Component;

class Players extends Component
{
    public $players, $first_name, $last_name, $active, $grad_year, $player_id;

    public function render()
    {
        $this->players = auth()->user()->players;
        return view('livewire.players');
    }

    public function store()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'active' => 'required|integer',
            'grad_year' => 'required',
        ]);

        auth()->user()->players()->updateOrCreate(['id' => $this->player_id], [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'active' => $this->active,
            'grad_year' => $this->grad_year,
        ]);

        $this->closeModal();
        $this->resetInputFields();
    }
}
