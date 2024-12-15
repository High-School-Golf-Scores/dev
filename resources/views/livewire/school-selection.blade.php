<div>
    <h1 class="text-2xl font-bold mb-4">Select Schools for the Tournament</h1>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="grid grid-cols-3 gap-4">
            @foreach($schools as $school)
                <div class="flex items-center space-x-2">
                    <input type="checkbox" wire:model="selectedSchools" value="{{ $school->id }}" id="school-{{ $school->id }}" class="form-checkbox h-5 w-5 text-blue-600">
                    <label for="school-{{ $school->id }}" class="text-gray-700">{{ $school->name }}</label>
                </div>
            @endforeach
        </div>

        @error('selectedSchools')
        <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror

        <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Submit</button>
    </form>
</div>
