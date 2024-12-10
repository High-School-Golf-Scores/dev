<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;
use App\Models\User;

class ShowPlayers extends Component
{
    public User $user;

    public function delete($playerId)
    {
        $player = Player::find($playerId);

        // Authorization...

        $player->delete();

//        sleep(1);
    }

    public function render()
    {
        return view('livewire.show-players', [
            'players' => Player::all(),
        ]);
    }
}
