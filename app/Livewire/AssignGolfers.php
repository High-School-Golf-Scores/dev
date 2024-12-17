<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;
use App\Models\Tournament;
use App\Models\Card;
use App\Models\Assignment;

class AssignGolfers extends Component
{
public $tournamentId;
public $selectedPlayers = [];
public $selectedScorecard;
public $players = [];
public $scorecards = [];

public function mount($tournamentId)
{
$this->tournamentId = $tournamentId;
$this->players = Player::all();
$this->scorecards = Card::where('tournament_id', $tournamentId)->get();
}

public function assign()
{
foreach ($this->selectedPlayers as $playerId) {
Assignment::updateOrCreate(
['player_id' => $playerId, 'scorecard_id' => $this->selectedScorecard],
[]
);
}

session()->flash('message', 'Players assigned successfully!');
$this->reset('selectedPlayers', 'selectedScorecard');
}

public function render()
{
return view('livewire.assign-players', [
'players' => $this->players,
'scorecards' => $this->scorecards,
]);
}
}
