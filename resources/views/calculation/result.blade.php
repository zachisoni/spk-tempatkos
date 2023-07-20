<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Result') }}
    </h2>
  </x-slot>

  <p>Hasil Akhir : </p>
  <table>
    <thead>
      <tr>
        <th>Ranking</th>
        <th>Nama</th>
        <th>Nilai</th>
      </tr>
    </thead>
    <p hidden>{{ $i = 1}}</p>
    @foreach ($results as $key => $result)
    <tr>
      <td>{{ $i }}</td>
      <td>{{ $names[$result] }}</td>
      <td>{{ $key }}
    </tr>  
    <p hidden>{{ $i++ }}</p>
    @endforeach
  </table>

</x-app-layout>