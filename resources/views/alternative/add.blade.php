<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Add New Alternative') }}
    </h2>
  </x-slot>
  
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10 bg-gray-800">
    <form action="{{request()->routeIs('alternatives/add') ? route('alternatives/store') : '/alternatives/update/'.$alternative->id}}" method="POST">
      @method('put')
      @csrf
      <input type="number" name="id" id="id" value="{{request()->routeIs('alternatives/edit') ? old('id',$alternative->id) : '' }}" hidden>
      <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dorm Name</label>
        <input type="text" name="name" id="name" value="{{request()->routeIs('alternatives/edit') ? old('name', $alternative->name) : '' }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
      </div>
      <div class="mb-6">
        <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location (1-5)</label>
        <input type="number" name="location" id="location" value="{{request()->routeIs('alternatives/edit') ? old('location', $alternative->criteria1) : '1' }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
          min="1" max="5" required>
      </div>
      <div class="mb-6">
        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price (Rp)</label>
        <input type="number" name="price" id="price" value="{{request()->routeIs('alternatives/edit') ? old('price', $alternative->criteria2) : '400000'}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
          min="0" required>
      </div>
      <div class="mb-6">
        <label for="facility" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facility (1-5)</label>
        <input type="number" name="facility" id="facility" value="{{request()->routeIs('alternatives/edit') ? old('facility', $alternative->criteria3) : '1' }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          min="1" max="5" required>
      </div>
      <div class="mb-6">
        <label for="access" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Access (1-5)</label>
        <input type="number" name="access" id="access" value="{{request()->routeIs('alternatives/edit') ? old('access', $alternative->criteria4) : '1' }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          min="1" max="5" required>
      </div>
      <div class="mb-6">
        <label for="security" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Security (1-5)</label>
        <input type="number" name="security" id="security" value="{{request()->routeIs('alternatives/edit') ? old('security', $alternative->criteria5) : '1'}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          min="1" max="5" required>
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mr-2 mb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
  </div>

</x-app-layout>