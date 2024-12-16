        // Script to manage the active class for custom indicators
        const indicators = document.querySelectorAll('.carousel-indicators-custom .indicator');
        const carousel = document.getElementById('imageCarousel');
    
        carousel.addEventListener('slide.bs.carousel', function (event) {
          indicators.forEach((indicator) => indicator.classList.remove('active'));
          indicators[event.to].classList.add('active');
        });