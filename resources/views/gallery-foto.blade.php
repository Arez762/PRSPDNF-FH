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
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Galeri Foto</h1>
        </div>
    </section>

    <section class="lg:mt-16 mt-12" data-aos="fade">
        <div class="ml-6 lg:ml-8 mb-4">
            <p class="lg:text-2xl text-lg font-bold">Foto Terbaru</p>
            <div class="w-16 lg:w-20 h-1 bg-orange-500 "></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4" data-aos="fade-up">
            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>
            </div>

            <div class="group cursor-pointer relative items-center jus">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>
            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>


            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1419133203517-f3b3ed0ba2bb?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1498855926480-d98e83099315?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxyaXZlcnxlbnwwfDB8fHwxNjk0MDk5ODgyfDA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>

            <div class="group cursor-pointer relative">
                <img src="https://images.unsplash.com/photo-1502754400466-c87ff3039da7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8cml2ZXJ8ZW58MHwwfHx8MTY5NDA5OTg4Mnww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                    <p class="font-semibold text-black">Pelatihan Keterampilan Baru untuk Penyandang Disabilitas di
                        Fajar Harapan</p>
                    <div class="flex items-center justify-between text-gray-500 mt-1">
                        <span class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10m2 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            26 Agustus 2024
                        </span>
                        <span class="flex items-center text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 19.071a9 9 0 010-12.728m1.415 1.414a7 7 0 109.9 0m-4.243 4.243a3 3 0 11-4.243 0" />
                            </svg>
                            Admin
                        </span>
                    </div>
                </div>

            </div>


            <!-- Repeat this div for each image -->
        </div>
        <div class="flex justify-center my-10 space-x-2">
            <a href="#"
                class="ring ring-primary bg-primary/20 px-2 py-1 sm:px-4 sm:py-2 ml-1 mt-2 text-gray-600 border rounded-lg focus:outline-none">1
            </a>
            <a href="#"
                class="hover:bg-gray-100 px-2 py-1 sm:px-4 sm:py-2 ml-1 mt-2 text-gray-600 border rounded-lg focus:outline-none">2
            </a>
            <a href="#"
                class="hover:bg-gray-100 px-2 py-1 sm:px-4 sm:py-2 ml-1 mt-2 text-gray-600 border rounded-lg focus:outline-none">3
            </a>
            <span class="px-2 py-1 sm:px-4 sm:py-2 mt-2 text-gray-600 rounded-lg focus:outline-none">...</span>
            <a href="#"
                class="px-2 py-1 sm:px-4 sm:py-2 mt-2 text-gray-600 border rounded-lg hover:bg-gray-100 focus:outline-none">21
            </a>

            <a href="#"
                class="px-2 py-1 sm:px-4 sm:py-2 mt-2 text-gray-600 border rounded-lg hover:bg-gray-100 focus:outline-none">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </section>

    <x-card-all></x-card-all>

    <x-footer></x-footer>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
