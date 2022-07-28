<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>

        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="flex flex-col bg-white shadow-2xl w-full px-4 md:px-8 py-10 rounded-lg my-5">
            <div class="bg-[#FFFFFF] text-lg font-semibold shadow-xl rounded-xl w-1/4 p-5 mb-5">
                <p>Nilai Kamu : {{ $grade }}</p>
            </div>
            <div class="w-full md:w-4/5 md:px-8">
                <ul class="justify-evenly flex-wrap w-full">
                        @foreach ($questions as $question)
                            <li class="py-2 flex border-b-2 mb-4">
                                <div class="md:text-lg">
                                    <p class="inline-block w-10">
                                        {{ $loop->iteration }}.
                                    </p>
                                </div>
                                <div>
                                    <div class="mb-4 text-sm md:text-lg">
                                        {!! $question->body !!}
                                    </div>
                                    <div>
                                        <div>
                                            <span>Jawaban Benar : </span>{!! $question->options->where('is_true', 1)[0]->body !!}
                                        </div>
                                        <div>
                                            <span>Jawaban Kamu : </span>{!! $your_answare->body !!}
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                </ul>
            </div>
            <div>
                <a href="{{ route('dashboard') }}" class="underline">Kembali Ke Beranda</a> 
            </div>
        </div>
    </div>
    {{-- <div>
        <div>
            <p>Nilai Kamu : {{ $grade * 10 }}</p>
        </div>
        <div>
            @foreach ($questions as $question)
                <div class="mb-3">
                    {!! $question->body !!}
                    <span>Jawaban Benar : </span>{!! $question->options->where('is_true', 1)[0]->body !!}
                    <span>Jawaban Kamu : </span>{!! $your_answare->body !!}
                </div>
            @endforeach
        </div>
    </div> --}}
</x-app-layout>