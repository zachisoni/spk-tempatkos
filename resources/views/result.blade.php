<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Result') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Value 
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3" >
                                <span class="sr-only">Alternatif</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C3
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C4
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C5
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4 ">
                                A1
                            </th>
                            <th class="px-6 py-4 ">
                                4
                            </th>
                            <td class="px-6 py-4">
                                4
                            </td>
                            <td class="px-6 py-4">
                                5
                            </td>
                            <td class="px-6 py-4">
                                6
                            </td>
                            <td class="px-2 py-4">
                                4
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4">
                                A2
                            </th>
                            <th class="px-6 py-4">
                                1
                            </th>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                8
                            </td>
                            <td class="px-6 py-4">
                                4
                            </td>
                            <td class="px-2 py-4">
                                5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Normalization
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3" >
                                <span class="sr-only">Alternatif</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C1
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C2
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C3
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C4
                            </th>
                            <th scope="col" class="px-6 py-3">
                                C5
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4 ">
                                A1
                            </th>
                            <th class="px-6 py-4 ">
                                4
                            </th>
                            <td class="px-6 py-4">
                                4
                            </td>
                            <td class="px-6 py-4">
                                5
                            </td>
                            <td class="px-6 py-4">
                                6
                            </td>
                            <td class="px-2 py-4">
                                4
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4">
                                A2
                            </th>
                            <th class="px-6 py-4">
                                1
                            </th>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                8
                            </td>
                            <td class="px-6 py-4">
                                4
                            </td>
                            <td class="px-2 py-4">
                                5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Ranking
                    </caption>
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3" >
                                <span class="sr-only">Alternatif</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Formula
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Result
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rank
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4 ">
                                A1
                            </th>
                            <th class="px-6 py-4 ">
                                rumus
                            </th>
                            <td class="px-6 py-4">
                                4
                            </td>
                            <td class="px-6 py-4">
                                5
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-4">
                                A2
                            </th>
                            <th class="px-6 py-4">
                                rumus
                            </th>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
                                8
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
