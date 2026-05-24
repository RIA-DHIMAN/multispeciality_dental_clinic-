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