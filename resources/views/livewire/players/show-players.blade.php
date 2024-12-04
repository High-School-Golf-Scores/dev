<div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg lg:w-1/2 sm:w-1">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="ml-2">
                        {{--    <div class="text-center pb-10">--}}
                        {{--        <x-alert />--}}
                        {{--    </div>--}}

                        <div class="grid grid-cols-2 gap-2 mb-10">
                            <div class="relative text-sm text-gray-800">
                                <div class="absolute pl-2 left-0 top-0 bottom-0 flex items-center pointer-events-none text-gray-500">
                                    <x-icon.magnifying-glass />
                                </div>
                                <input wire:model.live="search" type="text" placeholder="Search first or last name" class="block w-full rounded-lg border-0 py-1.5 pl-10 text-gray-900 ring-1 ring-inset ring-gray-200 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        {{--Add Player Button/ Opens Modal--}}
                        <flux:modal.trigger name="addPlayer">
                            <flux:button>Add Player</flux:button>
                        </flux:modal.trigger>



                        {{-- add Player Modal--}}
                        <flux:modal wire:model="showAddPlayerDialog" name="addPlayer" class="md:w-96 space-y-6">
                            <form wire:submit="add">
                                <div>
                                    <flux:heading size="lg">Add Player</flux:heading>
                                    <flux:subheading>Fill out all fields.</flux:subheading>
                                </div>

                                <flux:input autofocus wire:model="form.first_name" label="First Name" placeholder="First Name" />
                                <flux:input wire:model="form.last_name" label="Last Name" placeholder="Last Name" />
                                <flux:input wire:model="form.grad_year" label="Graduation Year" type="grad_year" />
                                <flux:input wire:model="form.active"  type="hidden" value="1" />
                                <flux:input wire:model="form.team_id" type="hidden" value="1"  />
                                <div class="flex">
                                    <flux:spacer />

                                    <flux:button type="submit" variant="primary">Save changes</flux:button>


                                </div>
                            </form>
                        </flux:modal>



                            {{--Table of Players--}}
                        <flux:table>
                            <flux:columns>
                                <flux:column>First Name</flux:column>
                                <flux:column>Last Name</flux:column>
                                <flux:column>Graduation Year</flux:column>
                                <flux:column>Status</flux:column>
                            </flux:columns>
                            @foreach($players as $player)
                                <div wire:key="{{ $player->id}}">
                                    <flux:rows>
                                        <flux:row>
                                            <flux:cell>{{ $player->first_name}}</flux:cell>
                                            <flux:cell>{{ $player->last_name}}</flux:cell>
                                            <flux:cell>{{ $player->grad_year }}</flux:cell>
                                            <flux:cell><flux:badge color="green" size="sm" inset="top bottom">{{ $player->active}}</flux:badge></flux:cell>

                                            {{--Open modal for Editing Players--}}
                                            <flux:cell>
                                                <flux:modal.trigger name="editPlayer">
                                                    <flux:button>Edit Player</flux:button>
                                                </flux:modal.trigger>
                                            </flux:cell>

                                            {{--Edit la--}}
                                                <flux:modal wire:model="showEditPlayerDialog" name="editPlayer" class="md:w-96 space-y-6">
                                                    <form wire:submit="save">
                                                        <div>
                                                            <flux:heading size="lg">Edit Player</flux:heading>
                                                            <flux:subheading>Edit where needed. </flux:subheading>
                                                        </div>
                                                        <flux:input wire:model="form.first_name" label="First Name" placeholder="First Name" value="1" type="string" />
                                                        <flux:input wire:model="form.last_name" label="Last Name" placeholder="Last Name" value="1"  type="string" />
                                                        <flux:input wire:model="form.grad_year" label="Graduation Year" value="1" type="string" />
                                                        <flux:input wire:model="form.active" type="hidden" value="1" />
                                                        <flux:input wire:model="form.school_id" type="hidden" value="1" />
                                                        <div class="flex">
                                                            <flux:spacer />

                                                            <flux:button type="submit" variant="primary">Save changes</flux:button>
                                                        </div>
                                                    </form>
                                                </flux:modal>
                                            <flux:cell>
                                                <button wire:confirm="Are you sure?" wire:click="delete({{$player->id}})" type="button" class="font font-medium text-red-700">Delete</button>
                                            </flux:cell>
                                        </flux:row>
                                    </flux:rows>
                                </div>
                            @endforeach
                        </flux:table>
                        {{--    {{ $players->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

