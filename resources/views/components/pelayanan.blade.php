<!-- Tailwind CSS Responsive Section -->
<div class="container mx-auto py-8 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- Left Image Section -->
        <div class="flex items-center justify-center">
            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                <!-- Placeholder for Image -->
                <span class="text-gray-500">Image Placeholder</span>
            </div>
        </div>

        <!-- Right Content Section -->
        <div class="bg-white p-6 shadow-lg rounded-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Layanan apa saja yang ada di Fajar Harapan?</h2>
            <p class="text-gray-600 mb-6">
                Fajar harapan menyediakan beberapa layanan yang dapat membantu penyandang disabilitas seperti:
            </p>

            <!-- Accordion Section -->
            <div class="space-y-2">
                <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-[#FC6C3F] cursor-pointer>
                    <button class="w-full text-left bg-orange-500 text-white py-2 px-4 border-2 border-[#FC6C3F] rounded-lg focus:outline-none">
                        <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                        Layanan Panti 1
                    </button>
                </div>
                <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                    <button class="w-full text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg focus:outline-none">
                        <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                        Layanan Panti 2
                    </button>
                </div>
                <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                    <button class="w-full text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg focus:outline-none">
                        <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                        Layanan Panti 3
                    </button>
                </div>
                <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                    <button class="w-full text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg focus:outline-none">
                        <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                        Layanan Panti 4
                    </button>
                </div>
                <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                    <button class="w-full text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg focus:outline-none">
                        <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                        Layanan Panti 5
                    </button>
                </div>
                <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                    <button class="w-full text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg focus:outline-none">
                        <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                        Layanan Panti 6
                    </button>
                </div>
            </div>

            <div class="mt-4">
                <button class="bg-[#7F56D9] text-white py-2 px-4 rounded-lg focus:outline-none">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>

    </div>
</div>
