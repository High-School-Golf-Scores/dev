<?php

namespace App\Livewire\Player;

use App\Livewire\Forms\PlayerForm;
use App\Models\Player;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Home Page')]


class ShowPlayers extends Component
{

    public $player;
    public $first_name = '';
    public $last_name = '';
    public $grad_year = '';

    public PlayerForm $form;
    public $search = '';

    protected function applySearch($query)
    {
        return $this->search === ''
            ? $query
            : $query
                ->where('first_name', 'like', '%'.$this->search.'%')
                ->orWhere('last_name', 'like', '%'.$this->search.'%')
                ->orWhere('grad_year', 'like', '%'.$this->search.'%');
    }

    public bool $showAddPlayerDialog = false;
    public bool $showEditPlayerDialog = false;
    public function mount()
    {
        $this->form->setPlayer($this->player);
    }
    public function add(){

        $this->form->save();
        $this->showAddPlayerDialog = false;
        $this->redirect('/players');
    }

    public function save(){

        $this->form->update();

//        $this->player->refresh();

        $this->reset('showEditPlayerDialog');
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
//        $query = $this->player->players();
//
//        $query = $this->applySearch($query);

        return view('livewire.players.show-players', [
            'players' => Player::all(),
        ]);
    }
}
