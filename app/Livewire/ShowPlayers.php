<?php

namespace App\Livewire;

use App\Livewire\Forms\CreatePlayer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Player;
use Livewire\Attributes\Rule;

#[Layout('layouts.app')]
#[Title('Home Page')]
class ShowPlayers extends Component
{
    public CreatePlayer $form;

    public bool $showAddPlayerDialog = false;
    public function add(){

        $this->form->save();
        $this->showAddPlayerDialog = false;
        $this->redirect('/players');
    }

    public function editPlayer(Player $player){
        
    }

    public function delete(Player $player): void
    {
        $player->delete();
    }

    public function edit(Player $player): void
    {

    }

    public function render()
    {
        return view('livewire.show-players', [
            'players' => Player::all(),
        ]);
    }
}
