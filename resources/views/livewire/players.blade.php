<!-- resources/views/players/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Players List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h1 class="text-2xl font-semibold text-gray-700 mb-6">Team Players</h1>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Age
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Grade
                            </th>
                            <!-- Add more columns as needed -->
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($players as $player)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $player->first_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $player->last_name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $player->grad_year }}
                                </td>
                                <!-- Add more cells as needed -->
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="text-indigo-600 hover:text-indigo-900" onclick="openEditModal({{ $player->id }})">Edit</button>
                                    <button class="text-red-600 hover:text-red-900 ml-4" onclick="openDeleteModal({{ $player->id }})">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination, if applicable -->
                    <div class="px-6 py-3">
{{--                        {{ $players->links() }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Editing and Deleting (optional) -->
<!-- Include your modal HTML here -->

<script>
    function openEditModal(playerId) {
        // Your JavaScript to open the edit modal
    }

    function openDeleteModal(playerId) {
        // Your JavaScript to open the delete modal
    }
</script>

</body>
</html>
