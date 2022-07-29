<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 shadow-2xl bg-white flex flex-col w-full box-border rounded-2xl min-h-full">
            <h1 class="text-3xl text-bold">Tukar Point Kamu</h1>
            <div class="">
                <div class="mb-8">
                    <div class="mb-7">
                        <h2 class="text-2xl text-center">Jumlah Point Ditukar</h2>
                    </div>
                    <div class="flex flex-wrap justify-evenly">
                        <div class="border-2 py-2 px-4">200 Point = Rp. 10.000</div>
                        <div class="border-2 py-2 px-4">400 Point = Rp. 20.000</div>
                        <div class="border-2 py-2 px-4">1000 Point = Rp. 50.000</div>
                        <div class="border-2 py-2 px-4">2000 Point = Rp. 100.000</div>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="mb-7">
                        <h2 class="text-2xl text-center">Pilih Metode Pembayaran</h2>
                    </div>
                    <div class="flex flex-wrap justify-evenly">
                        <div class="border-2 py-2 px-4">
                            <h2>Gopay</h2>
                        </div>
                        <div class="border-2 py-2 px-4">
                            <h2>OVO</h2>
                        </div>
                        <div class="border-2 py-2 px-4">
                            <h2>Dana</h2>
                        </div>
                        <div class="border-2 py-2 px-4">
                            <h2>BCA</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>