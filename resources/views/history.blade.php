<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('History') }}
        </h2>
    </x-slot>
    <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            08-12-2023
                        {{-- <p class="mt-1 text-sm font-normal text-green-500">Benefit</p> --}}
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-4">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alternatives
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Value
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rank
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                                1
                            </th>
                            <td class="px-6 py-4">
                                A1
                            </td>
                            <td class="px-6 py-4">
                                8
                            </td>
                            <td class="px-6 py-4">
                                1
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                                2
                            </th>
                            <td class="px-6 py-4">
                                A2
                            </td>
                            <td class="px-6 py-4">
                                7
                            </td>
                            <td class="px-6 py-4">
                                2
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>