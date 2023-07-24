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
                <table class="w-full text-sm text-left text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                            Value 
                    </caption>
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                        @foreach ($names as $key => $name)
                        <tr class= border-b bg-gray-800 border-gray-700">
                            <th class="px-6 py-4 ">
                                {{ $name }}
                            </th>
                            <th class="px-6 py-4 ">
                                {{ $transposed[0][$key] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $transposed[1][$key] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $transposed[2][$key] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $transposed[3][$key] }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $transposed[4][$key] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                <table class="w-full text-sm text-left text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                            Normalization
                    </caption>
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                        @foreach ($normalization as $key => $normal)
                        <tr class= border-b bg-gray-800 border-gray-700">
                            <th class="px-6 py-4 ">
                                {{ $names[$key] }}
                            </th>
                            <th class="px-6 py-4 ">
                                {{ $normal[0] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $normal[1] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $normal[2] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $normal[3] }}
                            </td>
                            <td class="px-2 py-4">
                                {{ $normal[4] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
                <table class="w-full text-sm text-left text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800">
                            Ranking
                    </caption>
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
                        @php($rank = 1)
                        @foreach ($results as $key => $result)
                        <tr class= border-b bg-gray-800 border-gray-700">
                            <th class="px-6 py-4">
                                {{ $names[$result] }}
                            </th>
                            <th class="px-6 py-4">
                                (c1*w1) + (c2*w2) + (c3*w3) + (c4*w4) + (c5*w5)
                            </th>
                            <td class="px-6 py-4">
                                {{  $key }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $rank }}
                            </td>
                            @php($rank ++)
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- <div class= overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
