<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Landing Page</title>
</head>

<body class="bg-[#F3F4F8] font-poppins">
    <x-nav-bar></x-nav-bar>
    <div class="w-full bg-[#F3F4F8] lg:h-32 h-12"></div>
    <section class="relative bg-[#F3F4F8] dark:bg-gray-900 z-10">

        <div class="absolute -top-10 -left-10 z-0">
            <div class="w-40 h-40 bg-orange-500 rounded-full"></div>
            <div class="w-20 h-20 bg-orange-400 rounded-full mt-4 ml-8"></div>
            <div class="w-10 h-10 bg-orange-300 rounded-full mt-2 ml-16"></div>
        </div>

        <div class="absolute -top-0 -right-0 z-0">
            <div class="w-40 h-40 bg-orange-500 rounded-full"></div>
            <div class="w-10 h-10 bg-orange-300 rounded-full mt-2 ml-16"></div>
            <div class="w-20 h-20 bg-orange-400 rounded-full mt-4 ml-8"></div>
        </div>

        <div class="relative z-10 py-16 px-4 mx-auto max-w-screen-xl text-center lg:py-12 lg:px-12">
            <h1
                class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
                Langkah Kecil Menuju Kemandirian Besar
                <span class="block mt-4 text-[#FC6C3F]">Bersama Kami di Fajar Harapan!</span>
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Dengan kasih dan kepedulian, kami membimbing setiap individu untuk bangkit dari keterbatasan, berdaya
                secara sosial dan ekonomi, serta menjalani hidup yang bermartabat.
            </p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-[#FC6C3F] bg-white border border-[#FC6C3F] rounded-lg shadow-md hover:bg-orange-50 focus:ring-4 focus:ring-orange-200">
                    Lihat Layanan
                </a>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white bg-[#FC6C3F] rounded-lg shadow-md hover:bg-orange-500 focus:ring-4 focus:ring-orange-300">
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <img src="{{ asset('Image/image.png') }}" alt="Children Image" class="w-screen h-auto object-cover lg:mb-8">
    </section>

    {{-- start tentang kami  --}}
    <section class="py-12 mt-8" data-aos="fade-up" data-aos-once="true">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="mt-2 text-3xl leading-9 font-extrabold text-[#FC6C3F] sm:text-4xl">
                    Fajar Harapan
                </p>
                <p class="mt-4 text-lg leading-7 text-[#21272A]">
                    Fajar Harapan adalah panti rehabilitasi sosial yang berkomitmen untuk mendukung penyandang
                    disabilitas meraih kemandirian. Melalui layanan rehabilitasi komprehensif, pendidikan, dan
                    pemberdayaan, kami membantu individu mengembangkan potensi mereka dan berkontribusi secara aktif di
                    masyarakat.
                </p>
            </div>
            <div class="container mx-auto p-6 flex flex-wrap justify-center">
                <!-- Card 1 -->
                <div class="bg-white rounded-lg shadow-lg m-4 w-80 transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('icon/R.png') }}" alt="Visi dan Misi"
                        class="rounded-t-lg w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-lg text-[#FC6C3F] font-semibold mb-2">Profile</h4>
                        <h3 class="text-xl font-semibold mb-6">Visi dan Misi</h3>
                        <p class="text-[#21272A] mb-6">Egestas elit dui scelerisque eu et purus aliquam vitae
                            habitasse...
                        </p>
                        <div class="flex justify-center">
                            <a href="#"
                                class="inline-block bg-[#FC6C3F] text-white p-5 rounded-full hover:bg-[#d16c4d]">
                                <img src="{{ asset('icon/Vector.png') }}" alt="" class="w-2 h-2 mx-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-lg shadow-lg m-4 w-80 transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('icon/historical_3107.png') }}" alt="Sejarah"
                        class="rounded-t-lg w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-lg text-[#FC6C3F] font-semibold mb-2">Profile</h4>
                        <h3 class="text-xl font-semibold mb-6">Sejarah</h3>
                        <p class="text-[#21272A] mb-6">Egestas elit dui scelerisque eu et purus aliquam vitae
                            habitasse...
                        </p>
                        <div class="flex justify-center">
                            <a href="#"
                                class="inline-block bg-[#FC6C3F] text-white p-5 rounded-full hover:bg-[#d16c4d]">
                                <img src="{{ asset('icon/Vector.png') }}" alt="" class="w-2 h-2 mx-auto">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-lg shadow-lg m-4 w-80 transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('icon/struktur.png') }}" alt="Tenaga Ahli"
                        class="rounded-t-lg w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-lg text-[#FC6C3F] font-semibold mb-2">Profile</h4>
                        <h3 class="text-xl font-semibold mb-6">Tenaga Ahli</h3>
                        <p class="text-[#21272A] mb-6">Egestas elit dui scelerisque eu et purus aliquam vitae
                            habitasse...
                        </p>
                        <div class="flex justify-center">
                            <a href="#"
                                class="inline-block bg-[#FC6C3F] text-white p-5 rounded-full hover:bg-[#d16c4d]">
                                <img src="{{ asset('icon/Vector.png') }}" alt="" class="w-2 h-2 mx-auto">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end tentang kami --}}

    <!-- Section About Start -->
    <section id="count-section" class="py-12" data-aos="fade-up" data-aos-once="true">
        <div class="container mx-auto px-4 text-center">

            <!-- Section Title -->
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#21272A] mb-4">
                Kenapa harus di <span class="text-[#FC6C3F]">Fajar Harapan?</span>
            </h2>

            <!-- Section Description -->
            <p class="text-gray-600 max-w-2xl mx-auto mb-10 text-base sm:text-lg lg:text-xl leading-relaxed">
                Fajar Harapan berkomitmen membantu penyandang disabilitas mencapai kemandirian melalui layanan
                rehabilitasi lengkap, tenaga ahli berpengalaman, dan fasilitas ramah disabilitas. Kami mendukung
                pemulihan fisik, mental, dan sosial untuk hidup yang berdaya dan bermakna.
            </p>

            <!-- Cards Start -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                <!-- Card 1 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="https://via.placeholder.com/32" alt="Icon" class="w-8 h-8">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold text-gray-900" id="count1">60</h3>
                        <p class="text-gray-600">Pelanggan Puas</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="https://via.placeholder.com/32" alt="Icon" class="w-8 h-8">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold text-gray-900" id="count2">60</h3>
                        <p class="text-gray-600">Tenaga ahli</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="https://via.placeholder.com/32" alt="Icon" class="w-8 h-8">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold text-gray-900" id="count3">11</h3>
                        <p class="text-gray-600">Fasilitas Rumah Disabilitas</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="https://via.placeholder.com/32" alt="Icon" class="w-8 h-8">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold text-gray-900" id="count4">7</h3>
                        <p class="text-gray-600">Program Pemberdayaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end about --}}

    {{-- service start --}}
    <section>
        <div class="container mx-auto py-8 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Left Image Section -->
                <div class="flex items-center justify-center" data-aos="fade-right" data-aos-once="true">
                    <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                        <!-- Placeholder for Image -->
                        <span class="text-gray-500">Image Placeholder</span>
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="bg-white p-6 shadow-lg rounded-lg text-center" data-aos="fade-left" data-aos-once="true">
                    <h2 class="text-2xl font-bold mb-4">Layanan apa saja yang ada di Fajar Harapan?</h2>
                    <p class="text-gray-600 mb-6">
                        Fajar harapan menyediakan beberapa layanan yang dapat membantu penyandang disabilitas seperti:
                    </p>

                    <!-- Accordion Section -->
                    <div class="space-y-2">
                        <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-[#FC6C3F] cursor-pointer>
                        <button class="w-full
                            text-left bg-orange-500 text-white py-2 px-4 border-2 border-[#FC6C3F] rounded-lg
                            focus:outline-none">
                            <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                            Layanan Panti 1
                            </button>
                        </div>
                        <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                        <button class="w-full
                            text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg
                            focus:outline-none">
                            <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                            Layanan Panti 2
                            </button>
                        </div>
                        <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                        <button class="w-full
                            text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg
                            focus:outline-none">
                            <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon" class="h-6 w-6 mr-2">
                            Layanan Panti 3
                            </button>
                        </div>
                        <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                        <button class="w-full
                            text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg
                            focus:outline-none">
                            <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon"
                                class="h-6 w-6 mr-2">
                            Layanan Panti 4
                            </button>
                        </div>
                        <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                        <button class="w-full
                            text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg
                            focus:outline-none">
                            <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon"
                                class="h-6 w-6 mr-2">
                            Layanan Panti 5
                            </button>
                        </div>
                        <div class="flex items-center border-2 border-[#FC6C3F] rounded-lg px-4 py-2 bg-red-50 cursor-pointer>
                        <button class="w-full
                            text-left bg-white text-gray-800 py-2 px-4 border-2 border-[#FC6C3F] rounded-lg
                            focus:outline-none">
                            <img src="{{ asset('icon/chevron-down.png') }}" alt="Dropdown Icon"
                                class="h-6 w-6 mr-2">
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
    </section>
    {{-- service end     --}}

    {{-- feature start --}}
    <section class="bg-gray-100 py-12">
        <div class="container mx-auto p-4">
            <!-- Title Section -->
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-[#FC6C3F] py-8">Fasilitas yang disediakan <span
                        class="text-black">di Fajar Harapan</span></h2>
                <p class="text-gray-700">Fajar Harapan menyediakan beberapa layanan yang dapat membantu penyandang
                    disabilitas seperti:</p>
            </div>

            <!-- Section Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Grid of Facility Items -->
                <div class="col-span-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- Facility Item -->
                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>

                    <div class="p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105">
                        <div class="w-full h-24 bg-gray-300 rounded mb-2"></div>
                        <h3 class="text-gray-700">Fasilitas 1</h3>
                    </div>
                </div>

                <!-- Detail Section -->
                <div class="col-span-1 p-4 bg-white rounded-lg shadow">
                    <div class="w-full h-80 bg-gray-300 rounded mb-4"></div>
                    <h3 class="text-xl font-semibold mb-2">Fasilitas 1</h3>
                    <p class="text-gray-600 mb-4">
                        Lorem ipsum dolor sit amet consectetur. Nunc mattis vitae ridiculus at lorem tortor
                        vestibulum. Nam elit tincidunt urna non vulputate accumsan.
                    </p>
                    <a href="#" class="text-indigo-600 font-semibold">Lihat dalam 360° &rarr;</a>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="flex justify-center mt-6">
                <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                    Lihat Lebih Banyak
                </button>
            </div>
        </div>
    </section>
    {{-- feature end --}}

    {{-- galery start --}}
    <div class="bg-gray-100" data-aos="fade" data-aos-once="true">
        <div class="container mx-auto px-4 py-8 text-center justify-center lg:p-28">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-12">
                Jelajahi momen-momen inspiratif di <span class="text-orange-500">Fajar Harapan!</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Large item -->
                <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxuYXR1cmV8ZW58MHwwfHx8MTcyMTA0MjYwMXww&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Nature" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="text-2xl font-bold text-white">Explore Nature</h3>
                            <p class="text-white">Discover the beauty of the natural world</p>
                        </div>
                    </div>
                </div>

                <!-- Two small items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1493770348161-369560ae357d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxmb29kfGVufDB8MHx8fDE3MjEwNDI2MTR8MA&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Food" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Culinary Delights</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0ZWNobm9sb2d5fGVufDB8MHx8fDE3MjEwNDI2Mjh8MA&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Technology" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Tech Innovations</h4>
                        </div>
                    </div>
                </div>

                <!-- Three medium items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1503220317375-aaad61436b1b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHx0cmF2ZWx8ZW58MHwwfHx8MTcyMTA0MjY0MXww&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Travel" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Travel Adventures</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxhcnR8ZW58MHwwfHx8MTcyMTA0MjY5Nnww&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Art" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Artistic Expressions</h4>
                        </div>
                    </div>
                </div>

                <!-- bottom cards -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxzd2ltbWluZ3xlbnwwfDB8fHwxNzIxMDQzMjkxfDA&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Swimming</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1611195974226-a6a9be9dd763?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8Y2hlc3N8ZW58MHwwfHx8MTcyMTA0MzI0Nnww&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Chess</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1553778263-73a83bab9b0c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxmb290YmFsbHxlbnwwfDB8fHwxNzIxMDQzMjExfDA&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Football</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1624526267942-ab0ff8a3e972?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxjcmlja2V0fGVufDB8MHx8fDE3MjEwNDMxNTh8MA&ixlib=rb-4.0.3&q=80&w=1080"
                        alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Cricket</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <a href="#"
                    class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-md shadow-md hover:bg-purple-700 transition duration-300">
                    Eksplor Galeri
                </a>
            </div>
        </div>
    </div>
    {{-- galery end --}}

    {{-- news start --}}
    <div class="container mx-auto py-8 px-4">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-center w-full mb-8 lg:mb-16" data-aos="fade" data-aos-once="true">
            Ketahui kegiatan-kegiatan apa saja yang sedang berlangsung di Fajar Harapan
        </h1>

        <!-- Grid layout for Trending and Events -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6" data-aos="fade-up" data-aos-once="true">
            <!-- Trending Card -->
            <div class="col-span-2">
                <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
                    <div
                        class="absolute top-2 left-2 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Trending
                    </div>
                    <div class="relative group">
                        <img src="{{ asset('Image/img1.jpg') }}" alt=""
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
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
            <div class="col-span-2 space-y-4" data-aos="fade-down" data-aos-once="true">
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
        <div class="text-center mt-8">
            <button class="bg-purple-600 text-white px-6 py-3 rounded-full hover:bg-purple-700 transition">
                Berita Lainnya
            </button>
        </div>
    </div>
    {{-- news end     --}}

    <x-review></x-review>

    <div class="flex flex-col lg:flex-row items-center bg-[#5959CD] rounded-lg mx-6 lg:mx-40 mb-12" data-aos="fade"
        data-aos-once="true">
        <div class="flex lg:w-1/2 w-full lg:h-auto lg:bm-0 rounded-lg">
            <img src="{{ asset('icon/dd.png') }}" alt="" class="w-full h-96 object-cover rounded-l-lg">
        </div>
        <div class="lg:w-1/2 w-full text-white rounded-lg lg:px-12 p-6 lg:py-0">
            <h2 class="text- lg:text-md uppercase font-semibold tracking-wider text-center lg:text-left">
                Kami adalah jawaban terbaik yang pernah Anda temukan
            </h2>
            <h1 class="text-2xl lg:text-3xl font-bold text-center lg:text-left my-6">
                Tunggu apalagi? <br> <span class="text-orange-400">Segera bergabung</span> bersama keluarga besar kami
                sekarang dan rasakan perubahan yang terjadi di hidup Anda!
            </h1>
            <div class="flex justify-center lg:justify-start mt-8">
                <button class="bg-orange-400 text-white py-3 px-8 rounded-lg shadow-lg hover:bg-orange-500">
                    Daftar Sekarang
                </button>
            </div>
        </div>
    </div>

    {{-- partnership start --}}
    <section data-aos="fade-up" data-aos-once="true">
        <div class="w-full text-center text-4xl font-semibold mt-12">Kerjasama</div>
        <div class="relative flex overflow-hidden space-x-16 group my-12">
            <!-- Left Blur -->
            <div
                class="absolute inset-y-0 left-0 w-48 bg-gradient-to-r from-white to-transparent pointer-events-none blur-[1px] z-10">
            </div>

            <!-- Scrolling Images -->
            <div class="flex space-x-16 animate-loop-scroll group-hover:paused">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO KABUPATEN BALANGAN.png') }}"
                    class="max-w-none w-42 h-32" alt="image0">
                <img loading="lazy"
                    src="{{ asset('logo-sponsor/download-logo-kabupaten-hulu-sungai-utara-enkosa.png') }}"
                    class="max-w-none w-42 h-32" alt="image1">
                <img loading="lazy" src="{{ asset('logo-sponsor/Kab Hulu Sungai Tengah.png') }}"
                    class="max-w-none w-42 h-32" alt="image2">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Hulu_Sungai_Selatan.png') }}"
                    class="max-w-none w-42 h-32" alt="image3">
                <img loading="lazy" src="{{ asset('logo-sponsor/banjarbaru-removebg-preview.png') }}"
                    class="max-w-none w-42 h-32" alt="image4">
                <img loading="lazy" src="{{ asset('logo-sponsor/Banjarmasin.png') }}" class="max-w-none w-42 h-32"
                    alt="image5">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO_KAB_BANJAR.png') }}"
                    class="max-w-none w-42 h-32" alt="image6">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Kotabaru.png') }}"
                    class="max-w-none w-42 h-32" alt="image7">
                <img loading="lazy" src="{{ asset('logo-sponsor/kabupaten barito kuala.png') }}"
                    class="max-w-none w-42 h-32" alt="image8">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah_bumbu.png') }}" class="max-w-none w-42 h-32"
                    alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah-laut.png') }}" class="max-w-none w-42 h-32"
                    alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tabalong.png') }}" class="max-w-none w-42 h-32"
                    alt="image9">
            </div>

            <!-- Hidden Scrolling Images for Loop -->
            <div class="flex animate-loop-scroll space-x-16 group-hover:paused" aria-hidden="true">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO KABUPATEN BALANGAN.png') }}"
                    class="max-w-none w-42 h-32" alt="image0">
                <img loading="lazy"
                    src="{{ asset('logo-sponsor/download-logo-kabupaten-hulu-sungai-utara-enkosa.png') }}"
                    class="max-w-none w-42 h-32" alt="image1">
                <img loading="lazy" src="{{ asset('logo-sponsor/Kab Hulu Sungai Tengah.png') }}"
                    class="max-w-none w-42 h-32" alt="image2">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Hulu_Sungai_Selatan.png') }}"
                    class="max-w-none w-42 h-32" alt="image3">
                <img loading="lazy" src="{{ asset('logo-sponsor/banjarbaru-removebg-preview.png') }}"
                    class="max-w-none w-42 h-32" alt="image4">
                <img loading="lazy" src="{{ asset('logo-sponsor/Banjarmasin.png') }}" class="max-w-none w-42 h-32"
                    alt="image5">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO_KAB_BANJAR.png') }}"
                    class="max-w-none w-42 h-32" alt="image6">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Kotabaru.png') }}"
                    class="max-w-none w-42 h-32" alt="image7">
                <img loading="lazy" src="{{ asset('logo-sponsor/kabupaten barito kuala.png') }}"
                    class="max-w-none w-42 h-32" alt="image8">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah_bumbu.png') }}" class="max-w-none w-42 h-32"
                    alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah-laut.png') }}" class="max-w-none w-42 h-32"
                    alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tabalong.png') }}" class="max-w-none w-42 h-32"
                    alt="image9">
            </div>
            <!-- Right Blur -->
            <div
                class="absolute inset-y-0 right-0 w-48 bg-gradient-to-l from-white to-transparent pointer-events-none blur-[1px] z-10">
            </div>
        </div>
    </section>
    {{-- partnership end --}}

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])


</body>

</html>
