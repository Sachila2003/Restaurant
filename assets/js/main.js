window.addEventListener('load', () => {
    const header = document.querySelector('.main-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });
    }

    const hamburger = document.querySelector('.hamburger-menu');
    const navMenu = document.querySelector('.main-nav');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }

    const aboutSlider = document.querySelector('.about-slider');
    if (aboutSlider) {
        try {
            const slides = aboutSlider.querySelectorAll('.about-slide');
            if (slides.length > 1) {
                let currentSlideIndex = 0;

                function showNextSlide() {
                    slides[currentSlideIndex].classList.remove('active');

                    currentSlideIndex = (currentSlideIndex + 1) % slides.length;

                    slides[currentSlideIndex].classList.add('active');
                }

                setInterval(showNextSlide, 3500);
            }
        } catch (error) {
            console.error("Error initializing the 'About Us' slider:", error);
        }
    }

    const animatedElements = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            } else {
                entry.target.classList.remove('animate');
            }
        });
    }, {
        threshold: 0.1
    });

    animatedElements.forEach(element => {
        observer.observe(element);
    });

});