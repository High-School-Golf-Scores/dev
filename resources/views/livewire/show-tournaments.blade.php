<div>
    <div class="flex flex-col gap-8 w-[75rem] px-8">
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold leading-6 text-slate-900">Tournaments</h1>

{{--            <livewire:add-tournament-dialog @added="$refresh" />--}}
        </div>
        <div>Tournament Level</div>
        <table class="min-w-full divide-y divide-slate-300 bg-white shadow rounded-xl">
            <thead>
            <tr class="text-left text-slate-800">
                <th class="pl-6 rounded-tl-xl py-4 font-semibold bg-slate-50">Name</th>
                <th class="pl-6 rounded-tl-xl py-4 font-semibold bg-slate-50">Type</th>

                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Assign Teams</th>
                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Assign Players</th>
                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Edit Cards</th>
                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr>
            </thead>

            <tbody class="divide-y divide-slate-200" wire:loading.class="opacity-50">
            @foreach ($tournaments as $tournament)
                <livewire:tournament-row :key="$tournament->id" :$tournament @deleted="delete({{ $tournament->id }}) lazy " />
            @endforeach
            </tbody>
        </table>
    </div>
</div>

