<x-app-layout>
    {{-- <x-slot name="header">
        @include('components.header')
    </x-slot> --}}

    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>


    <div class="w-full lg:px-20 px-2">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-12 lg:px-10 px-2 shadow-2xl flex flex-col w-full box-border rounded-2xl">
            <div class="flex justify-around md:justify-around flex-wrap w-full">
                <div class=" mb-4 w-[240px] md:w-[360px] bg-[#A4DEFF] h-[240px] md:h-[360px] rounded-[40px] lg:rounded-[80px] p-6 pb-16 lg:py-16 lg:px-16 bg-gradient-to-bl from-[#A4DEFF] to-[#0088D4] flex flex-col justify-between">
                    <div>
                        <h2 class="text-slate-200 font-extrabold text-lg md:text-2xl mb-3">Point Kamu</h2>
                        <div class="border-b-4 w-2/5"></div>
                    </div>
                    <p class="text-center text-white text-5xl md:text-7xl font-extrabold ">{{ $point }}</p>
                    <p class="text-center">
                        <a href="" class="underline text-white text-base md:text-lg ">Tukar Point</a>
                    </p>
                </div>
                <div class=" mb-4 w-[240px] md:w-[360px] bg-[#A4DEFF] h-[240px] md:h-[360px] rounded-[40px] lg:rounded-[80px] p-6 pb-16 lg:py-16 lg:px-16 bg-gradient-to-bl from-[#A4DEFF] to-[#0088D4] flex flex-col justify-between">
                    <div>
                        <h2 class="text-white font-extrabold text-lg md:text-2xl mb-3">Jumlah Soal Kamu</h2>
                        <div class="border-b-4 w-2/5"></div>
                    </div>
                    <p class="text-center text-white text-5xl md:text-7xl font-extrabold ">{{ $jumlah }}</p>
                    <p class="text-center">
                        <a href="{{ route('soal') }}" class="underline text-white text-base md:text-lg ">Lihat Detail</a>
                    </p>
                </div>
                <div class=" mb-4 w-[240px] md:w-[360px] bg-[#A4DEFF] h-[240px] md:h-[360px] rounded-[40px] lg:rounded-[80px] p-6 pb-16 lg:py-16 lg:px-16 bg-gradient-to-bl from-[#A4DEFF] to-[#0088D4] flex flex-col justify-between">
                    <div>
                        <h2 class="text-white font-extrabold text-lg md:text-2xl mb-3">Nilai Terbaik</h2>
                        <div class="border-b-4 w-2/5"></div>
                    </div>
                    <p class="text-center text-white text-5xl md:text-7xl font-extrabold ">{{ $best_grade->grade * 10 }}</p>
                    <p class="text-center">
                        <a href="{{ route('history') }}" class="underline text-white text-base md:text-lg ">Lihat Detail</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
