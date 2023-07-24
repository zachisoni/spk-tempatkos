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
            <form action="{{ route('calculation/result') }}" method="post"></form>
            <div class="bg-gray-600 border-0 rounded-md flex justify-between">
                <p class="font-bold text-lg pr-4 pl-10 py-3 text-white">Kos 1</p>             
                
                <!-- Modal toggle -->
                <div class="flex items-center gap-4">
                    <a href=""><img src="/img/icons8-delete-48.png" width="30px"></a>
                    <button data-modal-target="modal[0]" data-modal-toggle="modal[0]" class="block text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800 mr-4" type="button">
                        Input Value
                    </button>
                </div>
                <!-- Main modal -->
                <div id="modal[0]" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow bg-gray-700 w-8/12">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t border-gray-600">
                                <h3 class="text-xl font-semibold text-white">
                                    Please Input Value for Kos 1
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white" data-modal-hide="modal[0]">
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
                            <div class="flex items-center p-6 space-x-2 border-t rounded-b border-gray-600">
                                <button type="button" class="focus:outline-none text-white focus:ring-4  font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 bg-green-600 hover:bg-green-700 focus:ring-green-800">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
            {{-- @endif --}}
            <button href="" class="bg-green-500 hover:bg-green-700 rounded-md p-3 text-md font-black flex justify-center mt-3 mx-96">
                Add alternative
            </button>
        </div>
        
    </div>
</x-app-layout>