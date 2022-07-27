<div class="rounded-full w-full h-16 flex justify-between py-5 px-6 items-center bg-gradient-to-r from-[#6F7DFF] to-[#8186ADBD]">
    <div class="bg-blue-800 h-11 rounded-full flex items-center px-4">
        <h4 class="text-white">Welcome Back {{ Auth::user()->name }}</h4>
    </div>
    <div>
        <div class="">

        </div>
        <div class="bg-blue-800 h-11 rounded-full flex items-center px-4">
            <form action="{{ route('logout') }}" method="post">
                    @csrf
                <button class="text-white">SignOut</button>
            </form>
        </div>
    </div>
</div>