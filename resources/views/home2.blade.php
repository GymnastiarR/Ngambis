<x-guest-layout>
    <header class="flex justify-between px-6 md:px-24 h-[13vh] items-center backdrop-blur-sm bg-gradient-to-tr sticky top-0 from-[#352442] to-[#744444]">
        <ul class="">
            <li class="text-white text-2xl md:text-5xl font-bold ">Ngambis</li>
        </ul>
        <ul class="flex w-1/2 justify-evenly sm:w-2/6 sm:justify-between md:justify-evenly">
            <li class="bg-gradient-to-br shadow-2xl from-[#979797] to-[#00A3FF] py-2 md:py-3 px-4 md:px-10 rounded-3xl md:text-lg text-white font-semibold"><a href="{{ route('login') }}">SignIn</a></li>
            <li class="bg-gradient-to-br shadow-2xl from-[#00A3FF] to-[#979797] py-2 md:py-3 px-4 md:px-10 rounded-3xl md:text-lg text-white font-semibold"><a href="{{ route('register') }}">Register</a></li>
        </ul>
    </header>
    <main class="">

        <section class="flex justify-center w-full items-center h-[60vh] md:h-[87vh] bg-gradient-to-br from-[#352442] to-[#744444] px-2 md:px-12">
            <div class="flex flex-col h-2/4 md:h-4/6 w-full md:w-4/5 justify-evenly items-center px-6 md:px-24 py-8 bg-[rgb(0,0,0,0.4)] rounded-[60px]">
                <h2 class="text-center text-white text-2xl md:3xl lg:text-5xl font-bold tracking-wide leading-tight">Belajar Kapanpun Dimanapun Dengan Soal Tak Terbatas</h2>
                <a href="{{ route('register') }}" class="shadow-2xl rounded-3xl text-base md:text-lg h-12 px-6 bg-gradient-to-r from-[#B84200] to-[#001970] flex justify-center items-center text-white">Datar Sekarang</a>
            </div>
        </section>

        <section class="bg-[#F5F5F5] md:h-[90vh] flex-col justify-around items-center md:py-20 py-6">
            <h2 class="text-center text-xl md:text-5xl font-bold mb-4">Mengapa Harus Mendaftar?</h2>
            <div class="w-full flex flex-col md:flex-row h-full justify-evenly items-center">
                <div class="bg-white border-2 shadow-xl h-64 md:h-3/4 mb-4 w-3/5 md:w-1/3 lg:w-1/4 rounded-[40px] p-7">
                    <div class="text-black">
                        <i class="fa-solid fa-coins fa-xl"></i>
                    </div>
                    <h3 class="text-lg md:text-2xl font-semibold text-center">Berbagi Soal Semua Orang Dan Dapatkan Soal Baru</h3>
                </div>
                <div class="bg-white border-2 shadow-xl h-64 md:h-3/4 mb-4 w-3/5 md:w-1/3 lg:w-1/4 rounded-[40px] p-7">
                    <div class="text-black">
                        <i class="fa-solid fa-coins fa-xl"></i>
                    </div>
                    <h3 class="text-lg md:text-2xl font-semibold text-center">Latihan Ujian Dengan Fleksibilitas Waktu Yang Dapat Ditentukan</h3>
                </div>
                <div class="bg-white border-2 shadow-xl h-64 md:h-3/4 mb-4 w-3/5 md:w-1/3 lg:w-1/4 rounded-[40px] p-7">
                    <div class="text-black">
                        <i class="fa-solid fa-coins fa-xl"></i>
                    </div>
                    <h3 class="text-lg md:text-2xl font-semibold text-center">Dapatkan Keuntungan Dengan Menukar Point Yang Kamu Miliki</h3>
                </div>
            </div>
        </section>
        <section class="flex flex-col justify-center w-full items-center h-[50vh] md:h-[87vh] bg-gradient-to-br from-[#352442] to-[#744444] px-12">
            <h3 class="text-white text-2xl md:text-4xl font-bold mb-7">Apa Itu Ngambis??</h3>
            <p class="text-lg md:text-xl text-white text-center">Ngambis merupakan sebuah platform belajar gratis yang dapat kamu gunakan dimanapun kapanpun dengan soal yang tak terbatas dan latihan ujian yang fleksibel</p>
        </section>

    </main>
    <footer class="h-[10vh] bg-[#1F1F1F] flex justify-center items-center">
        <p class="text-center text-white text-lg">Copyright 2022</p>
    </footer>
</x-guest-layout>