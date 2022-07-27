<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 bg-white shadow-2xl flex flex-col w-full box-border rounded-2xl bg-gradient-to-br from-slate-200 to-blue-200">
            <h1 class="text-4xl font-bold mb-4">Pilih Ujian</h1>
            <div class="border-b-4 border-slate-600 w-24"></div>
            <div>
                <div class="mb-6 flex flex-col items-center">
                    <h2 class="text-3xl font-semibold mb-1">TKA</h2>
                    <div class="border-b-4 border-slate-600 w-24"></div>
                </div>
                <div class="flex flex-wrap justify-evenly mb-7">
                    <div name="card" data-to="matematika" class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg transition">
                        <div class="flex justify-between">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-divide fa-2xl"></i> 
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold">Saintek</h4>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-center">Matematika</h3>
                    </div>
                    <div name="card" class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                        <div class="flex justify-between" >
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-flask-vial fa-2xl"></i>
                            </div>
                            <div class="bg-gradient-to-r from-[#6F7DFF] to-[#c0c0c3bd] shadow-lg h-8 p-2 flex justify-center items-center rounded-lg">
                                <h4 class="font-semibold">Saintek</h4>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-center">Kimia</h3>
                    </div>
                    <div name="card" class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                        <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                        <i class="fa-solid fa-atom fa-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-center">Fisika</h3>
                    </div>
                    <div name="card" class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                        <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                        <i class="fa-solid fa-dna fa-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-center">Biologi</h3>
                    </div>
                </div>  
                <div>
                    <div class="mb-6 flex flex-col items-center">
                        <h2 class="text-3xl font-semibold mb-1">TPS</h2>
                        <div class="border-b-4 border-slate-600 w-24"></div>
                    </div>
                    <div class="flex flex-wrap justify-evenly">
                        <div class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-brain fa-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-center">Penalaran Umum</h3>
                        </div>
                        <div class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                            <i class="fa-solid fa-flask-vial fa-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-center">Pengetahuan Kuantitatif</h3>
                        </div>
                        <div class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                                <i class="fa-solid fa-book-open fa-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-center">Memahami Bacaan dan Menulis</h3>
                        </div>
                        <div class="w-60 h-60 rounded-[35px] mr-6 p-10 bg-gradient-to-tr from-[#A4DEFF] to-[#0088D4] shadow-lg">
                            <div class="w-12 h-12 flex justify-center items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD] shadow-lg rounded-2xl mb-4">
                            <i class="fa-solid fa-dna fa-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-center">Biologi</h3>
                        </div>
                    </div>
                </div>
            <div>
                <h2>TPS</h2>
                <div>
                    <div>
                        <h3>Penalaran Umum</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="alert" class="hidden">
            <div class="fixed top-0 bottom-0 left-0 right-0 bg-[#4e4e4e46] flex justify-center items-center">
                <div class="w-80 h-60 bg-white rounded-xl p-10 flex flex-col justify-center items-center">
                    <h3 class="text-center text-xl font-bold mb-5">Target Waktu</h3>
                    <div class="flex justify-center items-center mb-3">
                        <label for="">Atur Durasi : </label> <input id="time" type="range" min="60" max="300">
                    </div>
                    <div class="mb-3">
                        <output></output><span> Detik / Soal</span>
                    </div>
                    <div>
                        <button type="button" id="submit" class="bg-blue-100 rounded-lg py-2 px-4">Mulai</button>
                        <button type="button" id="cancel" class="bg-red-100 rounded-lg py-2 px-4">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $("div[name = 'card']").on('click', function(){
            $('#alert').fadeIn();
            var time;
            $('#time').on('input', function(){
                $('output').val(this.value);
                time = this.value;
            });
            $('#submit').on('click', ()=>{
                window.location.assign(`ujian/${this.dataset.to}/${time}`);
            });
        });

        $('#cancel').on('click', ()=>{
            $('#alert').fadeOut();
        });
    </script>
</x-app-layout>