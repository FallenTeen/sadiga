<footer class="bg-blue-600 text-white font-poppins">
    <div class="flex pt-8 gap-6 mx-6">
        <div class="grow grid justify-center">
            <div class="text-4xl font-bold flex items-center h-10">
                Sadiga
            </div>
            <div>
                <div class="pt-8 font-semibold text-lg">
                    Our Social Media
                </div>
                <div class="flex items-center">
                    <div class="h-[60px] w-[60px]">
                        <img src="{{ asset('assets/icons/twitter.svg') }}" class="h-[50px]" alt="Twitter Icon">
                    </div>
                    <div class="h-[60px] w-[60px]">
                        <img src="{{ asset('assets/icons/facebook.svg') }}" class="h-[50px]" alt="Facebook Icon">
                    </div>
                    <div class="h-[60px] w-[60px]">
                        <img src="{{ asset('assets/icons/instagram.svg') }}" class="h-[50px]" alt="Twitter Icon">
                    </div>
                </div>
            </div>

        </div>
        <div class="w-1/6">
            <ul class="list-none">
                <div class="font-bold text-xl pb-4">shop</div>
                <li class="py-2">Product</li>
                <li class="py-2">Overview</li>
                <li class="py-2">Pricing</li>
                <li class="py-2">Release</li>
            </ul>

        </div>
        <div class="w-1/6">
            <ul class="list-none">
                <div class="font-bold text-xl pb-4">shop</div>
                <li class="py-2">About Us</li>
                <li class="py-2">Contact</li>
                <li class="py-2">News</li>
                <li class="py-2">Support</li>
            </ul>

        </div>
        <div class="grow flex items-center">
            <div class="w-full">
                <div
                    class="text-xl font-bold py-1 animate-pulse hover:tracking-wider duration-300 justify-center cursor-pointer">
                    Stay Up To Date</div>
                <div class="flex items-center w-3/4 border-blue-400 focus:border-white border-4 rounded-xl">
                    <input type="email" placeholder="Youremail@example.com"
                        class="outline-none placeholder-white placeholder-opacity-40 bg-blue-600 border-4 rounded-l-xl duration-300 w-full px-4 py-2 border-none">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 outline-none duration-300 rounded-r-lg">
                        Submit
                    </button>
                </div>

            </div>
        </div>

    </div>
    <div class="w-full mt-8 border-t border-blue-400 bg-blue-400 py-2 font-poppins font-semibold">
        <div class="flex gap-8 justify-center">
            <div class="flex items-center">
                <div class="px-2">Partnership</div>
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
                <div class="px-2">Mitra Pengantaran</div>
                <img src="{{ asset('assets/icons/sponsors/JNE.png') }}" class="w-[40px]" alt="JNE">
                <img src="{{ asset('assets/icons/sponsors/pos.png') }}" class="w-[40px] mx-2" alt="Pos Indonesia">
                <img src="{{ asset('assets/icons/sponsors/tiki.png') }}" class="w-[40px]" alt="Tiki">
                <img src="{{ asset('assets/icons/sponsors/anteraja.png') }}" class="w-[40px]" alt="Anteraja">
            </div>
        </div>
    </div>
</footer>