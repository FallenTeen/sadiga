<footer class="bg-blue-600 text-white font-poppins flex flex-col">
    <div class="flex flex-col lg:flex-row pt-8 gap-6 mx-6">
        <!-- Bagian Sosial Media dan Menu -->
        <div class="flex flex-col lg:flex-row lg:grow lg:px-12 justify-between">
            <!-- Bagian Sosial Media -->
            <div class="flex flex-col flex-1 lg:pr-4">
                <div class="text-3xl font-bold flex items-center h-10">
                    PT. Aneka Sarana Teknik
                </div>
                <div>
                    <div class="pt-8 font-semibold text-lg">
                        Our Social Media
                    </div>
                    <div class="flex gap-4 items-center pt-4">
                        <a href="#">
                            <img src="{{ asset('assets/icons/twitter.svg') }}" class="h-[50px] w-[50px]"
                                alt="Twitter Icon">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets/icons/facebook.svg') }}" class="h-[50px] w-[50px]"
                                alt="Facebook Icon">
                        </a>
                        <a href="#">
                            <img src="{{ asset('assets/icons/instagram.svg') }}" class="h-[50px] w-[50px]"
                                alt="Instagram Icon">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bagian Menu -->
            <div class="flex flex-wrap justify-between lg:w-3/4 lg:mx-auto gap-8 flex-1">
                <ul class="list-none flex-1">
                    <li class="font-bold text-xl pb-4">Shop</li>
                    <li class="py-2">
                        <a href="#" class="text-white hover:underline">Semua Produk</a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="text-white hover:underline">Produk</a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="text-white hover:underline">Rekomendasi</a>
                    </li>
                </ul>
                <ul class="list-none flex-1">
                    <li class="font-bold text-xl pb-4">Informations</li>
                    <li class="py-2">
                        <a href="#" class="text-white hover:underline">Tentang Kami</a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="text-white hover:underline">Kontak Kami</a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="text-white hover:underline">News</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bagian Form dan Map -->
        <div class="flex flex-col grow items-center">
            <div class="w-full grid gap-6">
                <!-- Form Stay Up to Date -->
                <div class="flex flex-col items-center">
                    <div class="text-xl font-bold py-1 animate-pulse hover:tracking-wider duration-300 cursor-pointer">
                        Stay Up To Date
                    </div>
                    <div
                        class="flex items-center w-full max-w-md border-blue-400 focus-within:border-white border-4 rounded-xl">
                        <input type="email" placeholder="Youremail@example.com"
                            class="outline-none placeholder-white placeholder-opacity-40 bg-blue-600 border-none rounded-l-xl duration-300 w-full px-4 py-2">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded-r-xl duration-300">
                            Submit
                        </button>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="flex justify-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.581080481865!2d109.22884757486574!3d-7.400745992609278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ef25207e1e1%3A0xcedb82ef04ed7e7c!2sUniversitas%20Amikom%20Purwokerto!5e0!3m2!1sen!2sid!4v1735147757763!5m2!1sen!2sid"
                        class="w-full max-w-lg rounded-lg shadow-lg" height="250" style="border:0;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full mt-8 border-t border-blue-400 bg-blue-400 py-2 font-poppins font-semibold">
        <div class="flex gap-8 justify-center overflow-auto">
            <div class="flex items-center">
                <div class="hidden lg:block px-2">Partnership</div>
                <img src="{{ asset('assets/icons/sponsors/apple.png') }}" class="w-[30px] invert" alt="Apple">
                <img src="{{ asset('assets/icons/sponsors/asus.png') }}" class="w-[45px]" alt="Asus">
                <img src="{{ asset('assets/icons/sponsors/huawei.png') }}" class="w-[45px]" alt="Huawei">
                <img src="{{ asset('assets/icons/sponsors/mi.png') }}" class="w-[30px]" alt="Xiaomi">
                <img src="{{ asset('assets/icons/sponsors/msi.png') }}" class="w-[40px] ml-2" alt="MSI">
                <img src="{{ asset('assets/icons/sponsors/acer.png') }}" class="w-[40px]" alt="Acer">
                <img src="{{ asset('assets/icons/sponsors/ibox.png') }}" class="w-[40px]" alt="Asus">
                <img src="{{ asset('assets/icons/sponsors/lenovo.png') }}" class="w-[40px]" alt="Lenovo">

            </div>
            <div class="flex items-center">
                <div class="hidden lg:block px-2">Mitra Pengantaran</div>
                <img src="{{ asset('assets/icons/sponsors/JNE.png') }}" class="w-[40px]" alt="JNE">
                <img src="{{ asset('assets/icons/sponsors/pos.png') }}" class="w-[40px] mx-2" alt="Pos Indonesia">
                <img src="{{ asset('assets/icons/sponsors/tiki.png') }}" class="w-[40px]" alt="Tiki">
                <img src="{{ asset('assets/icons/sponsors/anteraja.png') }}" class="w-[40px]" alt="Anteraja">
            </div>
        </div>
    </div>
</footer>