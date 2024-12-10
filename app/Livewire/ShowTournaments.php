<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;

class ShowTournaments extends Component
{
    public function delete($tournamentId)
    {
        $tournament = Tournament::find($tournamentId);

        // Authorization...

        $tournament->delete();

//        sleep(1);
    }

    public function render()
    {
        return view('livewire.show-tournaments', [
            'tournaments' => Tournament::all(),
        ]);
    }
}
