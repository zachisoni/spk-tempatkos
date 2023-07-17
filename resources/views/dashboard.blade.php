<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <section class="bg-center bg-no-repeat bg-[url('https://source.unsplash.com/1500x1000?dorm')] bg-gray-700 bg-blend-multiply">
            {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div> --}}

                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Buat keputusan dalam memilih kos - kosan dengan mudah di sini !</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Di sini, kami membantu anda dalam membuat keputusan dalam memilih kos terbaik untuk keperluan Anda dengan metode Simple Additive Weight (SAW) yang kriteria dan sub kriteria yang telah kami buat berdasarkan survei !</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                        <a href="/pengertian" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                            Get started
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                            Learn more
                        </a>  
                </div>
            </div>
        </section>    
    
        <div class="bg-white px-12" id="pengertian">
            <div class="flex pt-20 justify-between flex-wrap">
                <div class="w-8/12 items-center">
                    <h2 class="text-5xl font-extraboldbold pb-10">APA SIH METODE "SIMPLE ADDITIVE WEIGHT" ??</h2>
                    <p class="text-xl text-justify font-semibold">Metode SAW (Simple Additive Weighting) adalah salah satu metode yang digunakan dalam pengambilan keputusan multikriteria. Metode ini digunakan untuk mengevaluasi dan memilih alternatif terbaik dari suatu pilihan berdasarkan serangkaian kriteria yang telah ditetapkan sebelumnya. Metode SAW mengasumsikan bahwa setiap kriteria memiliki tingkat kepentingan yang berbeda-beda, dan bobot untuk setiap kriteria harus ditetapkan terlebih dahulu.</p>
                </div>
                <img src="/img/photo-1.png" width="250pt">
            </div>
        </div>
        
        <div class="bg-center bg-no-repeat bg-scroll bg-[url('https://source.unsplash.com/1500x1500?dorm')] bg-gray-700 bg-blend-multiply pt-16 px-8">
            <div class="flex justify-center gap-8 py-8">
                <div class="flex items-start">
                    <img src="/img/num1.png" width="90px">
                    <p class="text-lg w-80 text-white">Menentukan beberapa alternatif dari kriteria dan sub kriteria yang telah ditentukan</p>
                </div>
                <img src="/img/19781214.jpg" width="300px" class="border-2 rounded-3xl">
            </div>
            <div class="flex justify-center gap-8 py-8">
                <img src="/img/penilaian.png" width="300px">
                <div class="flex items-start">
                    <img src="/img/num2.png" width="90px">
                    <p class="text-lg w-80 text-white">Memberikan penilaian kriteria pada setiap alternatif yang dipilih</p>
                </div>
            </div>
            <div class="flex justify-center gap-8 py-8">
                <div class="flex items-start">
                    <img src="/img/num3.png" width="90px">
                    <p class="text-lg w-80 text-white">Sistem menghitung semua nilai normalisasi dari nilai kriteria yang anda berikan pada setiap alternatif</p>
                </div>
                <img src="/img/normalisasi.png" width="300px">
            </div>
            <div class="flex justify-center gap-8 py-8">
                <img src="/img/perankingan.png" width="300px">
                <div class="flex items-start">
                    <img src="/img/num4.png" width="90px">
                    <p class="text-lg w-80 text-white">Tahap terakhir yaitu menghitung nilai akhir serta perankingan nilai akhir sehingga menghasilkan alternatif terbaik</p>
                </div>
            </div>
            
    
        </div>
    </div>
</x-app-layout>
