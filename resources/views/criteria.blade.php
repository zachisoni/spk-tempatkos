<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criteria List') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
        {{-- table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                        Jarak (C1)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < 400 m
                        </td>
                        <td class="px-6 py-4">
                            30%
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            2
                        </th>
                        <td class="px-6 py-4">
                            401 m - 800 m
                        </td>
                        <td class="px-6 py-4">
                            30%
                        </td>
                        <td class="px-6 py-4">
                            4
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            3
                        </th>
                        <td class="px-6 py-4">
                            1200 m - 1600 m
                        </td>
                        <td class="px-6 py-4">
                            30%
                        </td>
                        <td class="px-6 py-4">
                            3
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            4
                        </th>
                        <td class="px-6 py-4">
                            1601 m - 2000 m
                        </td>
                        <td class="px-6 py-4">
                            30%
                        </td>
                        <td class="px-6 py-4">
                            2
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            5
                        </th>
                        <td class="px-6 py-4">
                            > 2 km
                        </td>
                        <td class="px-6 py-4">
                            30%
                        </td>
                        <td class="px-6 py-4">
                            2
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                        Biaya (C2)
                    <p class="mt-1 text-sm font-normal text-red-500">Cost</p>
                </caption>
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            < Rp 500.000,00
                        </td>
                        <td class="px-6 py-4">
                            25%
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>

                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Rp 501.000 - Rp 800.000
                        </td>
                        <td class="px-6 py-4">
                            25%
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>

                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Rp 801.000 - Rp 1.000.000
                        </td>
                        <td class="px-6 py-4">
                            25%
                        </td>
                        <td class="px-6 py-4">
                            3
                        </td>

                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            4
                        </th>
                        <td class="px-6 py-4">
                            Rp 1.001.000 - Rp 1.200.000
                        </td>
                        <td class="px-6 py-4">
                            25%
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>

                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            5
                        </th>
                        <td class="px-6 py-4">
                            > Rp 1.200.000
                        </td>
                        <td class="px-6 py-4">
                            25%
                        </td>
                        <td class="px-6 py-4">
                            1
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                        Fasilitas (C3)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Sangat lengkap
                        </td>
                        <td class="px-6 py-4">
                            20%
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>

                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Cukup Lengkap
                        </td>
                        <td class="px-6 py-4">
                            20%
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Lengkap
                        </td>
                        <td class="px-6 py-4">
                            20%
                        </td>
                        <td class="px-6 py-4">
                            3
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            4
                        </th>
                        <td class="px-6 py-4">
                            Kurang Lengkap
                        </td>
                        <td class="px-6 py-4">
                            20%
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            5
                        </th>
                        <td class="px-6 py-4">
                            Tidak Lengkap
                        </td>
                        <td class="px-6 py-4">
                            20%
                        </td>
                        <td class="px-6 py-4">
                            1
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                        Akses (C4)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Sangat Mudah
                        </td>
                        <td class="px-6 py-4">
                            15%
                        </td>
                        <td class="px-6 py-4">
                            5
                        </td>

                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Cukup Mudah
                        </td>
                        <td class="px-6 py-4">
                            15%
                        </td>
                        <td class="px-6 py-4">
                            4
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Mudah
                        </td>
                        <td class="px-6 py-4">
                            15%
                        </td>
                        <td class="px-6 py-4">
                            3
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            4
                        </th>
                        <td class="px-6 py-4">
                            Cukup Sulit
                        </td>
                        <td class="px-6 py-4">
                            15%
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            5
                        </th>
                        <td class="px-6 py-4">
                            Sulit
                        </td>
                        <td class="px-6 py-4">
                            15%
                        </td>
                        <td class="px-6 py-4">
                            1
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-12 mb-5">
            <table class="w-full text-sm text-left text-gray-400">
                <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                        Keamanan (C5)
                    <p class="mt-1 text-sm font-normal text-green-500">Benefit</p>
                </caption>
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            1
                        </th>
                        <td class="px-6 py-4">
                            Sangat Aman
                        </td>
                        <td class="px-6 py-4">
                            10%
                        </td>
                        <td class="px-6 py-4">
                            5
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            2
                        </th>
                        <td class="px-6 py-4">
                            Cukup Aman
                        </td>
                        <td class="px-6 py-4">
                            10%
                        </td>
                        <td class="px-6 py-4">
                            4
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            3
                        </th>
                        <td class="px-6 py-4">
                            Aman
                        </td>
                        <td class="px-6 py-4">
                            10%
                        </td>
                        <td class="px-6 py-4">
                            3
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            4
                        </th>
                        <td class="px-6 py-4">
                            Kurang Aman
                        </td>
                        <td class="px-6 py-4">
                            10%
                        </td>
                        <td class="px-6 py-4">
                            2
                    </td>
                    </tr>
                    <tr class="border-b bg-gray-800 border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                            5
                        </th>
                        <td class="px-6 py-4">
                            Tidak Aman
                        </td>
                        <td class="px-6 py-4">
                            10%
                        </td>
                        <td class="px-6 py-4">
                            1
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
