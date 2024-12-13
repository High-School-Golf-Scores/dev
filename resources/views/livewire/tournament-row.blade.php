<tr class="text-left text-slate-900">
    <td class="pl-6 py-4 pr-3 font-medium">{{ $tournament->name }}</td>
    <td class="pl-4 py-4 text-left text-slate-500 hidden sm:table-cell">{{ $tournament->type }}</td>
    <td class="pl-4 py-4 text-left text-slate-500 hidden sm:table-cell"><button wire:click {{ $tournament->id }}>Assign Players</button></td>
    <td class="pl-4 py-4 text-left text-slate-500 hidden sm:table-cell"><button wire:click {{ $tournament->id }}>Assign Teams</button></td>
    <td class="pl-4 py-4 text-left text-slate-500 hidden sm:table-cell">{{ $tournament->cards }}</td>

    <td class="pl-4 py-4 text-right pr-6 flex gap-2 justify-end">
        <x-menu>
            <x-menu.button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </x-menu.button>

            <x-menu.items>

                <x-dialog wire:model="showEditDialog">
                    <x-dialog.open>
                        <x-menu.close>
                            <x-menu.item>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                    <path d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                </svg>
                                Edit
                            </x-menu.item>
                        </x-menu.close>
                    </x-dialog.open>


                    <x-dialog.panel>
{{--                        <form wire:submit="save" class="flex flex-col gap-4">--}}
{{--                            <h2 class="text-3xl font-bold mb-1">Edit Your Tournament</h2>--}}

{{--                            <hr class="w-[75%]">--}}

