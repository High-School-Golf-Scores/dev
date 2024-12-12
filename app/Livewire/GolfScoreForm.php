<?php

namespace App\Livewire;
// app/Http/Livewire/GolfScoreForm.php

use Livewire\Component;
use App\Models\GolfScore;

class GolfScoreForm extends Component
{
    public $tournament_id;
    public $player_id;
    public $school_id;
    public $scores = [];

    public function mount()
    {
        $this->scores = array_fill(0, 18, null); // Initialize 18 holes with null scores
    }

    public function submitScores()
    {
        $this->validate([
            'tournament_id' => 'required|integer',
            'player_id' => 'required|integer',
            'school_id' => 'required|integer',
            'scores.*' => 'required|integer|min:1|max:12', // Assuming valid golf scores range
        ]);

        foreach ($this->scores as $hole => $score) {
            GolfScore::create([
                'tournament_id' => $this->tournament_id,
                'player_id' => $this->player_id,
                'school_id' => $this->school_id,
                'hole_number' => $hole + 1,
                'score' => $score,
            ]);
        }

        session()->flash('message', 'Scores saved successfully!');
        $this->reset(['scores']); // Reset scores after saving
    }

    public function render()
    {
        return view('livewire.golf-score-form');
    }
}

