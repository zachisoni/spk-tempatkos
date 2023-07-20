<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Alternatives') }}
    </h2>
  </x-slot>
  <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <a type="button" href="{{ route('alternatives/add') }}"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-md px-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 w-full p-3 m-5 text-center">
        Add Alternative
      </a>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 my-5">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3 w-4">
                  No
              </th>
              <th scope="col" class="px-6 py-3">
                  Alternative
              </th>
              <th scope="col" class="px-6 py-3">
                  Lokasi
              </th>
              <th scope="col" class="px-6 py-3">
                  Biaya
              </th>
              <th scope="col" class="px-6 py-3">
                  Fasilitas
              </th>
              <th scope="col" class="px-6 py-3">
                Akses
              </th>
              <th scope="col" class="px-6 py-3">
                Kemananan
              </th>
            </tr>
          </thead>
          <tbody >
            @foreach ($alternatives as $alternative)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white w-4">
                    {{ $alternative->id; }}
                  </th>
                  <td class="px-6 py-4">{{ $alternative->name }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria1 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria2 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria3 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria4 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria5 }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>