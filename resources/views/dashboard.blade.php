<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('IMS Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4 sm:py-1 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 sm:p-5 text-center text-gray-900 dark:text-gray-100">
                {{ __('INVENTORY MANAGEMENT SYSTEM') }}
            </div>
        </div>
    </div>

    <div class="flex justify-between items-center max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-1 text-center text-gray-900 dark:text-gray-100">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Add Inventory
                </button>
            </div>
        </div>

        <div class="py-4 sm:py-1">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex justify-center items-center">
                <input type="text" placeholder="Search..."
                    class="w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <button
                    class="bg-indigo-600 text-white px-4 py-2 ml-2 rounded-md shadow-sm hover:bg-indigo-700">Search</button>
            </div>
        </div>
    </div>

    <div class="py-4 sm:py-1 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-blue-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <form action="" class="overflow-x-auto">
                {{-- {{$ims}} --}}
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
                        @foreach ($ims as $item)
                        <tr>
                            <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{$item->id}}</td>
                            <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{$item->name}}</td>
                            <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{$item->type}}</td>
                            <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{$item->serial_number}}</td>
                            <td class="px-6 py-4 text-center text-gray-900 dark:text-gray-100">{{$item->status}}</td>
                            <td class="px-6 py-4 text-center">
                                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
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
            </form>
        </div>
    </div>

</x-app-layout>
