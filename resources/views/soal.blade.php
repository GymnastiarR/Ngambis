<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 shadow-2xl flex flex-col w-full box-border rounded-2xl">
            @foreach ($questions as $question)
            <div>
                <div class="mb-4 flex">
                    <div class="w-12 box-border">
                        <p>{{ $loop->iteration }}.</p>
                    </div>
                    <div class="">
                        {{ $question->body }}
                    </div>
                </div>
                <hr class="mb-3 w-full">
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>