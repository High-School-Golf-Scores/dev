<div>
    <x-dialog wire:model="show">
        <x-dialog.open>
            <button type="button" class="text-white bg-blue-500 rounded-xl px-4 py-2 text-sm">New Card
            </button>
        </x-dialog.open>

        <x-dialog.panel>
            <form wire:submit="add" class="flex flex-col gap-4">
                <h2 class="text-3xl font-bold mb-1">Add New Card to the Tournament!</h2>

                <hr class="w-[75%]">

                <label class="flex flex-col gap-2">
                    <div class="text-center min-w-full bg-blue-500 text-white text-2xl align-middle">Card</div>
                    <input autofocus wire:model="form.starting_hole" placeholder="Course Name" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" required>
                    @error('form.starting_hole')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>
                <div class="flex gap-3">
                    <label class="flex flex-col gap-2">
                        Par
                        <input autofocus wire:model="form.tee_time" placeholder="par" class="max-w-16 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" required>
                        @error('form.tee_time')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2">
                        Slope
                        <input autofocus wire:model="form.comment" placeholder="slope" class="max-w-16 px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" required>
                        @error('form.comment')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
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
