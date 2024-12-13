<div>
    <form wire:submit.prevent="saveHoles">
        <table class="table-auto">
            <thead>
            <tr>
                <th>Hole #</th>
                <th>Par</th>
                <th>Distance (Red)</th>
                <th>Distance (White)</th>
                <th>Distance (Blue)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($holes as $index => $hole)
                <tr>
                    <td>{{ $hole['hole_number'] }}</td>
                    <td>
                        <input type="number" wire:model.defer="holes.{{ $index }}.par" class="border rounded w-full">
                    </td>
                    <td>
                        <input type="number" wire:model.defer="holes.{{ $index }}.distance_red" class="border rounded w-full">
                    </td>
                    <td>
                        <input type="number" wire:model.defer="holes.{{ $index }}.distance_white" class="border rounded w-full">
                    </td>
                    <td>
                        <input type="number" wire:model.defer="holes.{{ $index }}.distance_blue" class="border rounded w-full">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4">Save</button>
    </form>    @if (session()->has('message'))        <div class=\"mt-4" >           {{ session('message') }}       </div>   @endif
