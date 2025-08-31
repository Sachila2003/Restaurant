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

function initMap() {
    const restaurantLocation = { lat: 6.761937207827086, lng: 80.87529219268693 };

    const mapStyles = [
        { "elementType": "geometry", "stylers": [{ "color": "#242f3e" }] },
        { "elementType": "labels.text.fill", "stylers": [{ "color": "#746855" }] },
        { "elementType": "labels.text.stroke", "stylers": [{ "color": "#242f3e" }] },
        { "featureType": "administrative.locality", "elementType": "labels.text.fill", "stylers": [{ "color": "#d59563" }] },
        { "featureType": "poi", "elementType": "labels.text.fill", "stylers": [{ "color": "#d59563" }] },
        { "featureType": "poi.park", "elementType": "geometry", "stylers": [{ "color": "#263c3f" }] },
        { "featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [{ "color": "#6b9a76" }] },
        { "featureType": "road", "elementType": "geometry", "stylers": [{ "color": "#38414e" }] },
        { "featureType": "road", "elementType": "geometry.stroke", "stylers": [{ "color": "#212a37" }] },
        { "featureType": "road", "elementType": "labels.text.fill", "stylers": [{ "color": "#9ca5b3" }] },
        { "featureType": "road.highway", "elementType": "geometry", "stylers": [{ "color": "#746855" }] },
        { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{ "color": "#1f2835" }] },
        { "featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [{ "color": "#f3d19c" }] },
        { "featureType": "transit", "elementType": "geometry", "stylers": [{ "color": "#2f3948" }] },
        { "featureType": "transit.station", "elementType": "labels.text.fill", "stylers": [{ "color": "#d59563" }] },
        { "featureType": "water", "elementType": "geometry", "stylers": [{ "color": "#17263c" }] },
        { "featureType": "water", "elementType": "labels.text.fill", "stylers": [{ "color": "#515c6d" }] },
        { "featureType": "water", "elementType": "labels.text.stroke", "stylers": [{ "color": "#17263c" }] }
    ];

    const mapDiv = document.getElementById("googleMap");

    if (mapDiv) {
        const map = new google.maps.Map(mapDiv, {
            center: restaurantLocation,
            zoom: 16,
            styles: mapStyles,
            disableDefaultUI: true,
        });

        const markerIcon = {
            url: 'assets/images/logo-pin.png',
            scaledSize: new google.maps.Size(60, 60),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(30, 60)
        };
        
        const marker = new google.maps.Marker({
            position: restaurantLocation,
            map: map,
            icon: markerIcon,
            title: "11:11 Restaurant, Haldummulla",
        });
    }
}

window.addEventListener('load', () => {
    initMap();
});