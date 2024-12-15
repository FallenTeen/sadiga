<div x-show="isOpen" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded shadow-lg">
        <h3 class="text-lg font-semibold">{{ $message }}</h3>
        <div class="mt-4 flex justify-end">
            <button wire:click="closeModal" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                Batal
            </button>
            <button wire:click="{{ $confirmAction }}"
                class="ml-2 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                Hapus
            </button>
        </div>
    </div>
</div>