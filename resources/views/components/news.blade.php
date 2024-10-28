<div class="relative flex p-6 flex-col items-center justify-center lg:px-32 rounded-xl" data-aos="fade-down">
    <div class="lg:py-20 py-12">
    </div>
    <div
        class="carousel scrollbar-hide flex w-full snap-x snap-mandatory gap-4 overflow-x-scroll scroll-smooth pb- rounded-xl">
        @foreach ($recentNewsHeader as $newsItem)
            <div
                class="relative aspect-[1/1] h-96 lg:w-[50%] w-[100%] shrink-0 snap-start snap-always rounded-xl bg-blue-200 overflow-hidden">
                <a href="{{ route('news.show', $newsItem->slug) }}" class="hover:no-underline">
                    <div class="absolute inset-0">
                        <img src="{{ Storage::url($newsItem->thumbnail) }}" alt="{{ $newsItem->name }}"
                            class="w-full h-full object-cover transition-opacity duration-500 opacity-0  rounded-xl"
                            loading="lazy" onload="this.style.opacity=1">
                    </div>
                </a>

                <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                <div class="absolute inset-0 flex flex-col items-start justify-end p-4 text-justify">
                    <a href="{{ route('news.show', $newsItem->slug) }}" class="hover:no-underline">
                        <h1 class="title-font text-base lg:text-lg font-medium text-white mb-2 hover:text-gray-300">
                            {{ Str::words($newsItem->name, 15) }}
                        </h1>
                        <p class="text-xs text-white lg:text-sm mb-4 hover:text-gray-300">
                            {!! Str::limit(strip_tags($newsItem->content), 100) !!}
                        </p>
                    </a>

                    <div class="flex w-full justify-start gap-3 lg:gap-6 items-center">
                        <div class="text-gray-300 lg:text-sm text-xs items-center">
                            {{ \Carbon\Carbon::parse($newsItem->created_at)->format('d F Y') }}
                        </div>
                        <span class="text-gray-300 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" viewBox="0 0 24 24" style="outline: none;">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            {{ $newsItem->views }}
                        </span>
                        <span class="text-gray-300 inline-flex items-center leading-none text-sm">
                            <svg class="w-5 h-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24" style="outline: none;">
                                <path stroke="currentColor"
                                    d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            {{ $newsItem->user->name }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination my-4 flex gap-2">
        @foreach ($recentNewsHeader as $key => $newsItem)
            <span class="h-3 w-3 ease-out duration-300 rounded-full bg-gray-400 {{ $key === 0 ? 'w-8' : '' }}"></span>
        @endforeach
    </div>
    <div class="flex flex-row w-64 items-center justify-center">
        <button class="prev-btn hover:text-orange-500 p-2 flex flex-row mr-4">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg> Prev
        </button>
        <button class="next-btn hover:text-orange-500 p-2 flex flex-row">Next
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>

<script>
    // JavaScript carousel script
    const container = document.querySelector('.carousel');
    const slides = document.querySelectorAll('.carousel > div');
    const dots = document.querySelectorAll('.pagination > span');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    const autoScrollInterval = 3000;
    let autoScroll;

    prevBtn.addEventListener('click', () => {
        scrollToPrev();
        resetAutoScroll();
    });

    nextBtn.addEventListener('click', () => {
        scrollToNext();
        resetAutoScroll();
    });

    function startAutoScroll() {
        autoScroll = setInterval(() => {
            scrollToNext();
        }, autoScrollInterval);
    }

    function resetAutoScroll() {
        clearInterval(autoScroll);
        startAutoScroll();
    }

    function scrollToNext() {
        if (getCenterSlideIndex() === slides.length - 1) {
            container.scrollTo({ left: 0, behavior: 'smooth' });
            updateActiveDot(0);
        } else {
            container.scrollBy({ left: slides[0].offsetWidth, behavior: 'smooth' });
            updateActiveDot(getCenterSlideIndex() + 1);
        }
    }

    function scrollToPrev() {
        if (getCenterSlideIndex() === 0) {
            container.scrollTo({ left: container.scrollWidth, behavior: 'smooth' });
            updateActiveDot(slides.length - 1);
        } else {
            container.scrollBy({ left: -slides[0].offsetWidth, behavior: 'smooth' });
            updateActiveDot(getCenterSlideIndex() - 1);
        }
    }

    function updateActiveDot(centerSlideIndex) {
        dots.forEach((dot) => dot.classList.remove('w-8'));
        dots[centerSlideIndex].classList.add('w-8');
    }

    function getCenterSlideIndex() {
        const slideWidth = slides[0].offsetWidth;
        const containerWidth = container.offsetWidth;
        return Math.round((container.scrollLeft + containerWidth / 2) / slideWidth);
    }

    startAutoScroll();
</script>
