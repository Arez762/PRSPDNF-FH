<!DOCTYPE html>
<html lang="en">

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
    <title>PRSPDNF</title>
</head>

<body class="bg-[#F3F4F8] font-poppins flex flex-col min-h-screen">

    <section class="relative z-40 pt-4 md:py-6 lg:py-8">
        <div class="container mx-auto py-8 px-4">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Left Image Section -->
                <div class="flex items-center justify-center rounded-xl" data-aos="fade-down">
                    <div class="w-full h-full flex items-center justify-center">
                        <!-- Placeholder for Image -->
                        <img src="{{ asset('Image/Background/bg-program-min.JPG') }}" alt=""
                            class="w-full h-full rounded-tl-[80px] rounded-br-[80px] shadow-md transition-opacity duration-500 opacity-0 lazyload"
                            loading="lazy" onload="this.style.opacity=1">

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
                            class="flex me-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Fisik</p>
                        </button>

                        <div id="dropdownLeftEnd1"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 rounded-b-xl shadow-lg transition-transform duration-300 ease-in-out">
                            <div
                                class="border-2 rounded-b-xl border-[#FC6C3F] bg-gradient-to-b from-white to-gray-50 dark:from-gray-800 dark:to-gray-700">
                                <ul class="py-3 text-sm text-gray-700 dark:text-gray-200 text-start space-y-2"
                                    aria-labelledby="dropdownLeftEndButton1">
                                    <li class="px-4">
                                        <p class="font-semibold text-[#FC6C3F] underline">Olahraga Kesehatan Jasmani</p>
                                        <p class="pt-1 text-gray-600 dark:text-gray-300">Program ini bertujuan untuk
                                            menjaga kebugaran tubuh dan
                                            kesehatan jasmani melalui aktivitas fisik teratur, seperti senam atau
                                            latihan ringan.</p>
                                    </li>
                                    <li class="px-4">
                                        <p class="font-semibold text-[#FC6C3F] underline">Olahraga Prestasi (Atletik,
                                            Judo, Renang, dan Tenis
                                            Meja Netra)</p>
                                        <div class="pt-1 text-gray-600 dark:text-gray-300 mt-1">
                                            <ul class="list-disc pl-5 space-y-1">
                                                <li><strong class="text-gray-800 dark:text-gray-200">Atletik:</strong>
                                                    Latihan dan pengembangan
                                                    kemampuan dasar atletik seperti lari, lompat, dan lempar.
                                                </li>
                                                <li><strong class="text-gray-800 dark:text-gray-200">Judo:</strong>
                                                    Latihan teknik-teknik bela
                                                    diri judo yang disesuaikan dengan kebutuhan peserta didik.
                                                </li>
                                                <li><strong class="text-gray-800 dark:text-gray-200">Renang:</strong>
                                                    Pembelajaran teknik
                                                    berenang yang bertujuan untuk meningkatkan kepercayaan diri dan
                                                    kemampuan berenang.
                                                </li>
                                                <li><strong class="text-gray-800 dark:text-gray-200">Tenis Meja
                                                        Netra:</strong> Latihan dan
                                                    pengembangan kemampuan bermain tenis meja untuk peserta didik dengan
                                                    gangguan penglihatan,
                                                    menggunakan teknik dan peralatan khusus.
                                                </li>
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
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-transform duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton2">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Baca tulis Al Qur'an</p>
                                        <p class="block px-4 pb-1">Program untuk membantu peserta didik dalam belajar
                                            membaca dan menulis huruf hijaiyah hingga dapat membaca Al-Qur'an dengan
                                            baik.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Pembacaan Maulid</p>
                                        <p class="block px-4 pb-1">Kegiatan pembacaan syair-syair maulid untuk
                                            memperdalam pemahaman sejarah dan nilai-nilai kehidupan Rasulullah.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Ceramah Agama</p>
                                        <p class="block px-4 pb-1">Penyampaian ceramah agama untuk memperkuat keimanan
                                            dan memberikan pemahaman yang baik mengenai ajaran agama.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Tuntunan Ibadah</p>
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
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-all duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton3">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Orientasi Mobilitas</p>
                                        <p class="block px-4 pb-1">Pelatihan untuk membantu peserta didik dalam
                                            mengenali lingkungan sekitar serta mengembangkan kemampuan bergerak secara
                                            mandiri.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Activity of Daily Living (ADL)</p>
                                        <p class="block px-4 pb-1">Pembelajaran dan pelatihan kegiatan sehari-hari
                                            seperti berpakaian, makan, dan menjaga kebersihan diri agar peserta didik
                                            dapat lebih mandiri.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Pembinaan Kepercayaan Diri dan Motivasi
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
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-all duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton4">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Menjahit</p>
                                        <p class="block px-4 pb-1"> Pembelajaran keterampilan menjahit untuk
                                            menghasilkan berbagai jenis pakaian atau kerajinan tangan.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Komputer</p>
                                        <p class="block px-4 pb-1">Pelatihan dasar penggunaan komputer dan aplikasi
                                            yang berguna untuk menunjang keahlian di bidang teknologi informasi.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Tata Boga</p>
                                        <p class="block px-4 pb-1">Pelatihan memasak dan menyiapkan hidangan, yang
                                            meliputi teori dasar hingga praktik memasak berbagai jenis makanan.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Budidaya Ikan</p>
                                        <p class="block px-4 pb-1"> Pengajaran teknik budidaya ikan yang mencakup
                                            pemeliharaan, pemberian pakan, dan pengelolaan kolam.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Sport Massage dan Shiatsu</p>
                                        <p class="block px-4 pb-1">Pelatihan keterampilan pijat olahraga dan teknik
                                            shiatsu untuk meningkatkan keterampilan dalam bidang kesehatan dan
                                            relaksasi.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Musik</p>
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
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-opacity duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton5">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">SDLB (Sekolah Dasar Luar Biasa)</p>
                                        <p class="block px-4 pb-1">Pendidikan dasar bagi anak berkebutuhan khusus,
                                            memberikan pengajaran yang disesuaikan dengan kemampuan dan kebutuhan siswa.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">SMPLB (Sekolah Menegah Pertama Luar Biasa)
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
