<x-app-layout>
    <script src="/js/jquery.js"></script>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>

    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="flex bg-white shadow-2xl w-full px-4 md:px-8 py-10 rounded-lg my-5">
            <div class="w-full md:w-4/5 md:px-8">
                <form action="{{ route('ujian.nilai') }}" method="POST">
                    @csrf
                    <ul class="justify-evenly flex-wrap w-full">
                        @foreach ($questions as $question)
                            <li class="py-2 flex border-b-2 mb-4" id="{{ $question->id }}">
                                <div class="md:text-lg">
                                    <p class="inline-block w-10">
                                        {{ $loop->iteration }}.
                                    </p>
                                </div>
                                <div>
                                    <div class="mb-4 text-sm md:text-lg">
                                        {!! $question->body !!}
                                    </div>
                                    <div >
                                        @foreach ($question->options as $option)
                                        <input class="mr-3" type="radio" name="{{ $question->id }}" id="{{ $option->id }}" value="{{ $option->id }}"><label for="">a. {!! $option->body !!}</label>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div>
                        <button class="bg-blue-200 py-2 px-3 text-base md:py-4 md:px-5 rounded-3xl md:text-lg font-semibold">Kirim Jawaban</button>
                    </div>
                </form>
            </div>

            <div id="status" class="w-1/5 sticky top-0 max-h-fit hidden">
                <div class="my-3 py-3 px-2 bg-whiteflex flex-col w-full box-border rounded-full justify-center bg-blue-200 flex sticky top-10">
                    <span>Time</span><p id="time" class="text-2xl">{{ $coutdown }}</p>
                </div>
                <div class="bg-white w-full p-7 mb-5 shadow-lg sticky top-40">
                    <ul class="flex justify-evenly flex-wrap w-full">
                        @foreach ($questions as $question)
                            <li name="{{ $question->id }}" class="w-[40px] h-[40px] text-center py-2 bg-gray-300 mb-3" ><a href="#{{ $question->id }}">{{ $loop->iteration }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
        if($(window).width() > '720'){
            $("#status").show();
        }

        $(window).on('resize', () => {
            if($(window).width() < '720'){
                $("#status").hide();
            }
            else{
                $("#status").show();
            }
        });

        setInterval(() => {
            let time = $('#time').html();
            time = time.split(':');
            var minutes = 0;
            if(time.length > 0){
                minutes = (parseInt(time[0]) * 60);
            }
            let temp = minutes + parseInt(time[1]); 
            if(temp == 0){
                window.location.assign("/");
            }
            temp = temp - 1;
            
            minutes = Math.floor(temp / 60);
            let seconds = temp % 60;
            if(seconds < 10){
                seconds = '0' + seconds;
            }
            if(minutes < 10){
                minutes = '0' + minutes;
            }


            $('#time').html(`${minutes}:${seconds}`);
        }, 1000);

        $('input[type="radio"]').on('input', (e)=>{

            let id = e.target.getAttribute('name')
            // console.log(e.target.getAttribute('name'));
            // console.log($(`li[name = '${id}']`));
            $(`li[name = '${id}']`).removeClass('bg-gray-300');
            $(`li[name = '${id}']`).addClass('bg-blue-200');
        });
    </script>
</x-app-layout>
