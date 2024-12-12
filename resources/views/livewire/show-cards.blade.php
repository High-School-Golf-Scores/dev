<div>
    <div class="flex flex-col gap-8 w-[75rem] px-8">
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold leading-6 text-slate-900">Golf Cards for this Tournament</h1>

            <livewire:add-course-dialog @added="$refresh" />
        </div>

{{--   {{ $courses }}--}}

        <table class="min-w-full divide-y divide-slate-300 bg-white shadow rounded-xl">
            <thead>
            <tr class="text-left text-slate-800">
                <th colspan="3" class="pl-6 w-1/4 rounded-tl-xl py-4 font-semibold bg-slate-50">Card Number</th>
                <th colspan="3" class="pl-6 w-1/4 rounded-tl-xl py-4 font-semibold bg-slate-50">Starting Hole</th>
                <th colspan="3" class="pl-6 w-1/4 rounded-tl-xl py-4 font-semibold bg-slate-50">Tee Time</th>
                <th colspan="3" class="pl-6 w-1/4 rounded-tl-xl py-4 font-semibold bg-slate-50">Comment</th>


                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr></thead>

            <tbody class="divide-y divide-slate-200" wire:loading.class="opacity-50">

            @foreach ($courses as $course)
                <livewire:card-row :key="$card->id" :$card @deleted="delete({{ $card->id }})" />
            @endforeach
            </tbody>
        </table>
    </div>
</div>

