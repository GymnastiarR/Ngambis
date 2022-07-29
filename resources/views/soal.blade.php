<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 shadow-2xl bg-white flex flex-col w-full box-border rounded-2xl min-h-[70vh]">
            @if (session()->has('update_success'))
            <div id="alert" class="rounded-2xl fixed top-44 bg-slate-500 opacity-40 text-white text-lg left-1/3 right-1/3 py-5">
                <p class="text-center">{{ session('update_success') }}</p>
            </div>
            <script>
                setTimeout(() => {
                    $('#alert').fadeOut();
                }, 2000);
            </script>
            @endif
            @if (session()->has('publish_success'))
            <div id="alert" class="rounded-2xl fixed top-44 bg-slate-500 opacity-40 text-white text-lg left-1/3 right-1/3 py-5">
                <p class="text-center">{{ session('publish_success') }}</p>
            </div>
            <script>
                setTimeout(() => {
                    $('#alert').hide();
                }, 1000);
            </script>
            @endif
            <div class="">

            </div>
            <div class="flex justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-5">Soal Kamu</h2>
                    <div class="border-b-2 w-full mb-5 border-black"></div>
                </div>
                <div class="flex items-center">
                    <a href="soal/create" class="bg-gradient-to-tr from-gray-400 to-blue-400 rounded-full w-28 h-12 flex justify-center items-center shadow-xl font-semibold text-white">Buat Soal</a>
                </div>
            </div>
            @if (!($questions->isEmpty()))
            @foreach ($questions as $question)
            <div class="w-full">
                <div class="flex mb-3">
                    <div class="flex w-11/12 justify-between">
                        <div class="w-12 box-border">
                            <p>{{ $loop->iteration }}.</p>
                        </div>
                        <div class="w-full">
                            {!! $question->body !!}
                        </div>
                    </div>
                    <div class="w-32 h-8 bg-blue-300 flex justify-center items-center rounded-3xl">
                        <p>{{($question->is_published) ? 'Publised' : "Draft"}}</p>
                    </div>
                </div>
                @if (!$question->is_published)                  
                    <div class="flex mb-4">
                        <p class="bg-blue-300 w-24 h-8 flex justify-center items-center rounded-full ml-4"><a href="soal/{{ $question->id }}/edit" class="">Edit</a></p>
                        <form action="soal/{{ $question->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="bg-red-300 w-24 h-8 flex justify-center items-center rounded-full ml-4">Hapus</button>
                        </form>
                    </div>
                @endif
                <hr class="mb-6 w-full">
            </div>
            @endforeach
            <div>
                {{ $questions->links() }}
            </div>
            @else
            <div class="flex items-center h-full w-full justify-center">
                <h2 class="text-center text-xl md:text-3xl text-gray-500 font-bold">Kamu Belum Membuat Soal Satupun. Ayo Buat dan Berbagi Soal Sekarang</h2>
            </div>
            @endif

        </div>
    </div>
</x-app-layout>