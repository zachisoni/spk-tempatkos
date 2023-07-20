<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SAW Method') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-center bg-scroll bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-white font-black text-2xl pb-5">Please insert your Alternative and Value</h1>
            {{-- @if () --}}
            {{-- @foreach ($collection as $item) --}}
            <a id="btn-add" onclick="addAlt()"
                class="bg-green-500 hover:bg-green-700 rounded-md p-3 text-md font-black flex justify-center mt-3 mb-3 mx-96">
                Add alternative
            </a>
            <div class="bg-gray-600 border-0 rounded-md flex justify-between">
                <p class="font-bold text-lg pr-4 pl-10 py-3 text-white">Kos 1</p>             
                
                <!-- Modal toggle -->
                <div class="flex items-center gap-4">
                    <a href=""><img src="/img/icons8-delete-48.png" width="30px"></a>
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-4" type="button">
                        Input Value
                    </button>
                </div>
                <!-- Main modal -->
                <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 w-8/12">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Please Input Value for Kos 1
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <div class="flex justify-between">
                                    <h4 class="leading-relaxed text-white pb-3 items-center text-lg">
                                        Jarak (C1)
                                    </h4>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 p-2">
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                    </select>
                                </div>
                                <div class="flex justify-between">
                                    <h4 class="leading-relaxed text-white pb-3 items-center text-lg">
                                        Biaya (C2)
                                    </h4>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 p-2">
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                    </select>
                                </div>
                                <div class="flex justify-between">
                                    <h4 class="leading-relaxed text-white pb-3 items-center text-lg">
                                        Fasilitas (C3)
                                    </h4>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 p-2">
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                    </select>
                                </div>
                                <div class="flex justify-between">
                                    <h4 class="leading-relaxed text-white pb-3 items-center text-lg">
                                        Akses (C4)
                                    </h4>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 p-2">
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                    </select>
                                </div>
                                <div class="flex justify-between">
                                    <h4 class="leading-relaxed text-white pb-3 items-center text-lg">
                                        Keamanan (C5)
                                    </h4>
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 p-2">
                                    <option>5</option>
                                    <option>4</option>
                                    <option>3</option>
                                    <option>2</option>
                                    <option>1</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            {{-- @endif --}}
        </div>
        
    </div>
</x-app-layout>