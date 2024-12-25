<div class="font-poppins">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="relative w-full z-20">
        @livewire('layout.navigation')
    </div>
    <div class="w-full px-12 py-4 grid grid-rows-2 gap-6"> <!-- MainContainer -->
        <div class="row-span-1"> <!-- Atas -->
            <div class="grid grid-cols-5 gap-4"> <!-- Mengubah menjadi grid-cols-2 -->
                <div class="col-span-3 grid grid-rows-6 gap-4">
                    <div class="row-span-1 grid grid-cols-2 gap-4">
                        <div class="col-span-1 bg-white rounded-md px-4 py-2">Dropdown xxxxx</div>
                        <div class="col-span-1 bg-white rounded-md px-4 py-2">Filter mingguan/bulanan/tahunan</div>
                    </div>
                    <div class="row-span-5 grid grid-cols-4 gap-4">
                        <div class="col-span-1 rounded-md p-4 bg-white">
                            <div class="grid grid-rows-7 h-full">
                                <div class="row-span-1"></div>
                                <div class="row-span-3 flex flex-col justify-center items-center">
                                    <span class="font-bold text-5xl">{{ $jmlUserBaru }}</span>
                                    <span class="text-sm text-gray-600 mt-2">User Baru</span>
                                </div>
                                <div class="row-span-1"></div>
                                <div class="row-span-2 flex-row justify-center text-center text-sm">
                                    <div>
                                        Hingga Hari ini
                                    </div>
                                    <div class="font-semibold">{{ now()->format('d M Y') }}</div>
                                </div>
                            </div>

                        </div>

                        <div class="col-span-1 rounded-md p-4 bg-white">
                            Jumlah Kategori : {{ $jmlKategori }}
                            <ul>
                                @foreach($jmlBarangPerKategori as $kategori)
                                    <li>{{ $kategori->nama_kategori }}: {{ $kategori->barangs_count }} Barang</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-span-1 rounded-md p-4 bg-white">
                            <h1>Jumlah Items Per Bulan</h1>
                            <ul>
                                @foreach($jmlItemBaruPerInterval as $item)
                                    <li>{{ $item->month_name }} {{ $item->year }} : {{ $item->count }}</li>
                                @endforeach
                            </ul>

                        </div>
                        <div class="col-span-1 rounded-md p-4 bg-white">
                            Card 4 : Item paling banyak disukai user
                            <ul>
                                @foreach($itemPalingBanyakDisukai as $item)
                                    <li>{{ $item->nama_barang }} ({{ $item->liked_by_users_count }} likes)</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 p-4 bg-white rounded-md">
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
                </script>

            </div>
        </div> <!-- Bawah -->
        <div class="row-span-1 grid grid-cols-2 gap-4">
            <div class="cols-span-1 bg-white rounded-md p-4">
                Kiri
            </div>
            <div class="cols-span-1 grid grid-cols-2 gap-4">
                <div class="col-span-1 bg-white rounded-md p-4">Kanan 1</div>
                <div class="col-span-1 bg-white rounded-md p-4">Kanan 2</div>
            </div>
        </div>
    </div>
</div>