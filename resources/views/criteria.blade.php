<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criteria List') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
        {{-- table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Jarak (C1)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-4">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value check
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < 100m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            101m - 200m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Biaya (C2)
                    <p class="mt-1 text-sm font-normal text-red-500">Cost</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-4">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value check
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < 100m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            101m - 200m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Fasilitas (C3)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-4">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value check
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < 100m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            101m - 200m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Akses (C4)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-4">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value check
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < 100m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            101m - 200m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                        Keamanan (C5)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 w-4">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sub Kriteria
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bobot
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nilai
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Value check
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < 100m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            101m - 200m
                        </td>
                        <td class="px-6 py-4">
                            8
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-2 py-4">
                            <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
