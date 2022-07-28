<div class="md:mb-8 mr-3 md:mr-0">
    <i id="sidemenu-logo" class="fa-solid fa-bars fa-2xl text-white"></i>
</div>
<div class="md:mb-8 mr-3 md:mr-0 text-white {{ (URL::current() == 'http://127.0.0.1:8000/dashboard') ? 'bg-gradient-to-r from-[#111D21] to-[#3546DC] md:w-16 md:h-16 w-10 h-10 rounded-full shadow-2xl flex justify-center items-center' : ''}}">
    <a href="{{ route('dashboard') }}"><i class="fa-solid fa-house fa-2xl"></i></a>
</div>
<div class="md:mb-8 mr-3 md:mr-0 text-white {{ (URL::current() == 'http://127.0.0.1:8000/latihan' || URL::current() == 'http://127.0.0.1:8000/ujian/*') ? 'bg-gradient-to-r from-[#111D21] to-[#3546DC] md:w-16 md:h-16 w-10 h-10 rounded-full shadow-2xl flex justify-center items-center' : ''}}">
    <a href="latihan"><i class="fa-solid fa-swatchbook fa-2xl"></i></a>
</div>
<div class="md:mb-8 mr-3 md:mr-0 text-white {{ (URL::current() == 'http://127.0.0.1:8000/soal') ? 'bg-gradient-to-r from-[#111D21] to-[#3546DC] md:w-16 md:h-16 w-10 h-10 rounded-full shadow-2xl flex justify-center items-center' : ''}}">
    <a href="soal"><i class="fa-solid fa-star-half-stroke fa-2xl"></i></a>
</div>
<script src="http://127.0.0.1:8000/js/jquery.js"></script>
<script>
    if($(window).width() < '720'){
        $("i").removeClass('fa-2xl')
        $("i").addClass('fa-lg')
    }

    $(window).on('resize', () => {
        if($(window).width() < '767'){
            $("i").removeClass('fa-2xl');
            $("i").addClass('fa-lg');
        }
        else{
            $("i").addClass('fa-2xl');
            $("i").removeClass('fa-lg');
        }
    })
</script>