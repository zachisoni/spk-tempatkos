<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('History') }}
        </h2>
    </x-slot>
    
    <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- table --}}
            @foreach ($histories as $history)
            @php($i = 1)
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6">
                <table class="w-full text-sm text-left text-gray-400">
                    <caption class="p-5 text-lg font-semibold text-left text-white bg-gray-800 d-flex justify-between w-100">
                            {{ $history->created_at }}
                            <a href="/history/{{ $history->id }}" class="bg-blue-700 ml-4 p-3 rounded-md hover:bg-blue-800">Detail</a>
                    </caption>
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-4">
                                Rank
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alternatives
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Value
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($history->calculation as $calculation)
                        <tr class="border-b bg-gray-800 border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                                {{ $i }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $calculation->alternative->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $calculation->value }}
                            </td>
                        </tr>
                        @php($i++)
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endforeach
            

            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>