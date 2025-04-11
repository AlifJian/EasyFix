<x-app-layout title="Beranda">
    <div class="bg-gray-100 py-16 px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-8">
            <!-- Teks -->
            <div class="md:w-1/2 w-full text-center md:text-left py-8 space-y-6 md:block hidden">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Selamat Datang di Layanan Kami</h1>
                <p class="text-lg text-gray-700 mb-6">
                    Kami menyediakan layanan terbaik untuk kebutuhan perbaikan gadget Anda. Pesan secara online, cepat
                    dan mudah!
                </p>
                <a href="#layanan"
                    class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
            </div>
            <!-- Gambar -->
            <div class="md:w-1/2 w-full">
                <img src="brokenPhone.png" alt="Jumbotron Image" class="w-4/5 md:w-3/4 h-auto rounded-2xl mx-auto">
            </div>
            <!-- Teks -->
            <div class="md:w-1/2 w-full text-center md:text-left py-8 space-y-6 md:hidden block">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Selamat Datang di Layanan Kami</h1>
                <p class="text-lg text-gray-700 mb-6">
                    Kami menyediakan layanan terbaik untuk kebutuhan perbaikan gadget Anda. Pesan secara online, cepat
                    dan mudah!
                </p>
                <a href="#layanan"
                    class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl text-lg font-semibold hover:bg-blue-700 transition">
                    Pesan Sekarang
                </a>
            </div>
        </div>

        <!-- Keunggulan -->

        <div class="bg-gray-100 py-16 px-8">
                <h1 class="text-3xl md:text-4xl text-center font-bold mb-8">Keunggulan Kami</h1>
                <hr class="text-amber-200 w-2xs border-2 mx-auto">

            <div class="flex justify-center">
                <div class="p-8 rounded-lg w-full md:ml-16">
                    <div class="flex flex-wrap justify-center gap-x-16 gap-y-8">
                        <!-- Item 1 -->
                        <div class="flex items-center w-full md:w-[45%]">
                            <img class="w-32 h-auto" src="tabler--map-2.svg" alt="Lokasi">
                            <div class="pl-4">
                                <h3 class="text-base font-semibold text-gray-900">
                                    Pick up & Delivery Gratis
                                </h3>
                                <p class="text-sm text-gray-600">Memberikan layanan antar jemput gadget gratis</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-center w-full md:w-[45%]">
                            <img class="w-32 h-auto" src="tabler--certificate.svg" alt="Profesional">
                            <div class="pl-4">
                                <h3 class="text-base font-semibold text-gray-900">
                                    Teknisi Profesional
                                </h3>
                                <p class="text-sm text-gray-600">Teknisi berpengalaman dan bersertifikat</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-center w-full md:w-[45%]">
                            <img class=" w-32 h-auto" src="tabler--shield-check.svg" alt="Garansi">
                            <div class="pl-4">
                                <h3 class="text-base font-semibold text-gray-900">
                                    Garansi Layanan
                                </h3>
                                <p class="text-sm text-gray-600">Setiap jasa akan disertai garansi</p>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex items-center w-full md:w-[45%]">
                            <img class=" w-32 h-auto" src="tabler--calendar-clock.svg" alt="Cepat">
                            <div class="pl-4">
                                <h3 class="text-base font-semibold text-gray-900">
                                    Proses Cepat
                                </h3>
                                <p class="text-sm text-gray-600">Proses cepat dan transparan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </x-layouts.app-layout>