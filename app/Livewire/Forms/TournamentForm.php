<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;
use Livewire\Attributes\Rule;
use App\Models\Tournament;

class TournamentForm extends Form
{
    public User $user;
    public string $school_id;

    #[Rule('required')]
    public string $name = '';

    #[Rule('required')]
    public string $date = '';

    #[Rule('required')]
    public string $course_id = '';

    #[Rule('required')]
    public string $start_time= '';

    #[Rule('required')]
    public string $start_type = '1';

    #[Rule('required')]
    public string $start_interval = '';

    #[Rule('required')]
    public string $type = '';

    #[Rule('required')]
    public string $starting_hole = '1';

    #[Rule('required')]
    public string $tees = '3';

    #[Rule('required')]
    public string $sub_tournament = '0';

    #[Rule('required')]
    public string $tie_breaker = '1';

    #[Rule('required')]
    public string $format = '1';

    #[Rule('required')]
    public string $cards = '';

    #[Rule('required')]
    public string $rounds = '1';

    #[Rule('required')]
    public string $levels = '1';

    #[Rule('required')]
    public string $rules = 'Play Ball Up, 1 scorecard length.';

    #[Rule('required')]
    public string $alert = 'Weather Alert.';

    #[Rule('required')]
    public string $sponsor = 'PnG Computers';

    #[Rule('required')]
    public string $flights = '1';

    #[Rule('required')]
    public string $coach_id = '';



    public Tournament $tournament;

    public function mount() {
        $this->user = auth()->user();
        $this->coach_id = $this->user->id;
    }

    public function setTournament($tournament)
    {
        $this->tournament = $tournament;
        $this->name = $tournament->name;
        $this->date = $tournament->date;
        $this->course_id = $tournament->course_id;
        $this->start_time = $tournament->start_time;
        $this->start_type = $tournament->start_type;
        $this->start_interval = $tournament->start_interval;
        $this->type = $tournament->type;
        $this->starting_hole = $tournament->starting_hole;
        $this->tees = $tournament->tees;
        $this->sub_tournament = $tournament->sub_tournament;
        $this->tie_breaker = $tournament->tie_breaker;
        $this->format = $tournament->format;
        $this->cards = $tournament->cards;
        $this->rounds = $tournament->rounds;
        $this->levels = $tournament->levels;
        $this->rules = $tournament->rules;
        $this->alert = $tournament->alert;
        $this->sponsor = $tournament->sponsor;
        $this->flights = $tournament->flights;
        $this->coach_id = $tournament->coach_id;
    }


    public function save() {

//        $this->validate();

        Tournament::create([
            'coach_id' => $this->coach_id,
            'name' => $this->name,
            'date' => $this->date,
            'course_id' => $this->course_id,
            'start_time' => $this->start_time,
            'start_type' => $this->start_type,
            'start_interval' => $this->start_interval,
            'type' => $this->type,
            'starting_hole' => $this->starting_hole,
            'tees' => $this->tees,
            'sub_tournament' => $this->sub_tournament,
            'tie_breaker' => $this->tie_breaker,
            'format' => $this->format,
            'cards' => $this->cards,
            'rounds' => $this->rounds,
            'levels' => $this->levels,
            'rules' => $this->rules,
            'alert' => $this->alert,
            'sponsor' => $this->sponsor,
            'flights' => $this->flights,
        ]);
        $this->reset(['name', 'type', 'cards']);
    }

    public function update() {

//        $this->validate();

        $this->tournament->update([
            'name' => $this->name,
            'date' => $this->date,
            'course_id' => $this->course_id,
            'start_time' => $this->start_time,
            'start_type' => $this->start_type,
            'start_interval' => $this->start_interval,
            'type' => $this->type,
            'starting_hole' => $this->starting_hole,
            'tees' => $this->tees,
            'sub_tournament' => $this->sub_tournament,
            'tie_breaker' => $this->tie_breaker,
            'format' => $this->format,
            'cards' => $this->cards,
            'rounds' => $this->rounds,
            'levels' => $this->levels,
            'rules' => $this->rules,
            'alert' => $this->alert,
            'sponsor' => $this->sponsor,
            'flights' => $this->flights,
            'coach_id' => $this->coach_id,
        ]);


    }
}
