{{-- <section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-lg font-bold mb-2">Judul 1</h2>
                    <p class="text-gray-600">Deskripsi 1</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-lg font-bold mb-2">Judul 2</h2>
                    <p class="text-gray-600">Deskripsi 2</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h2 class="text-lg font-bold mb-2">Judul 3</h2>
                    <p class="text-gray-600">Deskripsi 3</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<div class="container mx-auto py-8 px-4">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-center w-full mb-8 lg:mb-16">
        Ketahui kegiatan-kegiatan apa saja yang sedang berlangsung di Fajar Harapan
    </h1>

    <!-- Grid layout for Trending and Events -->
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <!-- Trending Card -->
        <div class="col-span-2">
            <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="absolute top-2 left-2 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                    Trending
                </div>
                <div class="relative group">
                    <img src="{{ asset('Image/img1.jpg') }}" alt="" class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end p-6">
                        <div>
                            <h2 class="text-white text-2xl font-semibold mb-2">
                                Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di Fajar Harapan
                            </h2>
                            <p class="text-sm text-white mb-4">25 September 2024</p>
                            <div class="flex items-center text-sm text-gray-500">
                                <span class="mr-2">👤 Admin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!-- List of Event Cards -->
        <div class="col-span-2 space-y-4">
            <!-- Event Card 1 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex items-center">
                <div class="bg-gray-300 w-20 h-20 flex-shrink-0">
                    <img src="{{ asset('Image/img1.jpg') }}" alt="" class="w-full h-full">
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold">
                        Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di Fajar Harapan
                    </h3>
                    <div class="text-xs text-gray-500 items-center mt-1">
                        <span class="mr-2">🕒 2024-09-24 03:25:00</span>
                        <span>👤 Admin</span>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex items-center">
                <div class="bg-gray-300 w-20 h-20 flex-shrink-0">
                    <img src="{{ asset('Image/img1.jpg') }}" alt="" class="w-full h-full">
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold">
                        Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di Fajar Harapan
                    </h3>
                    <div class="text-xs text-gray-500 items-center mt-1">
                        <span class="mr-2">🕒 2024-09-24 03:25:00</span>
                        <span>👤 Admin</span>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-lg flex items-center">
                <div class="bg-gray-300 w-20 h-20 flex-shrink-0">
                    <img src="{{ asset('Image/img1.jpg') }}" alt="" class="w-full h-full">
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold">
                        Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di Fajar Harapan
                    </h3>
                    <div class="text-xs text-gray-500 items-center mt-1">
                        <span class="mr-2">🕒 2024-09-24 03:25:00</span>
                        <span>👤 Admin</span>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-white p-4 rounded-lg shadow-lg flex items-center">
                <div class="bg-gray-300 w-20 h-20 flex-shrink-0">
                    <img src="{{ asset('Image/img1.jpg') }}" alt="" class="w-full h-full">
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold">
                        Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di Fajar Harapan
                    </h3>
                    <div class="text-xs text-gray-500 items-center mt-1">
                        <span class="mr-2">🕒 2024-09-24 03:25:00</span>
                        <span>👤 Admin</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- "Berita Lainnya" Button -->
    <div class="text-right mt-8">
        <button class="bg-purple-600 text-white px-6 py-3 rounded-full hover:bg-purple-700 transition">
            Berita Lainnya
        </button>
    </div>
</div>
