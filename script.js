document.addEventListener("DOMContentLoaded", () => {
        const track = document.getElementById("sliderTrack");
        const nextBtn = document.getElementById("slideNext");
        const prevBtn = document.getElementById("slidePrev");
        
        let currentIndex = 0;

        function getMetrics() {
            const cards = document.querySelectorAll(".slider-card-item");
            const totalCards = cards.length;
            
            // Calculate step size based on real-time calculated layout bounds
            const cardWidth = cards[0].getBoundingClientRect().width;
            const gap = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--grid-gap')) || 24;
            const stepShift = cardWidth + gap;

            // Determine visible capacity dynamically from styles
            let visibleAmount = 3; 
            if (window.innerWidth <= 991.98) visibleAmount = 2;
            if (window.innerWidth <= 575.98) visibleAmount = 1;

            const maxIndex = totalCards - visibleAmount;

            return { stepShift, maxIndex };
        }

        function updateSliderPosition() {
            const { stepShift, maxIndex } = getMetrics();
            
            // Boundary clamping locks
            if (currentIndex < 0) currentIndex = 0;
            if (currentIndex > maxIndex) currentIndex = maxIndex;

            // Shift via high-performance CSS Transform matrix translations
            track.style.transform = `translateX(-${currentIndex * stepShift}px)`;
        }

        nextBtn.addEventListener("click", () => {
            const { maxIndex } = getMetrics();
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSliderPosition();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSliderPosition();
            }
        });

        // Recalculate dimensions on window resize changes smoothly
        window.addEventListener("resize", updateSliderPosition);
    });

    // JS
const elements = document.querySelectorAll(".scroll-up");

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
      observer.unobserve(entry.target); // animation only once
    }
  });
}, {
  threshold: 0.15
});

elements.forEach((el) => observer.observe(el));

document.addEventListener("DOMContentLoaded", () => {
    const stats = document.querySelectorAll(".impact-stat[data-target]");
    const duration = 1500; // Total animation length in milliseconds

    stats.forEach(stat => {
        const target = parseInt(stat.getAttribute("data-target"), 10);
        const suffix = stat.getAttribute("data-suffix") || "";
        const startTime = performance.now();

        const updateCounter = (currentTime) => {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            
            // Premium easeOutQuad curve for realistic deceleration speed
            const easeProgress = progress * (2 - progress); 
            const currentValue = Math.floor(easeProgress * target);

            // Format numbers greater than 1000 with a localized comma string
            stat.textContent = currentValue.toLocaleString() + suffix;

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                stat.textContent = target.toLocaleString() + suffix;
            }
        };

        requestAnimationFrame(updateCounter);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const scrollTopBtn = document.getElementById('scrollToTopBtn');
    
    // Visibility Threshold Constant
    const scrollThreshold = 300; 

    // Handle scroll events cleanly
    window.addEventListener('scroll', function () {
        if (window.scrollY > scrollThreshold) {
            scrollTopBtn.classList.add('is-visible');
        } else {
            scrollTopBtn.classList.remove('is-visible');
        }
    });

    // Native smooth scroll to absolute coordinates (0,0)
    scrollTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});