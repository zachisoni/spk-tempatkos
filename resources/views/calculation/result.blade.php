<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Result') }}
    </h2>
  </x-slot>

  <p>Hasil Akhir : {{ $first->name }}</p>

</x-app-layout>