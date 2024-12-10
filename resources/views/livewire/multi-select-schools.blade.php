<div>
    <label for="schools" class="block text-sm font-medium text-gray-700">Select Schools</label>
    <select
        id="schools"
        multiple
        wire:model="selectedSchools"
        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        @foreach($schools as $school)
            <option value="{{ $school->id }}">{{ $school->name }}</option>
        @endforeach
    </select>

    <div class="mt-4">
        <h3 class="text-sm font-medium text-gray-700">Selected Schools:</h3>
        <ul class="mt-2 space-y-1">
            @forelse($selectedSchools as $schoolId)
                <li class="text-sm text-gray-600">
                    {{ $schools->firstWhere('id', $schoolId)->name ?? 'Unknown School' }}
                </li>
            @empty
                <li class="text-sm text-gray-400">No schools selected</li>
            @endforelse
        </ul>
    </div>
</div>
