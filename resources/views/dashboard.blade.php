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
        <div class="py-12 lg:px-14 px-2 flex justify-between w-full">
            <div class="w-[350px] bg-[#A4DEFF] h-[350px] rounded-[80px] p-16 bg-gradient-to-bl from-[#A4DEFF] to-[#0088D4] flex flex-col justify-between">
                <div>
                    <h2 class="text-white font-extrabold text-2xl mb-3">Point Kamu</h2>
                    <div class="border-b-4 w-2/5"></div>
                </div>
                <p class="text-center text-white text-4xl font-extrabold ">80</p>
            </div>
            <div class="w-[350px] bg-[#A4DEFF] h-[350px] rounded-[80px] p-16 bg-gradient-to-bl from-[#A4DEFF] to-[#0088D4] flex flex-col justify-between">
                <div>
                    <h2 class="text-white font-extrabold text-2xl mb-3">Jumlah Survei Kamu</h2>
                    <div class="border-b-4 w-2/5"></div>
                </div>
                <p class="text-center text-white text-4xl font-extrabold ">80</p>
            </div>
            <div class="w-[350px] bg-[#A4DEFF] h-[350px] rounded-[80px] p-16 bg-gradient-to-bl from-[#A4DEFF] to-[#0088D4] flex flex-col justify-around">
                <div>
                    <h2 class="text-white font-extrabold text-2xl mb-3">Jumlah Seluruh Responden</h2>
                    <div class="border-b-4 w-2/5"></div>
                </div>
                <p class="text-center text-white text-7xl font-extrabold ">80</p>
            </div>
        </div>
    </div>


</x-app-layout>
