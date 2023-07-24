<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Alternatives') }}
    </h2>
  </x-slot>
  <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <a type="button" href="{{ route('alternatives/add') }}"
        class="focus:outline-none text-white focus:ring-4 font-medium rounded-lg text-md px-5 bg-green-600 hover:bg-green-700 focus:ring-green-800 w-full p-3 text-center">
        Add Alternative
      </a>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-400 my-5">
          <thead class="text-xs uppercase bg-gray-700 text-gray-400">
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
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody >
            @foreach ($alternatives as $alternative)
              <tr class="border-b bg-gray-800 border-gray-700">
                <form action="/alternatives/delete/{{ $alternative->id }}" method="post">
                  @csrf
                  <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white w-4">
                    {{ $alternative->id; }}
                  </th>
                  <td class="px-6 py-4">{{ $alternative->name }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria1 }}</td>
                  <td class="px-6 py-4">Rp {{ $alternative->criteria2 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria3 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria4 }}</td>
                  <td class="px-6 py-4">{{ $alternative->criteria5 }}</td>
                  <td class="px-6 py-4">
                    <a href="/alternatives/edit/{{ $alternative->id }}"
                        class="text-blue-500 mx-5">
                      Edit
                    </a>
                    <button type="submit" onclick="return confirm('Are you sure want to delete this alternative?')"
                        class="text-red-500 mx-5">Delete
                    </button>
                  </td>
                </form>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app-layout>