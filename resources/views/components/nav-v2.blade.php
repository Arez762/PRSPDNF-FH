<style>
    /* Optional: Menambahkan sedikit animasi pada dropdown */
    .dropdown-menu {
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .dropdown-menu.hidden {
        opacity: 0;
        transform: translateY(-10px);
        display: none;
    }

    .dropdown-menu.active {
        opacity: 1;
        transform: translateY(0);
        display: block;
    }
</style>
<!-- Fixed Navbar -->
<header class="fixed top-0 w-full z-50 lg:pt-12 lg:px-24">
    <div
        class="bg-white container mx-auto max-w-screen-2xl lg:px-20 px-4 lg:py-2 py-4 flex items-center lg:border-2 border-b-2 border-[#FC6C3F] justify-between lg:rounded-xl lg:shadow-xl">
        <!-- Logo -->
        <div class="text-2xl font-bold text-gray-800">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- Logo with responsive sizing -->
                <img src="{{ asset('icon/Logo PRSPDNF FH.png') }}" class="h-8 md:h-10 lg:h-12" alt="PRSPDNF Logo" />
                <div class="space-y-1">
                    <!-- Text with responsive font sizes and reduced spacing -->
                    <span
                        class="flex uppercase font-medium text-[#1E1E1E] text-xs md:text-sm lg:text-base">PRSPDNF</span>
                    <span class="flex font-semibold text-[#1E1E1E] text-sm md:text-lg lg:text-xl">Fajar Harapan</span>
                </div>
            </a>
        </div>

        <!-- Menu -->
        <nav class="hidden lg:flex space-x-6 font-semibold text-md">
            <a href="/" class="text-gray-900">Home</a>
            <a href="#section-berita" class="block text-gray-900 hover:text-[#FC6C3F]" id="beritaButton">
                Berita
            </a>
            <div class="relative">
                <button class="text-gray-900 hover:text-[#FC6C3F] focus:outline-none" id="profileButton"
                    onclick="toggleDropdown('services-dropdown', 'profileButton')">
                    Profile
                    <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg dropdown-menu hidden"
                    id="services-dropdown">
                    <a href="profile-visidanmisi"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Visi & Misi</a>
                    <a href="profile-sejarah"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Sejarah</a>
                    <a href="profile-tenagaahli"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Tenaga Ahli</a>
                </div>
            </div>

            <div class="relative">
                <button class="text-gray-900 hover:text-[#FC6C3F] focus:outline-none" id="layananButton"
                    onclick="toggleDropdown('services-dropdown2', 'layananButton')">
                    Layanan
                    <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg dropdown-menu hidden"
                    id="services-dropdown2">
                    <a href="pelayanan-persyaratan"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Persyaratan Umum &
                        Administrasi</a>
                    <a href="pelayanan-alur"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Alur Pelayanan</a>
                </div>
            </div>

            <div class="relative">
                <button class="text-gray-900 hover:text-[#FC6C3F] focus:outline-none" id="galeriButton"
                    onclick="toggleDropdown('services-dropdown3', 'galeriButton')">
                    Galeri
                    <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg dropdown-menu hidden"
                    id="services-dropdown3">
                    <a href="gallery-foto"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Foto</a>
                    <a href="gallery-video"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Video</a>
                </div>
            </div>
        </nav>

        <!-- Contact and Mobile Menu Button -->
        <div class="flex items-center ">
            <a href="#" class="hidden lg:block">
                <div class="contact-button lg:flex items-center lg:p-2 bg-[#FC6C3F] text-white rounded-xl shadow-lg">
                    <img src="{{ asset('icon/phone-call.png') }}" alt="Phone Icon" class="w-6 h-6 mr-3">
                    <div>
                        <p class="lg:text-sm sm:text-xs font-medium">Hubungi Kami</p>
                        <p class="lg:text-lg sm:text-base font-bold">0812-3456-7891</p>
                    </div>
                </div>
            </a>
            <button class="lg:hidden text-gray-700 focus:outline-none hover:bg-slate-50" id="menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden rounded-md bg-white inset-x-0 w-full" id="mobile-menu">
        <nav class="md:mx-2 pt-2 pb-4 space-y-1 max-h-[70vh] overflow-y-auto border-b-2 rounded-md border-[#FC6C3F]">
            <a href="/" class="block text-gray-700 hover:bg-gray-100 px-4 py-2 ">Home</a>

            <a href="#section-berita" class="block text-gray-700 hover:bg-gray-100 px-4 py-2" id="beritaButton2">
                Berita
            </a>

            <button class="w-full flex justify-between items-center text-gray-700 hover:bg-gray-100 px-4 py-2" id="dropdownButton1"
                onclick="toggleDropdown('mobile-dropdown', this)">
                Profile
                <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div class="px-3 py-2 hidden" id="mobile-dropdown">
                <a href="profile-visidanmisi" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Visi &
                    Misi</a>
                <a href="profile-sejarah" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Sejarah</a>
                <a href="profile-tenagaahli" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Tenaga
                    Ahli</a>
            </div>

            <button class="w-full flex justify-between items-center text-gray-700 hover:bg-gray-100 px-4 py-2" id="dropdownButton2"
                onclick="toggleDropdown('mobile-dropdown2', this)">
                Layanan
                <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div class="px-3 py-2 hidden" id="mobile-dropdown2">
                <a href="pelayanan-persyaratan"
                    class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Persyaratan Umum &
                    Administrasi</a>
                <a href="pelayanan-alur" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Alur
                    Pelayanan</a>
            </div>

            <button class="w-full flex justify-between items-center text-gray-700 hover:bg-gray-100 px-4 py-2"
                id="dropdownButton3" onclick="toggleDropdown('mobile-dropdown3', this)">
                <span>Galeri</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div class="px-3 py-2 hidden" id="mobile-dropdown3">
                <a href="gallery-foto" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Foto</a>
                <a href="gallery-video" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Video</a>
            </div>

            <div class="border-t-2 border-[#FC6C3F]">
                <div
                    class="flex items-center justify-center bg-[#FC6C3F] mx-24 mt-4 text-white rounded-xl shadow-lg p-2">
                    <img src="{{ asset('icon/phone-call.png') }}" alt="Phone Icon"
                        class="lg:w-6 w-5 lg:h-6 h-5 mr-3">
                    <div>
                        <p class="text-xs lg:text-sm font-medium">Hubungi Kami</p>
                        <p class="text-xs lg:text-lg font-bold">0812-3456-7891</p>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    // Toggle the mobile menu
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Function to toggle dropdown menu
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }

    // Optional: Click outside to close the dropdown
    window.addEventListener('click', function(event) {
        const servicesDropdown = document.getElementById('services-dropdown');
        const mobileDropdown = document.getElementById('mobile-dropdown');
        const servicesButton = servicesDropdown.previousElementSibling;
        const mobileButton = mobileDropdown.previousElementSibling;

        if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
            servicesDropdown.classList.add('hidden');
        }
        if (!mobileButton.contains(event.target) && !mobileDropdown.contains(event.target)) {
            mobileDropdown.classList.add('hidden');
        }
    });
    window.addEventListener('click', function(event) {
        const servicesDropdown = document.getElementById('services-dropdown2');
        const mobileDropdown = document.getElementById('mobile-dropdown2');
        const servicesButton = servicesDropdown.previousElementSibling;
        const mobileButton = mobileDropdown.previousElementSibling;

        if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
            servicesDropdown.classList.add('hidden');
        }
        if (!mobileButton.contains(event.target) && !mobileDropdown.contains(event.target)) {
            mobileDropdown.classList.add('hidden');
        }
    });
    window.addEventListener('click', function(event) {
        const servicesDropdown = document.getElementById('services-dropdown3');
        const mobileDropdown = document.getElementById('mobile-dropdown3');
        const servicesButton = servicesDropdown.previousElementSibling;
        const mobileButton = mobileDropdown.previousElementSibling;

        if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
            servicesDropdown.classList.add('hidden');
        }
        if (!mobileButton.contains(event.target) && !mobileDropdown.contains(event.target)) {
            mobileDropdown.classList.add('hidden');
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Ambil semua elemen link yang ingin diberi efek warna
        const links = document.querySelectorAll('a');

        // Loop melalui setiap link
        links.forEach(link => {
            // Periksa apakah href dari link sama dengan URL saat ini
            if (link.href === window.location.href) {
                // Tambahkan kelas untuk mengubah warna teks
                link.classList.remove('text-gray-900');
                link.classList.remove('text-gray-700');
                link.classList.add('text-[#FC6C3F]');
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentUrl = window.location.href;

        // Untuk tombol Profile
        const profileButton = document.getElementById('dropdownButton1');
        if (currentUrl.includes('profile-visidanmisi') || currentUrl.includes('profile-sejarah') || currentUrl
            .includes('profile-tenagaahli')) {
            profileButton.classList.remove('text-gray-700');
            profileButton.classList.add('text-[#FC6C3F]');
        }

        // Untuk tombol Layanan
        const layananButton = document.getElementById('dropdownButton2');
        if (currentUrl.includes('pelayanan-persyaratan') || currentUrl.includes('pelayanan-alur')) {
            layananButton.classList.remove('text-gray-700');
            layananButton.classList.add('text-[#FC6C3F]');
        }

        // Untuk tombol Galeri
        const galeriButton = document.getElementById('dropdownButton3');
        if (currentUrl.includes('gallery-foto') || currentUrl.includes('gallery-video')) {
            galeriButton.classList.remove('text-gray-700');
            galeriButton.classList.add('text-[#FC6C3F]');
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentUrl = window.location.href;

        // Check and change the button style for Profile section
        if (currentUrl.includes('profile-visidanmisi') || currentUrl.includes('profile-sejarah') || currentUrl
            .includes('profile-tenagaahli')) {
            document.getElementById('profileButton').classList.remove('text-gray-900');
            document.getElementById('profileButton').classList.add('text-[#FC6C3F]');
        }

        // Check and change the button style for Layanan section
        if (currentUrl.includes('pelayanan-persyaratan') || currentUrl.includes('pelayanan-alur')) {
            document.getElementById('layananButton').classList.remove('text-gray-900');
            document.getElementById('layananButton').classList.add('text-[#FC6C3F]');
        }

        // Check and change the button style for Galeri section
        if (currentUrl.includes('gallery-foto') || currentUrl.includes('gallery-video')) {
            document.getElementById('galeriButton').classList.remove('text-gray-900');
            document.getElementById('galeriButton').classList.add('text-[#FC6C3F]');
        }
    });

    function toggleDropdown(dropdownId, buttonId) {
        const dropdown = document.getElementById(dropdownId);
        dropdown.classList.toggle('hidden');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Cek apakah URL saat ini adalah halaman beranda ("/" atau "/index.html")
        const currentUrl = window.location.pathname;

        // Ambil elemen tombol "Berita"
        const beritaButton = document.getElementById('beritaButton');

        // Jika bukan halaman beranda, sembunyikan tombol
        if (currentUrl !== '/' && currentUrl !== '/index.html') {
            beritaButton.style.display = 'none';
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Cek apakah URL saat ini adalah halaman beranda ("/")
        const currentUrl = window.location.pathname;
        const beritaButton = document.getElementById('beritaButton2');

        // Jika bukan halaman beranda, sembunyikan tombol
        if (currentUrl !== '/') {
            beritaButton.classList.add('hidden');
        }
    });
</script>
