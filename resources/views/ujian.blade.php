<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>

    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 bg-white shadow-2xl flex flex-col w-full box-border">
            <p id="time">05:10</p>
        </div>
    </div>
    <script src="/js/jquery.js"></script>
    <script>
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

            // time = time.split(':');
            // if(time[1] == '00'){
            //     time[0] = time[0] - 1;
            //     time[1] = '59';
            // }
            // else{
            //     time[1] = time[1] - 1;
            //     if(time[1].split().length == 1){
            //         time[1] = '0' + time[1];
            //     }
            // }
            // time = time.join(':');
            // console.log(time);
            // $('#time').html(time);
            // console.log("Here");
        }, 1000);
    </script>
</x-app-layout>
