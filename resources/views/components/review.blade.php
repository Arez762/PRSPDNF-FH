<div class="review-section text-center py-16 max-w-5xl mx-auto" data-aos="fade-up" data-aos-once="true">
    <h2 class="text-3xl mb-8">
        Apa yang dikatakan oleh <span class="text-orange-500">pelanggan kami?</span>
    </h2>

    <div class="review-carousel relative flex items-center justify-center space-x-14">
        <!-- Left arrow -->
        <button class="arrow text-4xl bg-transparent border-none cursor-pointer hover:text-orange-500" onclick="prevReview()">&#10094;</button>

        <!-- Review 1 -->
        <div class="review active flex flex-col items-center text-center hidden">
            <img src="https://via.placeholder.com/80" alt="Anita Maxwyn" class="w-24 h-24 object-cover rounded-full mb-6 border-2 border-[#FC6C3F] shadow-sm p-1">
            <h3 class="text-xl font-semibold">Anita Maxwyn</h3>
            <span class="text-orange-500 mb-3 text-lg">Pelanggan</span>
            <blockquote class="italic mb-6 text-lg">“Rehabilitasi Terbaik”</blockquote>
            <p class="text-base max-w-lg mx-auto mb-6">
                Fajar Harapan benar-benar telah mengubah hidup saya. Dengan bimbingan dari tenaga ahli yang penuh perhatian...
            </p>
            <div class="stars text-yellow-400 text-2xl">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>

        <!-- Review 2 -->
        <div class="review hidden flex flex-col items-center text-center">
            <img src="https://via.placeholder.com/80" alt="John Doe" class="w-24 h-24 object-cover rounded-full mb-6 border-2 border-[#FC6C3F] shadow-sm p-1">
            <h3 class="text-xl font-semibold">John Doe</h3>
            <span class="text-orange-500 mb-3 text-lg">Pelanggan</span>
            <blockquote class="italic mb-6 text-lg">“Layanan Luar Biasa”</blockquote>
            <p class="text-base max-w-lg mx-auto mb-6">
                Pengalaman saya dengan Fajar Harapan sangat memuaskan. Proses pemulihan saya jauh lebih cepat dari yang
                saya harapkan...
            </p>
            <div class="stars text-yellow-400 text-2xl">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        </div>

        <!-- Right arrow -->
        <button class=" arrow text-4xl bg-transparent border-none cursor-pointer hover:text-orange-500" onclick="nextReview()">&#10095;</button>
    </div>
</div>

<script>
    let currentReview = 0;
    const reviews = document.querySelectorAll('.review');

    function showReview(index) {
        reviews.forEach((review, i) => {
            review.classList.toggle('hidden', i !== index);
            review.classList.toggle('active', i === index);
        });
    }

    function nextReview() {
        currentReview = (currentReview + 1) % reviews.length;
        showReview(currentReview);
    }

    function prevReview() {
        currentReview = (currentReview - 1 + reviews.length) % reviews.length;
        showReview(currentReview);
    }

    document.addEventListener('DOMContentLoaded', () => {
        showReview(currentReview);
        setInterval(nextReview, 5000);
    });
</script>
