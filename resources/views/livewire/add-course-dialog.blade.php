<div>
    <x-dialog wire:model="show">
        <x-dialog.open>
            <button type="button" class="text-white bg-blue-500 rounded-xl px-4 py-2 text-sm">New Course
            </button>
        </x-dialog.open>

        <x-dialog.panel>
            <form wire:submit="add" class="flex flex-col gap-4">
                <h2 class="text-3xl font-bold mb-1">Add New Course to the Database!</h2>
                <p class="font-bold mb-1">If possible try to fill out all fields for all tee boxes!</p>
                <p class="font-bold mb-1">Course Rating will be used in team rankings, try to be as accurate as possible! If no ranking is given tournament will not count towards rankings. </p>

                <hr class="w-[75%]">

                <label class="flex flex-col gap-2">
                    <div class="text-center min-w-full bg-blue-500 text-white text-2xl align-middle">Course Name</div>
                    <input autofocus wire:model="form.name" placeholder="Course Name" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" required>
                    @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>
                <div class="flex gap-3">
                    <label class="flex flex-col gap-2">
                        Par
                        <input autofocus wire:model="form.par" placeholder="par" class="max-w-16 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" required>
                        @error('form.par')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Slope
                        <input autofocus wire:model="form.slope" placeholder="slope" class="max-w-16 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" required>
                        @error('form.slope')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>
                </div>
                <div class="text-center min-w-full bg-blue-500 text-white text-2xl align-middle">Ratings - used for regional seeding</div>
                <div class="flex gap-3">
                    <label class="flex flex-col gap-2">
                       Front Tee
                        <input autofocus wire:model="form.front_tee_rating" placeholder="front tee rating" class="max-w-40 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.front_tee_rating')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Middle Tee
                        <input autofocus wire:model="form.middle_tee_rating" placeholder="middle tee rating" class="max-w-40 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.middle_tee_rating')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Back Tee
                        <input autofocus wire:model="form.back_tee_rating" placeholder="back tee rating" class="max-w-40 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.back_tee_rating')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>
                </div>
                <div class="text-center min-w-full bg-red-500 text-white text-2xl align-middle">Total Course Yardage</div>
                <div class="flex gap-3">
                    <label class="flex flex-col gap-2">
                        Front Tee Yardage
                        <input autofocus wire:model="form.front_tee_yardage" placeholder="front tee" class="max-w-40 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.front_tee_yardage')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Middle Tee Yardage
                        <input autofocus wire:model="form.middle_tee_yardage" placeholder="middle tee" class="max-w-40 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.middle_tee_yardage')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Back Tee Yarage
                        <input autofocus wire:model="form.back_tee_yardage" placeholder="back tee" class="max-w-40 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                        @error('form.back_tee_yardage')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>
                </div>


                <x-dialog.footer>
                    <x-dialog.close>
                        <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                    </x-dialog.close>

                    <button type="submit" class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Save</button>
                </x-dialog.footer>
            </form>
        </x-dialog.panel>
    </x-dialog>
</div>
