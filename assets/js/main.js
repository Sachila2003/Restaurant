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

    const allProductSliders = document.querySelectorAll('.product-slider');
    allProductSliders.forEach(slider => {
        try {
            const slides = slider.querySelectorAll('.product-slide');
            if (slides.length > 1) {
                let currentSlideIndex = 0;

                function showNextSlide() {
                    slides[currentSlideIndex].classList.remove('active');

                    currentSlideIndex = (currentSlideIndex + 1) % slides.length;

                    slides[currentSlideIndex].classList.add('active');
                }

                setInterval(showNextSlide, 3000);
            }
        } catch (error) {
            console.error("Error initializing a product slider:", error);
        }
    });

    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
    
            const selectedCategory = button.getAttribute('data-category');
    
            productCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                
                if (selectedCategory === 'all' || cardCategory === selectedCategory) {
                    card.classList.remove('hide');
                } else {
                    card.classList.add('hide');
                }
            });
        });
    });

    const testimonialContainer = document.querySelector('.testimonial-slider-container');
if (testimonialContainer) {
    const slides = testimonialContainer.querySelectorAll('.testimonial-slide');
    const prevBtn = testimonialContainer.querySelector('.slider-nav.prev');
    const nextBtn = testimonialContainer.querySelector('.slider-nav.next');
    
    if (slides.length > 1) {
        let currentSlideIndex = 0;
        let autoPlayInterval; 

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove('active');
                if (i === index) {
                    slide.classList.add('active');
                }
            });
        }

        function showNextSlide() {
            currentSlideIndex = (currentSlideIndex + 1) % slides.length;
            showSlide(currentSlideIndex);
        }

        function showPrevSlide() {
            currentSlideIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
            showSlide(currentSlideIndex);
        }
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(showNextSlide, 5000);
        }
        function resetAutoPlay() {
            clearInterval(autoPlayInterval); 
            startAutoPlay(); 
        }

        if (nextBtn && prevBtn) {
            nextBtn.addEventListener('click', () => {
                showNextSlide();
                resetAutoPlay(); 
            });

            prevBtn.addEventListener('click', () => {
                showPrevSlide();
                resetAutoPlay(); 
            });
        }
        
        showSlide(currentSlideIndex);

        startAutoPlay(); 
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