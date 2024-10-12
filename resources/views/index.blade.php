<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet" />
    <link href="../path/to/src/pagedone.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>PRSPDNF FH</title>
</head>

<body class="bg-[#F3F4F8] font-poppins">

    <x-nav-v2></x-nav-v2>

    <section class="relative bg-[#F3F4F8] dark:bg-gray-900 z-10 pt-16 lg:pt-32">
        <!-- Circles Decoration (Left) -->
        <div class="absolute top-50 left-0 z-0">
            <div class="w-20 h-20 sm:w-32 sm:h-32 md:w-40 md:h-40 bg-orange-500 rounded-full"></div>
            <div class="w-10 h-10 sm:w-16 sm:h-16 md:w-20 md:h-20 bg-orange-400 rounded-full mt-4 ml-8"></div>
            <div class="w-5 h-5 sm:w-8 sm:h-8 md:w-10 md:h-10 bg-orange-300 rounded-full mt-2 ml-16"></div>
        </div>

        <div class="absolute top-30 right-0 z-0 mt-6 md:mt-0 lg:mt-0">
            <div class="w-5 h-5 sm:w-8 sm:h-8 md:w-10 md:h-10 bg-orange-500 rounded-full ml-4 mt-4"></div>
            <div class="w-10 h-10 sm:w-16 sm:h-16 md:w-20 md:h-20 bg-orange-400 rounded-full mt-4 ml-8"></div>
            <div class="w-20 h-20 sm:w-32 sm:h-32 md:w-40 md:h-40 bg-orange-300 rounded-full mt-4"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12 lg:px-12">
            <h1
                class="mb-8 pt-6 lg:pt-0 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-5xl dark:text-white">
                Langkah Kecil Menuju Kemandirian Besar
                <span class="block mt-2 lg:mt-4 text-[#FC6C3F]">Bersama Kami di Fajar Harapan!</span>
            </h1>

            <p
                class="mb-8 text-xs font-normal text-gray-500 md:text-base lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Dengan kasih dan kepedulian, kami membimbing setiap individu untuk bangkit dari keterbatasan, berdaya
                secara sosial dan ekonomi, serta menjalani hidup yang bermartabat.
            </p>

            <div class="flex flex-col lg:mb-4 lg:space-y-4 sm:flex-row sm:justify-center space-y-0 sm:space-x-4">
                <a href="/pelayanan-alur"
                    class="inline-flex justify-center items-center py-3 px-5 text-sm md:text-sm lg:text-base font-medium text-[#FC6C3F] bg-white border border-orange-500 rounded-lg shadow-md hover:bg-gray-100 focus:ring-4 focus:ring-orange-100">
                    Lihat alur Layanan
                </a>
                {{-- <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white bg-orange-500 rounded-lg shadow-md hover:bg-orange-600 focus:ring-4 focus:ring-orange-300">
                    Daftar Sekarang
                </a> --}}
            </div>
        </div>

        <!-- Gambar dengan margin lebih kecil di mobile -->
        <img src="{{ asset('prspdnf/header-foto.png') }}" alt="Children Image"
            class="w-screen lg:h-auto md:h-auto h-52 object-cover  lg:mb-8">
    </section>

    {{-- about start --}}
    <section class=" pt-8 md:pt-10 lg:pt-12 mx-4" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="text-center">
                <p class="text-xl lg:text-3xl md:text-3xl leading-9 font-extrabold text-[#FC6C3F]">
                    Panti Rehabilitasi Sosial Penyandang Disabilitas Netra dan Fisik <br class="hidden lg:flex"> Fajar
                    Harapan
                </p>
                <p class="mt-4 text-xs md:text-sm lg:text-lg leading-7 text-[#21272A]  lg:text-center text-justify">
                    Merupakan Unit Pelaksana Teknis Daerah Dinas Sosial Provinsi Kalimantan Selatan yang bertugas
                    melaksanakan kegiatan operasional Dinas Sosial di bidang pelayanan, bimbingan, dan rehabilitasi
                    sosial yang bersifat kuratif, rehabilitatif, promotif dalam bentuk bimbingan pengetahuan dasar
                    pendidikan, fisik, mental, sosial, pelatihan keterampilan, resosialisasi bimbingan lanjut serta
                    pelayanan rujukan bagi para penyandang disabilitas sensorik netra dan multi layanan disabilitas
                    fisik agar mampu mandiri dan berperan aktif dalam kehidupan bermasyarakat.
                </p>
            </div>

            <div class="container mx-auto p-6 flex flex-wrap justify-center">
                <!-- Card 1 -->
                <a class="block" href="/profile-visidanmisi">
                    <div
                        class="bg-white rounded-lg shadow-lg m-4 w-80 transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('Image/bg-visimisi.jpg') }}" alt="Visi dan Misi"
                            class="rounded-t-lg w-full h-40 object-cover">
                        <div class="p-6">
                            <h4 class="text-lg text-[#FC6C3F] font-semibold mb-2">Profile</h4>
                            <h3 class="text-xl font-semibold mb-6">Visi dan Misi</h3>
                        </div>
                    </div>
                </a>
                <!-- Card 2 -->
                <a class="block" href="/profile-sejarah">
                    <div
                        class="bg-white rounded-lg shadow-lg m-4 w-80 transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('Image/prspdnf_1.jpg') }}" alt="Sejarah"
                            class="rounded-t-lg w-full h-40 object-cover">
                        <div class="p-6">
                            <h4 class="text-lg text-[#FC6C3F] font-semibold mb-2">Profile</h4>
                            <h3 class="text-xl font-semibold mb-6">Sejarah</h3>
                        </div>
                    </div>
                </a>
                <!-- Card 3 -->
                <a class="block" href="/profile-tenagaahli">
                    <div
                        class="bg-white rounded-lg shadow-lg m-4 w-80 transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('prspdnf/IMG_E3659.JPG') }}" alt="Tenaga Ahli"
                            class="rounded-t-lg w-full h-40 object-cover">
                        <div class="p-6">
                            <h4 class="text-lg text-[#FC6C3F] font-semibold mb-2">Profile</h4>
                            <h3 class="text-xl font-semibold mb-6">Tenaga Ahli</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- about end --}}

    <!-- Section why Start -->
    <section id="count-section" class="py-8 md:py-10 lg:py-12 bg-white rounded-2xl shadow-lg mx-6 lg:mx-8"
        data-aos="fade-up">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <h2 class="text-center text-xl md:text-2xl lg:text-3xl font-bold text-[#21272A] mb-4">
                Kenapa harus di <span class="text-[#FC6C3F]">Fajar Harapan?</span>
            </h2>
            <!-- Section Description -->
            <p
                class="text-gray-600 max-w-2xl mx-auto mb-10 text-xs md:text-base lg:text-lg md:text-center lg:text-center text-justify leading-relaxed">
                Fajar Harapan berkomitmen membantu penyandang disabilitas mencapai kemandirian melalui layanan
                rehabilitasi lengkap, tenaga ahli berpengalaman, dan fasilitas ramah disabilitas. Kami mendukung
                pemulihan fisik, mental, dan sosial untuk hidup yang berdaya dan bermakna.
            </p>

            <!-- Cards Start -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                <!-- Card 1 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('icon/mood-check.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count1"></h3>
                        <p class="text-gray-600">client </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('icon/users-group.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count2"></h3>
                        <p class="text-gray-600">Tenaga ahli</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('icon/Vector_House.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count3"></h3>
                        <p class="text-gray-600">Fasilitas Rumah Disabilitas</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('icon/list-check.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count4"></h3>
                        <p class="text-gray-600">Program Pemberdayaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end why --}}

    {{-- service start --}}
    <section class="relative z-40 pt-4 md:py-6 lg:py-8">
        <div class="container mx-auto py-8 px-4">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Left Image Section -->
                <div class="flex items-center justify-center rounded-xl" data-aos="fade-down">
                    <div class="w-full h-full flex items-center justify-center">
                        <!-- Placeholder for Image -->
                        <img src="{{ asset('Image/DSC06900.JPG') }}" alt=""
                            class="w-full h-full rounded-tl-[80px] rounded-br-[80px] shadow-md">
                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="bg-white p-6 shadow-lg rounded-lg text-center relative z-50" data-aos="fade-up">
                    <h2 class="lg:text-2xl md:text-2xl text-xl font-bold mb-4">Program rehabilitasi yang ada di <span
                            class="text-[#FC6C3F]">Fajar Harapan?</span></h2>
                    <p class="text-gray-600 mb-6">
                        Fajar harapan menyediakan beberapa program yang dapat membantu penyandang disabilitas seperti:
                    </p>

                    <!-- Accordion Section -->
                    <div class="space-y-2 relative">
                        <!-- Button 1 -->
                        <button id="dropdownLeftEndButton1" data-dropdown-toggle="dropdownLeftEnd1"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Fisik</p>
                        </button>

                        <div id="dropdownLeftEnd1"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 rounded-b-xl">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton1">
                                    <li>
                                        <p class="block px-4 py-1 underline">Olahraga Kesehatan Jasmani</p>
                                        <p class="block px-4 pb-1">Program ini bertujuan untuk menjaga kebugaran tubuh
                                            dan kesehatan jasmani
                                            melalui aktivitas fisik teratur, seperti senam atau latihan ringan.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline">Olahraga Prestasi (Atletik, Judo, Renang,
                                            dan Tenis Meja Netra)</p>
                                        <div class="block px-4 pb-1 mt-1">
                                            <ul class="list-disc pl-5">
                                                <li><strong>Atletik:</strong> Latihan dan pengembangan kemampuan dasar
                                                    atletik seperti lari,
                                                    lompat, dan lempar.</li>
                                                <li><strong>Judo:</strong> Latihan teknik-teknik bela diri judo yang
                                                    disesuaikan dengan kebutuhan
                                                    peserta didik.</li>
                                                <li><strong>Renang:</strong> Pembelajaran teknik berenang yang bertujuan
                                                    untuk meningkatkan
                                                    kepercayaan diri dan kemampuan berenang.</li>
                                                <li><strong>Tenis Meja Netra:</strong> Latihan dan pengembangan
                                                    kemampuan bermain tenis meja untuk
                                                    peserta didik dengan gangguan penglihatan, menggunakan teknik dan
                                                    peralatan khusus.</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton2" data-dropdown-toggle="dropdownLeftEnd2"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Mental Spiritual</p>
                        </button>

                        <div id="dropdownLeftEnd2"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton2">
                                    <li>
                                        <p class="block px-4 py-1 underline">Baca tulis Al Qur'an</p>
                                        <p class="block px-4 pb-1">Program untuk membantu peserta didik dalam belajar
                                            membaca dan menulis huruf hijaiyah hingga dapat membaca Al-Qur'an dengan
                                            baik.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Pembacaan Maulid</p>
                                        <p class="block px-4 pb-1">Kegiatan pembacaan syair-syair maulid untuk
                                            memperdalam pemahaman sejarah dan nilai-nilai kehidupan Rasulullah.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Ceramah Agama</p>
                                        <p class="block px-4 pb-1">Penyampaian ceramah agama untuk memperkuat keimanan
                                            dan memberikan pemahaman yang baik mengenai ajaran agama.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Tuntunan Ibadah</p>
                                        <p class="block px-4 pb-1">Pembinaan yang berfokus pada pengenalan dan praktik
                                            ibadah sehari-hari seperti sholat, wudhu, dan doa.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton3" data-dropdown-toggle="dropdownLeftEnd3"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Sosial</p>
                        </button>

                        <div id="dropdownLeftEnd3"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton3">
                                    <li>
                                        <p class="block px-4 py-1 underline">Orientasi Mobilitas</p>
                                        <p class="block px-4 pb-1">Pelatihan untuk membantu peserta didik dalam
                                            mengenali lingkungan sekitar serta mengembangkan kemampuan bergerak secara
                                            mandiri.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Activity of Daily Living (ADL)</p>
                                        <p class="block px-4 pb-1">Pembelajaran dan pelatihan kegiatan sehari-hari
                                            seperti berpakaian, makan, dan menjaga kebersihan diri agar peserta didik
                                            dapat lebih mandiri.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Pembinaan Kepercayaan Diri dan Motivasi
                                        </p>
                                        <p class="block px-4 pb-1">Program yang berfokus pada pengembangan rasa percaya
                                            diri dan motivasi diri melalui kegiatan yang membangun semangat serta sikap
                                            positif.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton4" data-dropdown-toggle="dropdownLeftEnd4"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-start items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Keterampilan atau Vokasional</p>
                        </button>

                        <div id="dropdownLeftEnd4"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton4">
                                    <li>
                                        <p class="block px-4 py-1 underline">Menjahit</p>
                                        <p class="block px-4 pb-1"> Pembelajaran keterampilan menjahit untuk
                                            menghasilkan berbagai jenis pakaian atau kerajinan tangan.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Komputer</p>
                                        <p class="block px-4 pb-1">Pelatihan dasar penggunaan komputer dan aplikasi
                                            yang berguna untuk menunjang keahlian di bidang teknologi informasi.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">Tata Boga</p>
                                        <p class="block px-4 pb-1">Pelatihan memasak dan menyiapkan hidangan, yang
                                            meliputi teori dasar hingga praktik memasak berbagai jenis makanan.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline">Budidaya Ikan</p>
                                        <p class="block px-4 pb-1"> Pengajaran teknik budidaya ikan yang mencakup
                                            pemeliharaan, pemberian pakan, dan pengelolaan kolam.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline">Sport Massage dan Shiatsu</p>
                                        <p class="block px-4 pb-1">Pelatihan keterampilan pijat olahraga dan teknik
                                            shiatsu untuk meningkatkan keterampilan dalam bidang kesehatan dan
                                            relaksasi.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline">Musik</p>
                                        <p class="block px-4 pb-1">Pembelajaran memainkan alat musik atau bernyanyi,
                                            serta mengembangkan bakat seni musik peserta didik.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton5" data-dropdown-toggle="dropdownLeftEnd5"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-start items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Pendidikan Formal</p>
                        </button>

                        <div id="dropdownLeftEnd5"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton5">
                                    <li>
                                        <p class="block px-4 py-1 underline">SDLB (Sekolah Dasar Luar Biasa)</p>
                                        <p class="block px-4 pb-1">Pendidikan dasar bagi anak berkebutuhan khusus,
                                            memberikan pengajaran yang disesuaikan dengan kemampuan dan kebutuhan siswa.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline">SMPLB (Sekolah Menegah Pertama Luar Biasa)
                                        </p>
                                        <p class="block px-4 pb-1">Pendidikan tingkat menengah pertama yang memberikan
                                            materi pelajaran dengan metode khusus agar peserta didik dapat mengembangkan
                                            pengetahuan dan keterampilan dasar.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline">SMALB (Sekolah Menengah Atas Luar Biasa)
                                        </p>
                                        <p class="block px-4 pb-1">Pendidikan tingkat menengah atas yang fokus pada
                                            persiapan peserta didik untuk memiliki pengetahuan akademis serta
                                            keterampilan yang diperlukan di dunia kerja atau kehidupan sehari-hari.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Repeat buttons for other dropdowns (Button 2, Button 3, etc.) as necessary -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- service end     --}}

    {{-- fasilitas start --}}
    <section class="z-10 " data-aos="fade">
        <div class="container mx-auto p-4">
            <div class="text-center mb-8">
                <h2 class="lg:text-3xl md:text-2xl text-xl font-bold text-[#FC6C3F] py-4">Fasilitas yang disediakan
                    di<span class="text-black"> Fajar Harapan</span></h2>
                <p class="text-gray-700 text-xs md:text-base lg:text-lg">Fajar Harapan menyediakan beberapa layanan
                    yang dapat membantu penyandang
                    disabilitas seperti:</p>
            </div>
            <!-- Section Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center justify-center">
                <!-- Grid of Facility Items -->
                <div class="col-span-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-2">
                    <!-- Facility Item -->
                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/office-building.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Perkantoran</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/school.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700 text-sm">Gedung Sekolah Luar Biasa</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/hotels.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700 text-sm">Gedung Asrama Putra</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/mosque.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Masjid</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/government.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Aula</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/musical-note (1).png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Musik</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/fork.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Makan</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/computer.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700 text-xs">Laboratorium Komputer Braille</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/dumbbell.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Fitness</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/open-book.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Perpustakaan</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/clinic.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Klinik Kesehatan</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/car.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Mobil Operasional</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div class="hidden lg:flex md:flex">
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/building.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Diklat</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <div
                        class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('icon/stay-house.png') }}" alt="" class="h-20 w-auto">
                        </div>
                        <h3 class="text-gray-700">Guest House</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                </div>
                <!-- Detail Section -->
                {{-- <div class="col-span-1 p-4 bg-white rounded-lg shadow">
                        <div class="w-full h-80 bg-gray-300 rounded mb-4"></div>
                        <h3 class="text-xl font-semibold mb-2">Fasilitas 1</h3>
                        <p class="text-gray-600 mb-4">
                            Lorem ipsum dolor sit amet consectetur. Nunc mattis vitae ridiculus at lorem tortor
                            vestibulum. Nam elit tincidunt urna non vulputate accumsan.
                        </p>
                        <a href="#" class="text-indigo-600 font-semibold">Lihat dalam 360° &rarr;</a>
                    </div> --}}
            </div>

            <!-- Load More Button -->
            {{-- <div class="flex justify-center mt-6">
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                        Lihat Lebih Banyak
                    </button>
                </div> --}}
        </div>
    </section>
    {{-- fasilitas end --}}

    {{-- gallery start --}}
    <div data-aos="fade">
        <div class="container mx-auto px-4 lg:py-16 py-8 text-center justify-center lg:px-40">
            <h2 class="lg:text-3xl md:text-2xl text-xl font-extrabold text-gray-900 mb-8">
                Jelajahi momen-momen inspiratif di <span class="text-orange-500">Fajar Harapan!</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Large item -->
                <div class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC06290.JPG') }}" alt="Nature"
                        class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="lg:text-2xl md:text-2xl text-xl font-bold text-white">Lihat Lebih Banyak</h3>
                        </div>
                    </div>
                </div>

                <!-- Two small items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC04537.JPG') }}" alt="Food" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC04598.JPG') }}" alt="Technology"
                        class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </div>

                <!-- Three medium items -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC06807.JPG') }}" alt="Travel" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC06808.JPG') }}" alt="Art" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </div>

                <!-- bottom cards -->
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC07366.JPG') }}" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC07358.JPG') }}" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC06901.JPG') }}" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>

                        </div>
                    </div>
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('prspdnf/DSC07029.JPG') }}" alt="Sport" class="w-full h-48 object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- gallery end --}}

    {{-- news start --}}
    <div id="section-berita" class="container mx-auto py-8 px-4" data-aos="fade-up">
        <!-- Title -->
        <h1 class="lg:text-3xl md:text-2xl text-xl font-bold text-center w-full mb-8 lg:mb-16">
            Ketahui kegiatan-kegiatan apa saja yang sedang berlangsung di Fajar Harapan
        </h1>

        <!-- Grid layout for Trending and Events -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
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
                                <h2 class="text-white lg:text-2xl font-semibold mb-2">
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
        {{-- <div class="text-right mt-8">
            <button class="bg-purple-600 text-white px-6 py-3 rounded-full hover:bg-purple-700 transition">
                Berita Lainnya
            </button>
        </div> --}}
    </div>
    {{-- news end --}}

    {{-- review  start --}}
    <style>
        .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
        .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
            width: 16px !important;
            height: 4px !important;
            border-radius: 5px !important;
            margin: 0 6px !important;
        }

        .swiper-pagination {
            bottom: 2px !important;
        }

        .swiper-wrapper {
            height: max-content !important;
            width: max-content !important;
            padding-bottom: 64px;
        }

        .swiper-pagination-bullet-active {
            background: #4F46E5 !important;
        }

        .swiper-slide.swiper-slide-active>.slide_active\:border-indigo-600 {
            --tw-border-opacity: 1;
            border-color: rgb(79 70 229 / var(--tw-border-opacity));
        }

        .swiper-slide.swiper-slide-active>.group .slide_active\:text-gray-800 {
            ---tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
        }
    </style>
    <section class=" bg-white lg:mt-4 mx-4 lg:mx-12 rounded-xl shadow-xl md:mx-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="py-8 lg:py-12 ">
                <h2 class="text-xl lg:text-3xl md:text-2xl text-center font-bold text-gray-900 "> Apa yang dikatakan
                    oleh <span class="text-orange-500">Client kami?</span></h2>
            </div>
            <!--Slider wrapper-->
            <div class="swiper mySwiper lg:pb-8 pb-2">
                <div class="swiper-wrapper w-max">
                    <div class="swiper-slide">
                        <div
                            class="group bg-white border border-solid border-gray-300 rounded-xl p-6 transition-all duration-500  w-full mx-auto hover:border-indigo-600 hover:shadow-sm slide_active:border-indigo-600">
                            <div class="">
                                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500  ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="text-base font-semibold text-indigo-600">4.9</span>
                                </div>
                                <p
                                    class="text-base text-gray-600 leading-6  transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                                    Pagedone has made it possible for me to stay on top of my portfolio and make
                                    informed
                                    decisions
                                    quickly and easily.
                                </p>
                            </div>
                            <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                                <img class="rounded-full h-10 w-10 object-cover"
                                    src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar" />
                                <div class="block">
                                    <h5 class="text-gray-900 font-medium transition-all duration-500  mb-1">Jane D</h5>
                                    <span class="text-sm leading-4 text-gray-500">CEO </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="group bg-white border border-solid border-gray-300 flex justify-between flex-col rounded-xl p-6 transition-all duration-500  w-full mx-auto hover:border-indigo-600 slide_active:border-indigo-600 hover:shadow-sm">
                            <div class="">
                                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500  ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="text-base font-semibold text-indigo-600">4.9</span>
                                </div>
                                <p
                                    class="text-base text-gray-600 leading-6  transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                                    Thanks to pagedone, I feel more informed and confident about my investment decisions
                                    than
                                    ever
                                    before.
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-solid border-gray-200">
                                <img class="rounded-full h-10 w-10 object-cover"
                                    src="https://pagedone.io/asset/uploads/1696229994.png" alt="avatar" />
                                <div class="block">
                                    <h5 class="text-gray-900 font-medium transition-all duration-500  mb-1">Harsh P.
                                    </h5>
                                    <span class="text-sm leading-4 text-gray-500">Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class=" flex justify-between flex-col lg:w-full group bg-white border border-solid border-gray-300 rounded-xl p-6 transition-all duration-500  w-full mx-auto slide_active:border-indigo-600 hover:border-indigo-600 hover:shadow-sm">
                            <div class="">
                                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500  ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="text-base font-semibold text-indigo-600">4.9</span>
                                </div>
                                <p
                                    class="text-base text-gray-600 leading-6  transition-all duration-500  pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                                    The customer service team at pagedone went above and beyond to help me resolve a
                                    billing
                                    issue.
                                </p>
                            </div>
                            <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                                <img class="rounded-full h-10 w-10 object-cover"
                                    src="	https://pagedone.io/asset/uploads/1696230027.png" alt="avatar" />
                                <div class="block">
                                    <h5 class="text-gray-900 font-medium transition-all duration-500  mb-1">Alex K.
                                    </h5>
                                    <span class="text-sm leading-4 text-gray-500">Design Lead</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="group bg-white border border-solid border-gray-300 rounded-xl p-6 transition-all duration-500  w-full mx-auto slide_active:border-indigo-600 hover:border-indigo-600 hover:shadow-sm">
                            <div class="">
                                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500  ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="text-base font-semibold text-indigo-600">4.9</span>
                                </div>
                                <p
                                    class="text-base text-gray-600 leading-6  transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                                    Pagedone has made it possible for me to stay on top of my portfolio and make
                                    informed
                                    decisions
                                    quickly and easily.
                                </p>
                            </div>
                            <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                                <img class="rounded-full h-10 w-10 object-cover"
                                    src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar" />
                                <div class="block">
                                    <h5 class="text-gray-900 font-medium transition-all duration-500  mb-1">Jane D</h5>
                                    <span class="text-sm leading-4 text-gray-500">CEO </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="group bg-white border border-solid border-gray-300 flex justify-between flex-col rounded-xl p-6 transition-all duration-500  w-full mx-auto slide_active:border-indigo-600 hover:border-indigo-600 hover:shadow-sm ">
                            <div class="">
                                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500  ">
                                    <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span class="text-base font-semibold text-indigo-600">4.9</span>
                                </div>
                                <p
                                    class="text-base text-gray-600 leading-6  transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                                    Thanks to pagedone, I feel more informed and confident about my investment decisions
                                    than
                                    ever
                                    before.
                                </p>
                            </div>
                            <div class="flex items-center gap-5 pt-5 border-t border-solid border-gray-200">
                                <img class="rounded-full h-10 w-10 object-cover"
                                    src="https://pagedone.io/asset/uploads/1696229994.png" alt="avatar" />
                                <div class="block">
                                    <h5 class="text-gray-900 font-medium transition-all duration-500  mb-1">Harsh P.
                                    </h5>
                                    <span class="text-sm leading-4 text-gray-500">Product Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination py-8"></div>
            </div>
        </div>
    </section>
    {{-- review end --}}

    <div class="flex flex-col lg:flex-row items-center bg-[#5959CD] rounded-xl shadow-xl md:mx-8 mx-4 lg:mx-40 my-12">
        <div class="flex lg:w-1/2 w-full lg:h-auto lg:mb-0 rounded-xl">
            <img src="{{ asset('icon/dd.png') }}" alt=""
                class="w-full h-auto lg:h-96 md:h-72 object-cover rounded-t-xl lg:rounded-xl">
        </div>
        <div class="lg:w-1/2 w-full text-white rounded-lg lg:px-12 p-6 lg:py-0">
            <h2 class="text- lg:text-md uppercase font-semibold tracking-wider text-center lg:text-left">
                Kami adalah jawaban terbaik yang pernah Anda temukan
            </h2>
            <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-center lg:text-left my-6">
                Tunggu apalagi? <br> <span class="text-orange-400">Segera bergabung</span> bersama keluarga besar kami
                sekarang dan rasakan perubahan yang terjadi di hidup Anda!
            </h1>
            <div class="flex text-sm lg:text-base justify-center lg:justify-start mt-8">
                <button class="bg-orange-400 text-white py-3 px-8 rounded-lg shadow-lg hover:bg-orange-500">
                    Daftar Sekarang
                </button>
            </div>
        </div>
    </div>

    {{-- kerjasama --}}
    <section class="py-6 rounded-xl mx-4 md:mx-8 lg:mx-12 my-8 bg-white shadow-xl" data-aos="fade-up">
        <div class="w-full text-center text-xl md:text-2xl lg:text-3xl font-semibold lg:pb-8 md:pb-4 pb-4">Kerjasama
        </div>
        <div class="relative flex overflow-hidden space-x-8 md:space-x-16 group md:pb-4 pb-2">
            <!-- Left Blur -->
            <div
                class=" absolute inset-y-0 left-0 w-24 md:w-48 bg-gradient-to-r from-white to-transparent pointer-events-none blur-[3px] z-10">
            </div>

            <div class="flex space-x-8 md:space-x-16 animate-loop-scroll group-hover:paused">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO KABUPATEN BALANGAN.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image0">
                <img loading="lazy"
                    src="{{ asset('logo-sponsor/download-logo-kabupaten-hulu-sungai-utara-enkosa.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image1">
                <img loading="lazy" src="{{ asset('logo-sponsor/Kab Hulu Sungai Tengah.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image2">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Hulu_Sungai_Selatan.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image3">
                <img loading="lazy" src="{{ asset('logo-sponsor/banjarbaru-removebg-preview.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image4">
                <img loading="lazy" src="{{ asset('logo-sponsor/Banjarmasin.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image5">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO_KAB_BANJAR.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image6">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Kotabaru.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image7">
                <img loading="lazy" src="{{ asset('logo-sponsor/kabupaten barito kuala.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image8">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah_bumbu.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah-laut.png') }}" class="max-w-none h-16 lg:h-32"
                    alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tabalong.png') }}" class="max-w-none h-16 lg:h-32"
                    alt="image9">
            </div>

            <!-- Hidden Scrolling Images for Loop -->
            <div class="flex space-x-8 md:space-x-16 animate-loop-scroll group-hover:paused" aria-hidden="true">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO KABUPATEN BALANGAN.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image0">
                <img loading="lazy"
                    src="{{ asset('logo-sponsor/download-logo-kabupaten-hulu-sungai-utara-enkosa.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image1">
                <img loading="lazy" src="{{ asset('logo-sponsor/Kab Hulu Sungai Tengah.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image2">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Hulu_Sungai_Selatan.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image3">
                <img loading="lazy" src="{{ asset('logo-sponsor/banjarbaru-removebg-preview.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image4">
                <img loading="lazy" src="{{ asset('logo-sponsor/Banjarmasin.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image5">
                <img loading="lazy" src="{{ asset('logo-sponsor/LOGO_KAB_BANJAR.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image6">
                <img loading="lazy" src="{{ asset('logo-sponsor/Lambang_Kabupaten_Kotabaru.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image7">
                <img loading="lazy" src="{{ asset('logo-sponsor/kabupaten barito kuala.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image8">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah_bumbu.png') }}"
                    class="max-w-none h-16 lg:h-32" alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tanah-laut.png') }}" class="max-w-none h-16 lg:h-32"
                    alt="image9">
                <img loading="lazy" src="{{ asset('logo-sponsor/tabalong.png') }}" class="max-w-none h-16 lg:h-32"
                    alt="image9">
            </div>


            <div
                class="absolute inset-y-0 right-0 w-24 md:w-48 bg-gradient-to-l from-white to-transparent pointer-events-none blur-[3px] z-10">
            </div>
        </div>
    </section>
    {{-- kerjasama end --}}

    {{-- footer start --}}
    <footer class="bg-[#697077] dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <!-- Logo Section -->
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <!-- Logo with responsive sizing -->
                    <img src="{{ asset('icon/Logo PRSPDNF FH.png') }}" class="h-8 md:h-10 lg:h-12"
                        alt="PRSPDNF Logo" />

                    <div class="flex flex-col items-center">
                        <!-- Text with responsive font sizes -->
                        <span class="uppercase text-center text-white text-xs md:text-sm lg:text-base">PRSPDNF</span>
                        <span class="font-semibold text-white text-sm md:text-lg lg:text-xl">Fajar Harapan</span>
                    </div>

                </a>
                <!-- Extended Horizontal Line -->
                <hr class="my-6 border-white sm:mx-auto dark:border-gray-700 lg:my-8 w-full" />
            </div>

            <div class="flex flex-col md:flex-row md:justify-between">
                <!-- Google Maps Iframe Section -->
                <div class="flex flex-col lg:flex-row gap-6 my-4 ">
                    <!-- Map Section -->
                    <div class="relative w-full h-48 lg:w-64 lg:h-64">
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1636.6910057401503!2d114.84816214009834!3d-3.4349755711262553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de68107a087de0f%3A0xc044bbadaaf31076!2sPanti%20Rehabilitasi%20Sosial%20Penyandang%20Disabilitas%20Netra%20dan%20Fisik%20(PRSPDNF)%20Fajar%20Harapan!5e0!3m2!1sid!2sid!4v1727917508162!5m2!1sid!2sid"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>

                    <!-- Address and Contact Information Section -->
                    <div class="flex flex-col lg:text-sm md:text-sm text-xs w-64 text-white">
                        <p class=" font-semibold">Alamat Lengkap:</p>
                        <p>Jl. A. Yani, Sungai Paring, Kec. Martapura, Kabupaten Banjar, Kalimantan Selatan 70714</p>

                        <p class="mt-4  font-semibold">Kontak:</p>
                        <p>Telepon: (0511) 123-4567</p>

                        <p class="mt-4  font-semibold">Email:</p>
                        <p>info@prspdnf-fajarharapan.co.id</p>
                    </div>
                </div>

                <!-- Menus (Resources, Follow Us, Legal) -->
                <div class="grid grid-cols-2 gap-6 lg:grid-cols-4 md:grid-cols-3 mt-4 md:mt-0 md:ml-8 text-left pt-3">
                    <div>
                        <h2
                            class="mb-6 text-sm lg:text-base md:text-base font-semibold text-white uppercase dark:text-white">
                            Profile</h2>
                        <ul class="text-white dark:text-white font-medium">
                            <li class="mb-4 text-xs lg:text-base md:text-base ">
                                <a href="/profile-visidanmisi" class="hover:underline">Visi & Misi</a>
                            </li>
                            <li class="mb-4 text-xs lg:text-base md:text-base">
                                <a href="/profile-sejarah" class="hover:underline">Sejarah</a>
                            </li>
                            <li class="text-xs lg:text-base md:text-base">
                                <a href="/profile-tenagaahli" class="hover:underline">Tenaga Ahli</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2
                            class="mb-6 text-sm lg:text-base md:text-base font-semibold text-white uppercase dark:text-white">
                            Layanan</h2>
                        <ul class="text-white dark:text-white font-medium">
                            <li class="mb-4 text-xs lg:text-base md:text-base">
                                <a href="/pelayanan-persyaratan" class="hover:underline">Persyaratan</a>
                            </li>
                            <li class="text-xs lg:text-base md:text-base">
                                <a href="/pelayanan-alur" class="hover:underline">Alur Pelayanan</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2
                            class="mb-6 text-sm lg:text-base md:text-base font-semibold text-white uppercase dark:text-white">
                            Gallery</h2>
                        <ul class="text-white dark:text-white font-medium">
                            <li class="mb-4 text-xs lg:text-base md:text-base">
                                <a href="/gallery-foto" class="hover:underline">Foto</a>
                            </li>
                            <li class="text-xs lg:text-base md:text-base">
                                <a href="/gallery-video" class="hover:underline">Video</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Horizontal Icons Section for Join Us -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Join us</h2>
                        <ul class="flex space-x-5">
                            <a href="https://www.facebook.com/prspdnffajarharapan"
                                class="text-white hover:text-gray-900 dark:hover:text-white bg-gray-600 hover:bg-gray-300 p-1 rounded-full">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>

                            <a href="https://www.youtube.com/@Fajar_harapan"
                                class="text-white hover:text-gray-900 dark:hover:text-white ms-5 bg-gray-600 hover:bg-gray-300 p-1 rounded-full">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span class="sr-only">Twitter page</span>
                            </a>

                            <a href="https://www.instagram.com/prspdnffajarharapan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                class="text-white hover:text-gray-900 dark:hover:text-white ms-5 bg-gray-600 hover:bg-gray-300 p-1 rounded-full">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Instagram account</span>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <hr class="my-6 border-white sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between flex flex-col-reverse sm:flex-row">
                <span class="lg:text-sm md-text-sm text-xs text-white sm:text-center dark:text-white">
                    © 2024 <a href="#" class="hover:underline">Magang PRSPDNF FH</a> @ All Rights Reserved.
                </span>
                <div class="text-white flex mb-4 sm:justify-center sm:mb-0 space-x-4">
                    <a href="/" class="hover:underline">Home</a>
                    <a href="aboutus" class="hover:underline">About us</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer end --}}




    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="../path/to/src/pagedone.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 32,
            loop: true,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 32,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 32,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 32,
                },
            },
        });
    </script>
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])
</body>
</html>
