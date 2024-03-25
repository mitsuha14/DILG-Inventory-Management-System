@extends('dashboard')

@section('welcome')
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>

<table class="min-w-full divide-y divide-gray-200 text-xs sm:text-sm md:text-base">
    <thead>
        <tr>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                ID
            </th>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                Name
            </th>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                Type
            </th>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                Serial Number
            </th>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                Status
            </th>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                Edit
            </th>
            <th
                class="px-6 py-4 bg-blue-500 dark:bg-gray-700 text-center font-bold text-white uppercase tracking-wider">
                Delete
            </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
        @foreach ($products as $item)
            <tr>
                <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{ $item->id }}
                </td>
                <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{ $item->name }}
                </td>
                <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{ $item->type }}
                </td>
                <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">
                    {{ $item->serial_number }}</td>
                <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{ $item->status }}
                </td>
                <td class="px-6 py-4 text-center">
                    <button
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </button>
                </td>
                <td class="px-6 py-4 text-center">
                    <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
