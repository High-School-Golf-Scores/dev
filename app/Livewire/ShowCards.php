<?php


namespace App\Livewire;

use App\Models\Card;
use App\Models\User;
use Livewire\Component;

class ShowCards extends Component
{
    public User $user;

    public function delete($cardId)
    {
        $card = Card::find($cardId);

        // Authorization...

        $card->delete();

//        sleep(1);
    }

    public function render()
    {
        return view('livewire.show-cards', [
            'cards' => Card::all(),

        ]);
    }
}
