<nav class="w-full fixed lg:pt-12 justify-center z-50">
    <div
        class="max-w-screen-2xl flex flex-wrap items-center justify-between p-2 border-2 lg:border-[#FC6C3F] border-b-[#FC6C3F] shadow-lg lg:rounded-2xl bg-white lg:mx-20">

        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse lg:ml-20">
            <!-- Logo with responsive sizing -->
            <img src="{{ asset('icon/Logo PRSPDNF FH.png') }}" class="h-8 md:h-10 lg:h-12" alt="PRSPDNF Logo" />

            <div>
                <!-- Text with responsive font sizes -->
                <span class="flex uppercase text-[#1E1E1E] text-xs md:text-sm lg:text-base">PRSPDNF</span>
                <span class="flex font-semibold text-[#1E1E1E] text-sm md:text-lg lg:text-xl">Fajar Harapan</span>
            </div>
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <!-- Contact Button: Only visible on lg and larger screens -->
            <div
                class="contact-button lg:flex items-center lg:p-2 bg-[#FC6C3F] text-white rounded-xl shadow-lg hidden lg:mr-20">
                <img src="{{ asset('icon/phone-call.png') }}" alt="Phone Icon" class="w-6 h-6 mr-3">
                <div>
                    <p class="lg:text-sm sm:text-xs font-medium">Hubungi Kami</p>
                    <p class="lg:text-lg sm:text-base font-bold">0812-3456-7891</p>
                </div>
            </div>

            <!-- Mobile Menu Button: Only visible on small screens -->
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-[#FC6C3F] dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>


        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-text-gray-900 bg-[#FC6C3F] rounded md:bg-transparent md:p-0 md:dark:text-orange-500 dark:bg-orange-600 md:dark:bg-transparent"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#section-berita"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FC6C3F] md:p-0 dark:text-white md:dark:hover:[#FC6C3F] dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Berita</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FC6C3F] md:p-0 md:w-auto dark:text-white md:dark:hover:text-[#FC6C3F] dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Profile
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/profile-visidanmisi"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Visi & Misi</a>
                            </li>
                            <li>
                                <a href="/profile-sejarah"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah</a>
                            </li>
                            <li>
                                <a href="/profile-tenagaahli"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tenaga Ahli</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FC6C3F] md:p-0 md:w-auto dark:text-white md:dark:hover:text-[#FC6C3F] dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Layanan
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar2"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/pelayanan-persyaratan"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Persyaratan Umum & Administrasi</a>
                            </li>
                            <li>
                                <a href="/pelayanan-alur"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Alur Pelayanan</a>
                            </li>
                            {{-- <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pendaftaran</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                in</a>
                        </div> --}}
                    </div>
                </li>


                <li>
                    <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                        class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#FC6C3F] md:p-0 md:w-auto dark:text-white md:dark:hover:text-[#FC6C3F] dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Galeri
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar3"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                            aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/gallery-foto"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Foto</a>
                            </li>
                            <li>
                                <a href="/gallery-video"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Video</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="flex lg:hidden md:hidden py-4 items-center justify-center">
                    <div class="flex items-center justify-center bg-[#FC6C3F] text-white rounded-xl shadow-lg p-2">
                        <img src="{{ asset('icon/phone-call.png') }}" alt="Phone Icon" class="w-6 h-6 mr-3">
                        <div>
                            <p class="text-sm font-medium">Hubungi Kami</p>
                            <p class="text-lg font-bold">0812-3456-7891</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
