<!-- resources/views/livewire/golf-score-form.blade.php -->
<div>
    <form wire:submit.prevent="submitScores">
        <div>
            <label for="tournament_id">Tournament ID</label>
            <input type="text" id="tournament_id" wire:model="tournament_id">
            @error('tournament_id') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="player_id">Golfer ID</label>
            <input type="text" id="player_id" wire:model="player_id">
            @error('player_id') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="school_id">School ID</label>
            <input type="text" id="school_id" wire:model="school_id">
            @error('school_id') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <h3>Scores</h3>
            @foreach ($scores as $hole => $score)
                <div>
                    <label for="hole-{{ $hole }}">Hole {{ $hole + 1 }}</label>
                    <input type="text" id="hole-{{ $hole }}" wire:model="scores.{{ $hole }}">
                    @error('scores.' . $hole) <span>{{ $message }}</span> @enderror
                </div>
            @endforeach
        </div>

        <button type="submit">Save Scores</button>
    </form>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
