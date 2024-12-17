<div>
    <h1>Assign Golfers to Tournament</h1>

    <form wire:submit.prevent="assign">
        <div>
            <h3>Select Golfers</h3>
            @foreach ($golfers as $golfer)
                <div>
                    <label>
                        <input type="checkbox" wire:model="selectedGolfers" value="{{ $golfer->id }}">
                        {{ $golfer->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <div>
            <h3>Select Scorecard</h3>
            <select wire:model="selectedScorecard">
                <option value="">-- Select a Scorecard --</option>
                @foreach ($cards as $card)
                    <option value="{{ $card->id }}">{{ $card->$card_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Assign</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success mt-3">
            {{ session('message') }}
        </div>
    @endif
</div>
