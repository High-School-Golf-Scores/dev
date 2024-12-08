<div>
    <x-dialog wire:model="show">
        <x-dialog.open>
            <button type="button" class="text-white bg-blue-500 rounded-xl px-4 py-2 text-sm">New Player</button>
        </x-dialog.open>

        <x-dialog.panel>
            <form wire:submit="add" class="flex flex-col gap-4">
                <h2 class="text-3xl font-bold mb-1">Add New Player to your Roster!</h2>

                <hr class="w-[75%]">

                <label class="flex flex-col gap-2">
                    First Name
                    <input autofocus wire:model="form.first_name" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.first_name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <label class="flex flex-col gap-2">
                    Last Name
                    <input autofocus wire:model="form.last_name" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.last_name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <label class="flex flex-col gap-2">
                    Graduation Year
                    <input autofocus wire:model="form.grad_year" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.grad_year')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>



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
