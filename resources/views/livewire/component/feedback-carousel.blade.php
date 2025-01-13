<div class="flex flex-col items-center justify-center min-h-screen bg-white font-poppins">
    <h2 class="text-4xl font-bold text-maincolor mb-16">Feedback Corner</h2>

    <div class="relative w-full overflow-hidden">
        <div class="hidden lg:flex transition-transform duration-300 ease-in-out"
            style="transform: translateX(-{{ $slideNo * 33.33 }}%);">
            @foreach ($feedbacks as $index => $feedback)
                <div class="min-w-[33.33%] p-6 flex justify-center">
                    <div class="max-w-sm p-6 transition-all duration-300 ease-in-out
                                            {{ $index % 2 == 0 ? 'bg-maincolor text-white' : 'bg-gray-100' }}">
                        <p class="text-6xl {{ $index % 2 == 0 ? '' : 'text-maincolor' }}">“</p>
                        <h3 class="text-lg font-semibold {{ $index % 2 == 0 ? '' : 'text-maincolor' }} mb-2">
                            {{ $feedback->nama }}
                        </h3>
                        <p class="text-sm {{ $index % 2 == 0 ? '' : 'text-gray-700' }} line-clamp-5">
                            {{ $feedback->komentar }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>



        
        <div class="flex lg:hidden transition-transform duration-300 ease-in-out"
            style="transform: translateX(-{{ $slideNo * 100 }}%);">
            @foreach ($feedbacks as $index => $feedback)
                <div class="min-w-[100%] p-6 flex justify-center">
                    <div class="max-w-sm p-6 transition-all duration-300 ease-in-out
                                            {{ $index % 2 == 0 ? 'bg-maincolor text-white' : 'bg-gray-100' }}">
                        <p class="text-6xl {{ $index % 2 == 0 ? '' : 'text-maincolor' }}">“</p>
                        <h3 class="text-lg font-semibold {{ $index % 2 == 0 ? '' : 'text-maincolor' }} mb-2">
                            {{ $feedback->nama }}
                        </h3>
                        <p class="text-sm {{ $index % 2 == 0 ? '' : 'text-gray-700' }} line-clamp-5">
                            {{ $feedback->komentar }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex items-center justify-center mt-8 space-x-4">
        <button wire:click="prevSlide"
            class=" rounded-full bg-gray-300 hover:bg-maincolor focus:outline-none hover:text-white duration-200">
            <svg class="w-10 h-10 p-2 text-gray-700 hover:text-white" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button wire:click="nextSlide"
            class="rounded-full bg-gray-300 hover:bg-maincolor focus:outline-none hover:text-white duration-200">
            <svg class="w-10 h-10 p-2 text-gray-700 hover:text-white" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>