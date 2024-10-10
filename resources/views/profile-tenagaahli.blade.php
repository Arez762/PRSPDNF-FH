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
            <h3 class="text-md lg:text-2xl text-white">Profil</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-12 lg:w-20 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Tenaga Ahli</h1>
        </div>
    </section>

    <!-- component -->
    <div class="pb-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="h-auto w-full flex flex-col justify-start items-center">
                <div class="px-4 py-6 lg:w-2/4 mt-12 m-4 justify-start items-center" data-aos="fade">
                    <h2 class="text-[#FC6C3F] text-center text-2xl font-bold">Tim Profesional dengan Pengalaman dan
                        Dedikasi</h2>
                    <p class="text-center text-gray-700">
                        Dengan kasih dan kepedulian, kami membimbing setiap individu untuk bangkit dari keterbatasan,
                        berdaya secara sosial dan ekonomi, serta menjalani hidup yang bermartabat.
                    </p>
                </div>

                <div class="px-4 py-6 mb-10 lg:w-2/4 mt-12 m-4 justify-start items-center" data-aos="fade">
                    <p class="text-[#FC6C3F] text-center text-5xl font-bold mb-4">Pimpinan</p>
                </div>
            </div>
            <div class="grid gap-12 items-center md:grid-cols-3">
                <div class="space-y-4 text-center">
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                        src="{{ asset('Image/foto_dm.png') }}" alt="man"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Jonathan Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Technical Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">

                </div>
            </div>

            <div class="h-auto w-full flex flex-col justify-start items-center">
                <div class="px-4 py-6 mb-10 lg:w-2/4 mt-12 m-4 justify-start items-center" data-aos="fade">
                    <p class="text-[#FC6C3F] text-center text-5xl font-bold mb-4">Jabatan 1</p>
                </div>
            </div>

            <div class="grid gap-12 items-center md:grid-cols-3">
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="640" height="805">
                    <div>
                        <h4 class="text-2xl">Hentoni Doe</h4>
                        <span class="block text-sm text-gray-500">CEO-Founder</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                        src="{{ asset('Image/foto_dm.png') }}" alt="man"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Jonathan Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Technical Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
            </div>

            <div class="h-auto w-full flex flex-col justify-start items-center">
                <div class="px-4 py-6 mb-10 lg:w-2/4 mt-12 m-4 justify-start items-center" data-aos="fade">
                    <p class="text-[#FC6C3F] text-center text-5xl font-bold mb-4">Jabatan 2</p>
                </div>
            </div>

            <div class="grid gap-12 items-center md:grid-cols-3">
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="640" height="805">
                    <div>
                        <h4 class="text-2xl">Hentoni Doe</h4>
                        <span class="block text-sm text-gray-500">CEO-Founder</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80"
                        src="{{ asset('Image/foto_dm.png') }}" alt="man"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Jonathan Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Technical Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64"
                        src="{{ asset('Image/foto_dm2.png') }}" alt="woman"
                        loading="lazy" width="1000" height="667">
                    <div>
                        <h4 class="text-2xl">Anabelle Doe</h4>
                        <span class="block text-sm text-gray-500">Chief Operations Officer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="bg-[#697077] dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <!-- Logo Section -->
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse lg:ml-20">
                    <!-- Logo with responsive sizing -->
                    <img src="{{ asset('icon/Logo PRSPDNF FH.png') }}" class="h-8 md:h-10 lg:h-12" alt="PRSPDNF Logo" />
        
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