{{--                            <label class="flex flex-col gap-2">--}}
{{--                                Name--}}
{{--                                <input  wire:model="form.name" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">--}}
{{--                                @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                            </label>--}}


{{--                            <x:separator />--}}

{{--                            <div class="relative max-w-64 mt-4 ">--}}
{{--                                <div>{{ $tournament->date }}--}}
{{--                                    <input wire:model="form.date" type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">--}}

{{--                                    @error('form.date')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                                </div> <div>--}}
{{--                                    <input wire:model="form.start_time" type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg ps-10 p-2.5 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="0:00" max="23:00" value="13:00" required />--}}
{{--                                    @error('form.start_time')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="flex flex-col mt-4">--}}
{{--                                <label class="flex flex-col gap-2">--}}
{{--                                    <x:select wire:model="form.course_id" variant="listbox" searchable placeholder="Choose course...">--}}
{{--                                        <x:option value="1">Salina Muni</x:option>--}}
{{--                                        <x:option value="2">Auburn Hills</x:option>--}}
{{--                                        <x:option value="3">Smoky Hills</x:option>--}}
{{--                                        <x:option value="4">Wichita CC</x:option>--}}
{{--                                        <x:option value="5">Smith Center Muni</x:option>--}}
{{--                                        <x:option value="6">Fort Hays</x:option>--}}
{{--                                        <x:option value="7">Pebble Beach</x:option>--}}
{{--                                    </x:select>--}}
{{--                                    @error('form.course_id')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                                </label>--}}
{{--                            </div>--}}


{{--                            <div class="flex flex-col-4 py-4">--}}
{{--                                <div class="mr-4">--}}
{{--                                    <x:radio.group wire:model="form.start_type" label="Start">--}}
{{--                                        <x:radio wire:model.number="start_type_btn" value="1" label="Shotgun" />--}}
{{--                                        <x:radio wire:model.number="start_type_btn" value="2" label="Tee Times" />--}}
{{--                                    </x:radio.group>--}}

{{--                                    @if ($start_type_btn == "1")--}}
{{--                                        <div class="p-4 mt-4 bg-green-100 border border-green-500">--}}
{{--                                            Shotgun Start--}}
{{--                                            <div class="mr-4">--}}
{{--                                                <x:radio.group wire:model="form.starting_hole" label="Start Hole">--}}
{{--                                                    <x:radio value="1" label="Starting on Hole 1" checked />--}}
{{--                                                    <x:radio value="10" label="Starting on Hole 10" />--}}
{{--                                                </x:radio.group>--}}
{{--                                            </div>--}}

{{--                                        </div>--}}
{{--                                    @elseif($start_type_btn == "2")--}}
{{--                                        <div class="p-4 mt-4 bg-red-400 border border-red-500">--}}
{{--                                            Tee Times--}}
{{--                                            <div class="mr-4">--}}
{{--                                                <x:radio.group wire:model="form.starting_hole" label="Start Hole">--}}
{{--                                                    <x:radio value="1" label="Starting on Hole 1" checked />--}}
{{--                                                    <x:radio value="10" label="Starting on Hole 10" />--}}
{{--                                                </x:radio.group>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="mr-8">--}}
{{--                                    <x:radio.group wire:model="form.tie_breaker" label="Tie Breaker">--}}
{{--                                        <x:radio value="1" label="USGA" checked />--}}
{{--                                        <x:radio value="2" label="HC Holes" />--}}
{{--                                    </x:radio.group>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <x:radio.group wire:model="form.rounds" label="Rounds">--}}
{{--                                        <x:radio value="1" label="1" checked />--}}
{{--                                        <x:radio value="2" label="2" />--}}
{{--                                        <x:radio value="3" label="3" />--}}
{{--                                        <x:radio value="4" label="4" />--}}
{{--                                    </x:radio.group>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <x:separator />--}}
{{--                            <div class="mt-4">--}}
{{--                                <label class="flex flex-col gap-2">--}}
{{--                                    <x:select wire:model="form.start_interval" variant="combobox" placeholder="Time Between Groups - Minutes">--}}
{{--                                        <x:option>8</x:option>--}}
{{--                                        <x:option>9</x:option>--}}
{{--                                        <x:option>10</x:option>--}}
{{--                                        <x:option>11</x:option>--}}
{{--                                        <x:option>12</x:option>--}}
{{--                                        <x:option>13</x:option>--}}
{{--                                        <x:option>14</x:option>--}}
{{--                                        <x:option>15</x:option>--}}
{{--                                    </x:select>--}}
{{--                                    @error('form.start_interval')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                                </label>--}}
{{--                            </div>--}}





{{--                            <label class="flex flex-col gap-2">--}}
{{--                                <x:select wire:model="form.type" variant="combobox" placeholder="Choose tournament type...">--}}
{{--                                    <x:option value="1">18 Hole Varsity</x:option>--}}
{{--                                    <x:option value="2">9 Hole Varsity</x:option>--}}
{{--                                    <x:option value="3">18 Hole JV</x:option>--}}
{{--                                    <x:option value="4">9 Hole JV</x:option>--}}
{{--                                    <x:option value="5">Practice</x:option>--}}
{{--                                    <x:option value="6">Match Play</x:option>--}}
{{--                                    <x:option value="7">Other</x:option>--}}
{{--                                </x:select>--}}
{{--                                @error('form.type')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                            </label>--}}

{{--                            <label class="flex flex-col gap-2">--}}
{{--                                <x:select wire:model="form.cards" variant="combobox" placeholder="Number of Score Cards (Groups)...">--}}
{{--                                    <x:option value="5">5</x:option>--}}
{{--                                    <x:option value="10">10</x:option>--}}
{{--                                    <x:option value="15">15</x:option>--}}
{{--                                    <x:option value="20">20</x:option>--}}
{{--                                    <x:option value="25">25</x:option>--}}
{{--                                    <x:option value="30">30</x:option>--}}
{{--                                    <x:option value="40">40</x:option>--}}
{{--                                </x:select>--}}
{{--                                @error('form.cards')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                            </label>--}}


{{--                            <div class="flex flex-col-4 py-4">--}}
{{--                                <div class="mr-8">--}}
{{--                                    <x:radio.group wire:model="form.format" label="Format">--}}
{{--                                        <x:radio value="1" label="Stroke Play" checked />--}}
{{--                                        <x:radio value="2" label="Scramble" />--}}
{{--                                        <x:radio value="3" label="Match Play" />--}}
{{--                                    </x:radio.group>--}}
{{--                                </div>--}}
{{--                                <div class="mr-8">--}}
{{--                                    <x:radio.group wire:model="form.levels" label="Level">--}}
{{--                                        <x:radio value="1" label="Varsity" checked />--}}
{{--                                        <x:radio value="2" label="JV" />--}}

{{--                                    </x:radio.group>--}}
{{--                                </div>--}}

{{--                                <div class="mr-8">--}}
{{--                                    <x:radio.group wire:model="form.tees" label="Tees">--}}
{{--                                        <x:radio value="1" label="Front" checked />--}}
{{--                                        <x:radio value="2" label="Middle" />--}}
{{--                                        <x:radio value="3" label="Back" />--}}
{{--                                    </x:radio.group>--}}
{{--                                </div>--}}

{{--                                <div class="mr-8">--}}
{{--                                    <x:radio.group wire:model="form.flights" label="Flights">--}}
{{--                                        <x:radio value="1" label="1" checked />--}}
{{--                                        <x:radio value="2" label="2" />--}}
{{--                                        <x:radio value="3" label="3" />--}}
{{--                                        <x:radio value="4" label="4" />--}}
{{--                                    </x:radio.group>--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <label class="flex flex-col gap-2">--}}
{{--                                Rules--}}
{{--                                <input  wire:model="form.rules" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" placeholder="Play ball down, OB white stakes...">--}}
{{--                                @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                            </label>--}}

{{--                            <label class="flex flex-col gap-2">--}}
{{--                                Alerts--}}
{{--                                <input  wire:model="form.alert" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" placeholder="Weather Questionable, stay alert...">--}}
{{--                                @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                            </label>--}}

{{--                            <label class="flex flex-col gap-2">--}}
{{--                                Tournament Sponsor--}}
{{--                                <input  wire:model="form.sponsor" class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed" placeholder="Wichita Golf Shop.">--}}
{{--                                @error('form.name')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}
{{--                            </label>--}}

{{--                            <input  wire:model="form.coach_id" value="{{ $user->id }}" name="coach_id">--}}
{{--                            @error('form.coach_id')<div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror--}}


{{--                            <x-dialog.footer>--}}
{{--                                <x-dialog.close>--}}
{{--                                    <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>--}}
{{--                                </x-dialog.close>--}}

{{--                                <button type="submit" class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Save</button>--}}
{{--                            </x-dialog.footer>--}}
{{--                        </form>--}}
                    </x-dialog.panel>
                </x-dialog>

                <x-dialog>
                    <x-dialog.open>
                        <x-menu.item>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z" clip-rule="evenodd" />
                            </svg>

                            Delete
                        </x-menu.item>
                    </x-dialog.open>

                    <x-dialog.panel>
                        <div class="flex flex-col gap-6" x-data="{ confirmation: '' }">
                            <h2 class="font-semibold text-3xl">Are you sure you?</h2>
                            <h2 class="text-lg text-slate-700">This operation is permanant and can be reversed. This post will be deleted forever.</h2>

                            <label class="flex flex-col gap-2">
                                Type "CONFIRM"
                                <input x-model="confirmation" class="px-3 py-2 border border-slate-300 rounded-lg" placeholder="CONFIRM">
                            </label>

                            <x-dialog.footer>
                                <x-dialog.close>
                                    <button type="button" class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">Cancel</button>
                                </x-dialog.close>

                                <x-dialog.close>
                                    <button :disabled="confirmation !== 'CONFIRM'" wire:click="$dispatch('deleted')" type="button" class="text-center rounded-xl bg-red-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">Delete</button>
                                </x-dialog.close>
                            </x-dialog.footer>
                        </div>
                    </x-dialog.panel>
                </x-dialog>
            </x-menu.items>
        </x-menu>
    </td>
</tr>
