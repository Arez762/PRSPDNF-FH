<style>
    .border-orange {
        border-color: #FC6C3F !important;
    }

    .border-b-orange {
        border-bottom-color: #FC6C3F !important;
    }

    .text-orange {
        text-color: #FC6C3F !important;
    }

    .bg-orange {
        background-color: #FC6C3F !important;
    }

    * {
        font-family: 'Poppins', sans-serif;
    }
</style>
<section class="relative bg-white dark:bg-gray-900 z-10">
    <!-- Circles Decoration (Left) -->
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

    {{-- <!-- Circles Decoration (Right) -->
    <div class="absolute -bottom-0 -right-10 z-0">
        <div class="w-32 h-32 bg-orange-500 rounded-full"></div>
        <div class="w-16 h-16 bg-orange-400 rounded-full mt-4 ml-8"></div>
        <div class="w-8 h-8 bg-orange-300 rounded-full mt-2 ml-12"></div>
    </div> --}}

    <!-- Main Content -->
    <div class="relative z-10 py-16 px-4 mx-auto max-w-screen-xl text-center lg:py-12 lg:px-12">
        <h1 class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl dark:text-white">
            Langkah Kecil Menuju Kemandirian Besar 
            <span class="block mt-4 text-orange-500">Bersama Kami di Fajar Harapan!</span>
        </h1>

        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
            Dengan kasih dan kepedulian, kami membimbing setiap individu untuk bangkit dari keterbatasan, berdaya secara sosial dan ekonomi, serta menjalani hidup yang bermartabat.
        </p>

        <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-orange-500 bg-white border border-orange-500 rounded-lg shadow-md hover:bg-orange-50 focus:ring-4 focus:ring-orange-200">
                Lihat Layanan
            </a>
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white bg-orange-500 rounded-lg shadow-md hover:bg-orange-600 focus:ring-4 focus:ring-orange-300">
                Daftar Sekarang
            </a>
        </div>
    </div>
    <img src="{{ asset('Image/image.png') }}" alt="Children Image" class="w-screen h-auto object-cover lg:mb-8"> 
</section>
