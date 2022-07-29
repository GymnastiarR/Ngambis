<x-app-layout>
    <x-slot name="sidemenu">
        <x-sidemenu>
    
        </x-sidemenu>
    </x-slot>
    <div class="w-full lg:px-10 px-2 min-h-screen">
        <x-header-menu>
            
        </x-header-menu>
        <div class="my-7 py-8 lg:px-16 px-2 shadow-2xl bg-white flex flex-col w-full box-border rounded-2xl min-h-full">
            <h1 class="text-2xl font-bold mb-2">History Latihan Kamu</h1>
            <div class="border-b-2 border-black w-36 mb-6"></div>
            <table class="mb-4">
                <thead class="min-w-full border-2 bg-slate-500 text-white">
                    <th>No</th>
                    <th class="border-2 py-3">Nilai</th>
                    <th class="border-2 py-3">Waktu</th>
                    <th class="border-2 py-3">Tanggal</th>
                </thead>
                <tbody class="border-x-2">
                    @foreach ($histories as $history)                        
                    <tr class="border-b-2">
                        <td class="text-center border-2 py-3">{{ $loop->iteration }}</td>
                        <td class="text-center border-2 py-3">{{ $history->grade }}</td>
                        <td class="text-center border-2 py-3">{{ $history->time / 10 }} Detik/Soal</td>
                        <td class="text-center border-2 py-3">{{ $history->created_at->diffForHumans() }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $histories->links() }}
        </div>
    </div>
</x-app-layout>