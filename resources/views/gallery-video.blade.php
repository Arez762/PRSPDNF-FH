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

    <x-nav-v2></x-nav-v2>

    <section class="relative bg-cover bg-center lg:h-96 h-48 lg:pt-24 pt-2"
        style="background-image: url('{{ asset('Image/Nav-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10 text-center justify-center text-white py-20">
            <!-- Top Small Title -->
            <h3 class="text-md lg:text-2xl text-white">Galeri</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-12 lg:w-20 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Galeri Video</h1>
        </div>
    </section>

    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
        <div class="my-4">
            <p class="text-lg lg:text-2xl font-bold">Channel Youtube <a href="https://www.youtube.com/@Fajar_harapan" class="text-orange-500">Fajar Harapan</a></p>
            <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
        </div>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 py-4">
            <div>
                <iframe class="w-full h-64 rounded-lg"
                    src="https://www.youtube.com/embed/Sy3Ufoh0Cfg?si=GfF8OSvUWpPvDj7Y" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-lg"
                    src="https://www.youtube.com/embed/-XBFN3d5kY0?si=6KGfXBHQRS1hIwz0" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-lg"
                    src="https://www.youtube.com/embed/IGKAJo8__9s?si=vHZnx9zTciRhWvPi" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-lg"
                    src="https://www.youtube.com/embed/Sy3Ufoh0Cfg?si=GfF8OSvUWpPvDj7Y" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-lg"
                    src="https://www.youtube.com/embed/Sy3Ufoh0Cfg?si=GfF8OSvUWpPvDj7Y" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            <div>
                <iframe class="w-full h-64 rounded-lg"
                    src="https://www.youtube.com/embed/Sy3Ufoh0Cfg?si=GfF8OSvUWpPvDj7Y" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

        </div>
    </div>



    <footer class="bg-[#697077] dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <!-- Logo Section -->
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <!-- Logo with responsive sizing -->
                    <img src="{{ asset('icon/Logo PRSPDNF FH.png') }}" class="h-8 md:h-10 lg:h-12"
                        alt="PRSPDNF Logo" />

                    <div>
                        <!-- Text with responsive font sizes -->
                        <span class="flex uppercase text-white text-xs md:text-sm lg:text-base">PRSPDNF</span>
                        <span class="flex font-semibold text-white text-sm md:text-lg lg:text-xl">Fajar Harapan</span>
                    </div>
                </a>
            </div>



            <!-- Footer Bottom -->
            <hr class="my-6 border-white sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-white sm:text-center dark:text-white">© 2024 <a href="#"
                        class="hover:underline">Magang PRSPDNF FH</a>@ All Rights Reserved.</span>
                <div class="text-white flex mt-4 sm:justify-center sm:mt-0 space-x-4">
                    <a href="https://github.com/themesberg/flowbite" class="hover:underline">Home</a>
                    <a href="https://github.com/themesberg/flowbite" class="hover:underline">About us</a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
