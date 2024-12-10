<div>
    <div class="flex flex-col gap-8 w-[50rem] px-8">
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold leading-6 text-slate-900">New Roster</h1>

            <livewire:add-player-dialog @added="$refresh" />
        </div>
        <div>Roster Level</div>

   {{ $user }}

        <table class="min-w-full divide-y divide-slate-300 bg-white shadow rounded-xl">
            <thead>
            <tr class="text-left text-slate-800">
                <th class="pl-6 rounded-tl-xl py-4 font-semibold bg-slate-50">First Name</th>
                <th class="pl-6 rounded-tl-xl py-4 font-semibold bg-slate-50">Last Name</th>
                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Grade</th>
                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Status</th>
                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr>
            </thead>

            <tbody class="divide-y divide-slate-200" wire:loading.class="opacity-50">
            @foreach ($players as $player)
                <livewire:player-row :key="$player->id" :$player @deleted="delete({{ $player->id }})" />
            @endforeach
            </tbody>
        </table>
    </div>
</div>

