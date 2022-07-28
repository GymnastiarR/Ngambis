<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 shadow-2xl bg-white flex flex-col w-full box-border rounded-2xl">
            <div class="flex justify-between">
                <div>
                    <h2 class="text-3xl font-bold mb-5">Soal Kamu</h2>
                    <div class="border-b-2 w-full mb-5 border-black"></div>
                </div>
                <div class="flex items-center">
                    <a href="soal/create" class="bg-blue-400 rounded-xl w-24 h-10 flex justify-center items-center">Buat Soal</a>
                </div>
            </div>
            @foreach ($questions as $question)
            <div>
                <div class="mb-6 flex">
                    <div class="w-12 box-border">
                        <p>{{ $loop->iteration }}.</p>
                    </div>
                    <div class="">
                        {!! $question->body !!}
                    </div>
                </div>
                <hr class="mb-4 w-full">
            </div>
            @endforeach
            <div>
                {{ $questions->links() }}
            </div>
        </div>
    </div>
</x-app-layout>