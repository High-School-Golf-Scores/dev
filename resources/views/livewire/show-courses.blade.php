<div>
    <div class="flex flex-col gap-8 w-[75rem] px-8">
        <div class="flex justify-between">
            <h1 class="text-3xl font-semibold leading-6 text-slate-900">Golf Course Listing</h1>

            <livewire:add-course-dialog @added="$refresh" />
        </div>

{{--   {{ $courses }}--}}

        <table class="min-w-full divide-y divide-slate-300 bg-white shadow rounded-xl">
            <thead>
            <tr class="text-left text-slate-800">
                <th colspan="3" class="text-center pl-6 w-1/3 rounded-tl-xl py-4 font-semibold bg-slate-50">Name</th>
                <th colspan="3" class=text-center pl-6 w-1/3 rounded-tl-xl py-4 font-semibold bg-slate-50">Yardage</th>
                <th colspan="3" class="text-center pl-6 w-1/3 rounded-tl-xl py-4 font-semibold bg-slate-50">Rating</th>


                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr></thead>
            <thead>
            <tr class="text-left text-slate-800">
                <th colspan="3" class="text-center pl-6 w-1/3 rounded-tl-xl py-4 font-semibold bg-red-400">Red Tees Front</th>
                <th colspan="3" class="text-center pl-6 w-1/3 rounded-tl-xl py-4 font-semibold bg-slate-50">White Tees Middle</th>
                <th colspan="3" class="text-center pl-6 w-1/3 rounded-tl-xl py-4 font-semibold bg-blue-500">Blue Tees Back</th>


                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr></thead>
            <thead>
            <tr class="text-left text-slate-800">
                <th class="text-center pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Name</th>
                <th class="text-center pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Par</th>
                <th class="text-center pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Slope</th>
                <th class="text-center pl-4 py-4 font-semibold bg-red-400 hidden sm:table-cell">Front</th>
                <th class="text-center pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Middle</th>
                <th class="text-center pl-4 py-4 font-semibold bg-blue-500 hidden sm:table-cell">Back</th>
                <th class="text-center pl-4 py-4 font-semibold bg-red-400 hidden sm:table-cell">Front</th>
                <th class="text-center pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Middle</th>
                <th class="text-center pl-4 py-4 font-semibold bg-blue-500 hidden sm:table-cell">Back</th>

                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr>
            </thead>

            <tbody class="divide-y divide-slate-200" wire:loading.class="opacity-50">

            @foreach ($courses as $course)
                <livewire:course-row :key="$course->id" :$course @deleted="delete({{ $course->id }})" />
            @endforeach
            </tbody>
        </table>
    </div>
</div>

