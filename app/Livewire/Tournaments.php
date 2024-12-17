<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Tournament;
use Illuminate\Support\Facades\Auth;

class Tournaments extends Component
{
public $tournaments, $name, $description, $tournamentId;

public function mount()
{
$this->tournaments = Tournament::where('coach_id', Auth::id())->get();
}

public function create()
{
Tournament::create([
'name' => $this->name,
'date' => $this->date,
'coach_id' => Auth::id(),
]);
session()->flash('message', 'Tournament Created.');
}

public function render()
{
return view('livewire.tournaments', ['tournaments' => $this->tournaments]);
}
}
