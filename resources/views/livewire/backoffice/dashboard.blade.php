<div class="font-poppins">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="relative w-full z-20">
        @livewire('layout.navigation')
    </div>
    <div class="w-full px-12 py-12 grid grid-rows-2 gap-6"> <!-- MainContainer -->
        <div class="row-span-1"> <!-- Atas -->
            <div class="grid grid-cols-5 gap-4">
                <div class="col-span-3 grid grid-rows-6 gap-4">
                    <div class="row-span-1 grid grid-cols-2 gap-4">
                        <div class="col-span-1 bg-white rounded-md px-6 py-4 shadow-md flex items-center space-x-4">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl">
                                    @if ($currentTimeOfDay == 'Siang')
                                        <svg id='Sun_24' width='24' height='24' viewBox='0 0 24 24'
                                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />


                                            <g transform="matrix(0.42 0 0 0.42 12 12)">
                                                <g style="">
                                                    <g transform="matrix(1 0 0 1 0 0)">
                                                        <path
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,152,0); fill-rule: nonzero; opacity: 1;"
                                                            transform=" translate(-24, -24)"
                                                            d="M 11 11 L 37 11 L 37 37 L 11 37 z" stroke-linecap="round" />
                                                    </g>
                                                    <g transform="matrix(0.71 -0.71 0.71 0.71 0 0)">
                                                        <path
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,152,0); fill-rule: nonzero; opacity: 1;"
                                                            transform=" translate(-24, -24)"
                                                            d="M 11.272 11.272 L 36.728 11.272 L 36.728 36.728 L 11.272 36.728 z"
                                                            stroke-linecap="round" />
                                                    </g>
                                                    <g transform="matrix(1 0 0 1 0 0)">
                                                        <path
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,235,59); fill-rule: nonzero; opacity: 1;"
                                                            transform=" translate(-24, -24)"
                                                            d="M 13 24 C 13 30.076999999999998 17.923000000000002 35 24 35 C 30.076 35 35 30.076999999999998 35 24 C 35 17.923000000000002 30.076 13 24 13 C 17.923 13 13 17.923 13 24"
                                                            stroke-linecap="round" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    @else
                                        <svg id='Moon_Phase_24' width='24' height='24' viewBox='0 0 24 24'
                                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                                            <g transform="matrix(0.42 0 0 0.42 12 12)">
                                                <g style="">
                                                    <g transform="matrix(1 0 0 1 -0.05 0)">
                                                        <path
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(187,222,251); fill-rule: nonzero; opacity: 1;"
                                                            transform=" translate(-23.95, -24)"
                                                            d="M 43 24 C 43 23.3 43.4 22.7 43.9 22.3 C 43.1 12.1 34.5 4 24 4 C 19 4 14.5 5.8 11 8.8 C 11 8.9 11 8.9 11 9 C 11 10.1 10.1 11 9 11 C 8.9 11 8.9 11 8.8 11 C 5.8 14.5 4 19 4 24 C 4 32.2 8.9 39.2 16 42.3 C 16.3 42.099999999999994 16.7 42 17 42 C 17.9 42 18.6 42.5 18.9 43.3 C 20.5 43.699999999999996 22.299999999999997 44 24 44 C 34.5 44 43.1 35.9 43.9 25.7 C 43.4 25.3 43 24.7 43 24 z"
                                                            stroke-linecap="round" />
                                                    </g>
                                                    <g transform="matrix(1 0 0 1 -5.96 0.61)">
                                                        <path
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(30,136,229); fill-rule: nonzero; opacity: 1;"
                                                            transform=" translate(-18.04, -24.61)"
                                                            d="M 22.1 33.1 C 21.5 32.2 21.5 30.900000000000002 21.900000000000002 30 C 21.400000000000002 30 20.8 30.2 20.400000000000002 30.5 C 19.000000000000004 31.4 18.500000000000004 33.4 19.6 34.8 C 20.5 36.199999999999996 22.5 36.699999999999996 23.900000000000002 35.599999999999994 C 24.400000000000002 35.3 24.700000000000003 34.8 25.000000000000004 34.39999999999999 C 23.9 34.5 22.7 34 22.1 33.1 z M 13.5 27.3 C 13.2 26.5 13.3 25.6 13.8 25 C 13.5 25 13 25 12.600000000000001 25.2 C 11.400000000000002 25.7 10.8 27 11.200000000000001 28.099999999999998 C 11.700000000000001 29.299999999999997 13.000000000000002 29.9 14.100000000000001 29.499999999999996 C 14.600000000000001 29.299999999999997 14.900000000000002 28.999999999999996 15.000000000000002 28.699999999999996 C 14.4 28.7 13.8 28.1 13.5 27.3 z M 19.5 16 C 19.8 14.7 20.8 13.9 22 13.7 C 21.6 13.399999999999999 21.4 13.2 20.9 13.1 C 19.299999999999997 12.7 17.5 13.7 17.099999999999998 15.399999999999999 C 16.699999999999996 17.099999999999998 17.7 18.799999999999997 19.4 19.2 C 19.799999999999997 19.3 20.299999999999997 19.3 20.7 19.2 C 19.6 18.4 19.1 17.1 19.5 16 z"
                                                            stroke-linecap="round" />
                                                    </g>
                                                    <g transform="matrix(1 0 0 1 9.95 0)">
                                                        <path
                                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(30,136,229); fill-rule: nonzero; opacity: 1;"
                                                            transform=" translate(-33.95, -24)"
                                                            d="M 43 24 C 43 23.3 43.4 22.7 43.9 22.3 C 43.1 12.1 34.5 4 24 4 C 24 4 27.7 6.1 30.6 11 C 30.700000000000003 11 30.8 11 31 11 C 32.7 11 34 12.3 34 14 C 34 14.9 33.6 15.7 32.9 16.3 C 33.1 16.900000000000002 33.199999999999996 17.400000000000002 33.4 18 C 34.3 18.2 35 19 35 20 C 35 20.8 34.6 21.4 33.9 21.8 C 34 22.5 34 23.2 34 24 C 34 29.5 32.5 33.8 30.7 36.9 C 30.9 37.199999999999996 31 37.6 31 38 C 31 39.1 30.1 40 29 40 C 28.8 40 28.7 40 28.5 39.9 C 26.2 42.7 24 44 24 44 C 34.5 44 43.1 35.9 43.9 25.7 C 43.4 25.3 43 24.7 43 24 z M 37.5 33 C 37.1 33 36.8 32.9 36.5 32.8 C 37.4 32.4 38 31.499999999999996 38 30.499999999999996 C 38 29.499999999999996 37.4 28.599999999999998 36.5 28.199999999999996 C 36.8 28.099999999999994 37.1 27.999999999999996 37.5 27.999999999999996 C 38.9 27.999999999999996 40 29.099999999999998 40 30.499999999999996 C 40 31.9 38.9 33 37.5 33 z"
                                                            stroke-linecap="round" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    @endif
                                </span>
                                <span class="text-sm font-medium text-gray-700">
                                    {{ $currentTimeOfDay }}
                                </span>
                            </div>
                            <div class="flex items-center ml-auto text-sm">
                                <span class=" text-gray-600">
                                    <svg id='Clock_24' width='24' height='24' viewBox='0 0 24 24'
                                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                                        <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />


                                        <g transform="matrix(0.34 0 0 0.34 12 12)">
                                            <path
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                                transform=" translate(-31, -31)"
                                                d="M 31 2 C 15.007813 2 2 15.007813 2 31 C 2 46.992188 15.007813 60 31 60 C 46.992188 60 60 46.992188 60 31 C 60 15.007813 46.992188 2 31 2 Z M 31 4 C 45.886719 4 58 16.113281 58 31 C 58 45.886719 45.886719 58 31 58 C 16.113281 58 4 45.886719 4 31 C 4 16.113281 16.113281 4 31 4 Z M 31 8 C 18.316406 8 8 18.316406 8 31 C 8 43.683594 18.316406 54 31 54 C 43.683594 54 54 43.683594 54 31 C 54 23.894531 50.792969 17.300781 45.199219 12.90625 C 44.765625 12.566406 44.140625 12.640625 43.796875 13.074219 C 43.457031 13.507813 43.53125 14.136719 43.964844 14.480469 C 49.070313 18.492188 52 24.515625 52 31 C 52 42.578125 42.578125 52 31 52 C 19.421875 52 10 42.578125 10 31 C 10 19.421875 19.421875 10 31 10 C 32.027344 10 33.058594 10.074219 34.0625 10.222656 C 34.613281 10.304688 35.121094 9.925781 35.199219 9.378906 C 35.277344 8.832031 34.902344 8.324219 34.355469 8.242188 C 33.253906 8.082031 32.125 8 31 8 Z M 38.53125 9.34375 C 38.144531 9.363281 37.785156 9.609375 37.640625 10 C 37.453125 10.515625 37.71875 11.089844 38.238281 11.28125 C 39.019531 11.566406 39.796875 11.910156 40.546875 12.292969 C 40.695313 12.367188 40.851563 12.402344 41.003906 12.402344 C 41.367188 12.402344 41.71875 12.203125 41.894531 11.855469 C 42.144531 11.363281 41.949219 10.761719 41.457031 10.511719 C 40.636719 10.089844 39.785156 9.71875 38.925781 9.402344 C 38.796875 9.355469 38.664063 9.335938 38.53125 9.34375 Z M 31 14 C 30.449219 14 30 14.449219 30 15 L 30 17 C 30 17.550781 30.449219 18 31 18 C 31.550781 18 32 17.550781 32 17 L 32 15 C 32 14.449219 31.550781 14 31 14 Z M 36.980469 15.167969 C 36.589844 15.171875 36.222656 15.40625 36.066406 15.792969 L 35.316406 17.644531 C 35.109375 18.15625 35.355469 18.742188 35.871094 18.949219 C 35.992188 18.996094 36.121094 19.019531 36.246094 19.019531 C 36.640625 19.019531 37.015625 18.785156 37.171875 18.394531 L 37.921875 16.539063 C 38.128906 16.027344 37.878906 15.445313 37.367188 15.238281 C 37.238281 15.1875 37.109375 15.164063 36.980469 15.167969 Z M 42.097656 18.488281 C 41.839844 18.496094 41.589844 18.597656 41.394531 18.796875 L 40.003906 20.234375 C 39.621094 20.632813 39.632813 21.265625 40.03125 21.648438 C 40.222656 21.835938 40.472656 21.929688 40.722656 21.929688 C 40.988281 21.929688 41.246094 21.824219 41.441406 21.625 L 42.832031 20.1875 C 43.21875 19.789063 43.207031 19.15625 42.8125 18.769531 C 42.613281 18.578125 42.355469 18.484375 42.097656 18.488281 Z M 31 20 C 30.449219 20 30 20.449219 30 21 L 30 29.277344 C 29.40625 29.625 29 30.261719 29 31 C 29 32.101563 29.898438 33 31 33 C 31.179688 33 31.347656 32.96875 31.511719 32.925781 L 37.792969 39.207031 C 37.988281 39.402344 38.242188 39.5 38.5 39.5 C 38.757813 39.5 39.011719 39.402344 39.207031 39.207031 C 39.597656 38.816406 39.597656 38.183594 39.207031 37.792969 L 32.925781 31.511719 C 32.96875 31.347656 33 31.179688 33 31 C 33 30.261719 32.59375 29.625 32 29.277344 L 32 21 C 32 20.449219 31.550781 20 31 20 Z M 45.597656 23.492188 C 45.46875 23.496094 45.335938 23.523438 45.210938 23.578125 L 43.382813 24.390625 C 42.878906 24.617188 42.652344 25.207031 42.875 25.714844 C 43.042969 26.085938 43.40625 26.308594 43.789063 26.308594 C 43.925781 26.308594 44.0625 26.277344 44.195313 26.21875 L 46.023438 25.40625 C 46.527344 25.179688 46.753906 24.589844 46.53125 24.085938 C 46.359375 23.707031 45.988281 23.484375 45.597656 23.492188 Z M 15 30 C 14.449219 30 14 30.449219 14 31 C 14 31.550781 14.449219 32 15 32 L 17 32 C 17.550781 32 18 31.550781 18 31 C 18 30.449219 17.550781 30 17 30 Z M 45 30 C 44.449219 30 44 30.449219 44 31 C 44 31.550781 44.449219 32 45 32 L 47 32 C 47.550781 32 48 31.550781 48 31 C 48 30.449219 47.550781 30 47 30 Z M 43.964844 35.246094 C 43.574219 35.25 43.207031 35.484375 43.050781 35.871094 C 42.847656 36.382813 43.09375 36.964844 43.605469 37.171875 L 45.460938 37.921875 C 45.582031 37.972656 45.710938 37.996094 45.832031 37.996094 C 46.230469 37.996094 46.605469 37.757813 46.761719 37.367188 C 46.96875 36.855469 46.722656 36.273438 46.207031 36.066406 L 44.355469 35.316406 C 44.226563 35.265625 44.09375 35.242188 43.964844 35.246094 Z M 41.054688 39.722656 C 40.800781 39.730469 40.542969 39.832031 40.351563 40.03125 C 40.199219 40.1875 40.128906 40.386719 40.097656 40.585938 C 39.929688 40.953125 39.988281 41.402344 40.292969 41.707031 L 41.605469 43.019531 C 41.800781 43.214844 42.054688 43.3125 42.3125 43.3125 C 42.570313 43.3125 42.824219 43.214844 43.019531 43.019531 C 43.054688 42.984375 43.074219 42.933594 43.105469 42.894531 C 43.144531 42.863281 43.191406 42.847656 43.230469 42.808594 C 43.613281 42.410156 43.601563 41.777344 43.203125 41.394531 L 41.765625 40.003906 C 41.566406 39.8125 41.308594 39.71875 41.054688 39.722656 Z M 31 44 C 30.449219 44 30 44.449219 30 45 L 30 47 C 30 47.550781 30.449219 48 31 48 C 31.550781 48 32 47.550781 32 47 L 32 45 C 32 44.449219 31.550781 44 31 44 Z"
                                                stroke-linecap="round" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="font-medium text-gray-700">
                                    {{ $currentDateTime }}
                                </span>
                            </div>
                        </div>

                        <div class="col-span-1 flex items-center gap-2 bg-white rounded-md px-4 py-2 shadow-md">
                            <span>Filter</span>
                            <select wire:model.change="filterType" id="filter"
                                class="w-full p-2 bg-gray-100 rounded-md">
                                <option value="weekly">Mingguan</option>
                                <option value="monthly">Bulanan</option>
                                <option value="yearly">Tahunan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row-span-5 grid grid-cols-4 gap-4">
                        <div class="col-span-1 rounded-md p-4 bg-white shadow-lg">
                            <div class="grid grid-rows-7 h-full">
                                <div class="row-span-1"></div>
                                <div class="row-span-3 flex flex-col justify-center items-center">
                                    <span class="font-bold text-5xl">{{ $jmlUserBaru }}</span>
                                    <span class="text-sm text-gray-600 mt-2">User Baru</span>
                                </div>
                                <div class="row-span-1"></div>
                                <div class="row-span-2 flex-row justify-center text-center text-sm">
                                    <div>Hingga Hari ini</div>
                                    <div class="text-xs pt-1">{{ now()->format('d M Y') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 rounded-md p-4 bg-white shadow-lg">
                            <div class="grid grid-rows-7 h-full">
                                <div class="row-span-1"></div>
                                <a class="row-span-3 flex flex-col justify-center items-center hover:scale-105 hover:text-blue-600 transition-all duration-300"
                                    href="{{ route('servicemanage', ['#section1']) }}">
                                    <span class="font-bold text-5xl">{{ $jmlKategori }}</span>
                                    <span class="text-sm text-gray-600 mt-2">Kategori</span>
                                </a>
                                <div class="row-span-1 flex justify-center text-center text-sm items-end mb-1">
                                    <div>Kategori Terbanyak</div>
                                </div>
                                <div class="row-span-2 flex flex-col justify-center text-xs">
                                    <ul class="max-h-[80px] overflow-y-auto space-y-1">
                                        @foreach($jmlBarangPerKategori as $kategori)
                                            <li class="flex justify-between">
                                                <a href="{{ route('servicemanage', ['#section1']) }}"
                                                    class="flex justify-between w-full text-gray-800 hover:text-blue-600">
                                                    <span class="text-left">{{ $kategori->nama_kategori }}</span>
                                                    <span class="text-right">{{ $kategori->total_items }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 rounded-md p-4 bg-white shadow-lg">
                            <div class="grid grid-rows-7 h-full">
                                <div class="row-span-1"></div>
                                <a href="{{ route('productmanage.index', ['#section1']) }}" class="row-span-3 flex flex-col justify-center items-center hover:scale-105 hover:text-blue-600 duration-300">
                                    <span class="font-bold text-5xl">{{ $jmlItemBaruPerInterval->sum('count') }}</span>
                                    <span class="text-sm text-gray-600 mt-2">Barang dan Jasa</span>
                                </a>
                                <div class="row-span-1"></div>
                                <div class="row-span-2 flex-row justify-center text-center text-sm">
                                    <h1>Pada</h1>
                                    <ul class="max-h-[80px] overflow-y-auto space-y-1 text-xs">
                                        @foreach($jmlItemBaruPerInterval as $item)
                                            <li class="flex gap-2 text-center justify-center items-center">
                                                @if($filterType === 'weekly')
                                                    <span class="text-gray-700">Minggu Ini</span>
                                                    <span class="text-gray-500">{{ $item->month_name }}</span>
                                                @elseif($filterType === 'monthly')
                                                    <span class="text-gray-700">{{ $item->month_name }}</span>
                                                    <span class="text-gray-500">{{ $item->year }}</span>
                                                @else
                                                @endif
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-1 rounded-md p-4 bg-white shadow-lg">
                            <div class="grid grid-rows-7 h-full">
                                <div class="row-span-1"></div>
                                <div class="row-span-3 flex flex-col justify-center items-center">
                                    <span
                                        class="font-bold text-5xl">{{ $itemPalingBanyakDisukai->sum('liked_by_users_count') }}</span>
                                    <span class="text-sm text-gray-600 mt-2">Item Disukai</span>
                                </div>
                                <div class="row-span-1 flex justify-center text-center text-sm items-end mb-1">
                                    <div>Top 3 Items</div>
                                </div>
                                <div class="row-span-2 flex flex-col justify-center text-xs ">
                                    <ul class="max-h-[80px] overflow-y-auto space-y-1 font-light">
                                        @foreach($itemPalingBanyakDisukai as $item)
                                            <li class="flex justify-between">
                                                <span class="text-left">{{ $item->nama_barang }}</span>
                                                <span class="text-right">{{ $item->liked_by_users_count }} likes</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 p-4 bg-white rounded-md shadow-lg">
                    <div class="items-center flex text-center justify-center pt-8">
                        <h1>Grafik Items Disukai</h1>
                    </div>
                    <canvas id="grafikItemDisukai"></canvas>
                </div>
                <script>
                    const ctx = document.getElementById('grafikItemDisukai').getContext('2d');

                    const grafikItemDisukai = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: @json($grafikAnalisaItemDisukai->pluck('date')),
                            datasets: [{
                                label: 'AC Disukai',
                                data: @json($grafikAnalisaItemDisukai->pluck('count')),
                                borderColor: 'rgb(75, 192, 192)',
                                tension: 0.1
                            }]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                x: {
                                    type: 'category',
                                    title: {
                                        display: true,
                                        text: 'Tanggal'
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Jumlah Item Disukai'
                                    }
                                }
                            }
                        }
                    });

                    document.addEventListener('livewire:load', function () {
                        // Data for the pie chart
                        const itemsPerCategoryData = @this.get('chartData.itemsPerCategory');
                        const likedItemsPerCategoryData = @this.get('chartData.likedItemsPerCategory');

                        // Chart for items per category
                        const itemsPerCategoryCtx = document.getElementById('itemsPerCategoryChart').getContext('2d');
                        new Chart(itemsPerCategoryCtx, {
                            type: 'pie',
                            data: {
                                labels: Object.keys(itemsPerCategoryData),
                                datasets: [{
                                    data: Object.values(itemsPerCategoryData),
                                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#FF9F40'], // You can add more colors if needed
                                }]
                            }
                        });

                        // Chart for liked items per category
                        const likedItemsPerCategoryCtx = document.getElementById('likedItemsPerCategoryChart').getContext('2d');
                        new Chart(likedItemsPerCategoryCtx, {
                            type: 'pie',
                            data: {
                                labels: Object.keys(likedItemsPerCategoryData),
                                datasets: [{
                                    data: Object.values(likedItemsPerCategoryData),
                                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#FF9F40'], // You can add more colors if needed
                                }]
                            }
                        });
                    });
                </script>

            </div>
        </div> <!-- Bawah -->
        <!-- <div class="row-span-1 grid grid-cols-2 gap-4">
            <div class="cols-span-1 bg-white rounded-md p-4">
                Kiri
            </div>
            <div class="cols-span-1 grid grid-cols-2 gap-4">
                <div class="col-span-1 bg-white rounded-md p-4">
                    <h3 class="text-xl mb-4">Perbandingan Jumlah Barang Berdasarkan Kategori</h3>
                    <canvas id="itemsPerCategoryChart"></canvas>
                </div>
                <div class="col-span-1 bg-white rounded-md p-4">
                    <h3 class="text-xl mb-4">Perbandingan Jumlah Barang Disukai Berdasarkan Kategori</h3>
                    <canvas id="likedItemsPerCategoryChart"></canvas>
                </div>
            </div>
        </div> -->
    </div>
</div>