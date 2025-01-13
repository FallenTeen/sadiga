<div class="container mx-auto p-6">

    @if($jasas->isEmpty())
        <div class="text-center text-gray-500">Tidak ada jasa yang ditemukan</div>
    @else
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @foreach($jasas as $jasa)
                <div
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <div class="grid grid-cols-1 gap-4">
                        <h3 class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition-colors duration-300">
                            {{ $jasa->nama_jasa }}
                        </h3>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm text-gray-600">{{ $jasa->deskripsi }}</p>
                            <p class="text-xl text-black font-semibold">Rp {{ number_format($jasa->tarif, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-between items-center space-x-4">
                        <button wire:click="showDetail({{ $jasa->id }})"
                            class="text-white bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-md shadow-md transition-all duration-300 transform hover:scale-105">
                            Lihat Detail
                        </button>
                    </div>
                </div>



            @endforeach
        </div>

        <div class="mt-6">
            {{ $jasas->links() }}
        </div>
    @endif

    <!-- Modal -->
    <div x-data="{ open: @entangle('modalOpen') }" x-show="open"
        x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center z-50">
=
        <div @click.away="open = false"
            class="bg-white rounded-lg shadow-lg p-8 w-full sm:w-3/4 lg:w-1/2 xl:w-1/3 space-y-6 transform transition-all duration-300">

            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-semibold text-gray-800">{{ $selectedJasa?->nama_jasa ?? 'Detail Jasa' }}</h3>
                <button @click="open = false" class="text-gray-500 hover:text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="space-y-6 mx-4">
                <div class="grid grid-cols-3 gap-4 py-2 border-b">
                    <strong class="text-gray-600 font-semibold">Deskripsi</strong>
                    <p class="col-span-2 text-gray-800 text-sm">{{ $selectedJasa?->deskripsi ?? '-' }}</p>
                </div>

                <div class="grid grid-cols-3 gap-4 py-2 border-b">
                    <strong class="text-gray-600 font-semibold">Tarif</strong>
                    <p class="col-span-2 text-gray-800 text-sm">Rp
                        {{ number_format($selectedJasa?->tarif, 0, ',', '.') ?? '-' }}
                    </p>
                </div>

                <div class="grid grid-cols-3 gap-4 py-2">
                    <strong class="text-gray-600 font-semibold">SNK</strong>
                    <p class="col-span-2 text-gray-800 text-sm">{{ $selectedJasa?->snk ?? '-' }}</p>
                </div>
            </div>

            <div class="flex justify-between space-x-4">

                <a href="https://wa.me/6285156208507?text={{ rawurlencode('Halo, saya tertarik untuk memesan jasa ') }}%0A%0A{{ rawurlencode('' . $jasa->nama_jasa) }}%0A%0A{{ rawurlencode('Terima kasih.') }}"
                    target="_blank"
                    class="text-white bg-green-600 hover:bg-green-700 px-6 py-3 rounded-md shadow-md transition-all duration-300 transform hover:scale-105">
                    Order via WhatsApp
                </a>

                <div>
                    <button @click="open = false"
                        class="bg-gray-300 text-black hover:bg-gray-400 px-6 py-3 rounded-md shadow-md transition-all duration-300 transform hover:scale-105">
                        Tutup
                    </button>
                    <button @click="open = false"
                        class="bg-blue-600 text-white hover:bg-blue-700 px-6 py-3 rounded-md shadow-md transition-all duration-300 transform hover:scale-105">
                        OK
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>