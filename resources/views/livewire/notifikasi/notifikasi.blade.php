<div class="min-h-screen bg-gray-50 font-poppins">
    <div class="fixed w-full z-20 bg-white shadow-md">
        @livewire('layout.navigation')
    </div>

    <div class="mx-12 p-4 pt-24 space-y-4">
        <!-- Filter Notifikasi -->
        <div class="flex justify-end items-center space-x-4 mb-4">
            <h1 class="items-center justify-center">Filter</h1>
            <select wire:model="filter"
                class="bg-white border border-gray-300 rounded-md py-2 px-8 text-sm text-gray-700">
                <option value="daily">Harian</option>
                <option value="weekly">Mingguan</option>
                <option value="monthly">Bulanan</option>
            </select>
        </div>

        @forelse($notifications as $notification)
            <div
                class="notification-item bg-white p-4 mb-4 rounded-md shadow-md hover:shadow-lg transition-all duration-300 ease-in-out transform">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                        </svg>
                        <p class="font-semibold text-xl text-gray-800">{{ $notification->data['title'] ?? 'Notifikasi Baru' }}</p>
                    </div>
                    <small class="text-sm text-gray-500">{{ $notification->created_at->diffForHumans() }}</small>
                </div>
                <p class="text-gray-700 mt-2">{!! $notification->data['message'] ?? 'Tidak ada pesan.' !!}</p>

                <div class="mt-3 flex justify-end items-center space-x-2">
                    @if(!$notification->read_at)
                        <button wire:click="markAsRead('{{ $notification->id }}')"
                            class="text-white bg-maincolor px-2 py-1 rounded-md hover:underline text-xs font-semibold">
                            Tandai sebagai Dibaca
                        </button>
                    @else
                        <span class="text-green-500 text-sm font-semibold">Sudah dibaca</span>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-gray-500">Tidak ada notifikasi.</p>
        @endforelse
    </div>
</div>