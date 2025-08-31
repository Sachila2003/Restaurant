<?php include 'includes/header.php'; ?>
<section id="hero-video">
    <video playsinline autoplay muted loop poster="./assets/videos/home.mov" id="bgvideo">
        <source src="./assets/videos/home.mov" type="video/mp4">
    </video>

    <div class="hero-content">
        <div class="hero-text">
            <h1>11:11 <br><span class="accent-text">RESTAURANT</span></h1>
            <p>Welcome to our restaurant, where culinary artistry meets exceptional dining experiences. We strive to
                create a gastronomic haven that tantalizes your taste buds.</p>
            <a href="#" class="btn-outline">MENU</a>
        </div>
    </div>
</section>
<section id="about">
    <div class="container ">
        <div class="about-container">
            <div class="about-slider-container animate-on-scroll from-left">
                <div class="about-slider">
                    <div class="about-slide active">
                        <img src="assets/images/about1.jpg" alt="11:11 Restaurant Interior">
                    </div>
                    <div class="about-slide">
                        <img src="assets/images/about2.jpg" alt="11:11 Restaurant Interior">
                    </div>
                    <div class="about-slide">
                        <img src="assets/images/about3.jpg" alt="Signature Dish">
                    </div>
                </div>
            </div>

            <div class="about-content animate-on-scroll from-right">
                <p class="sub-heading">OUR SANCTUARY</p>
                <h2>Where Serenity Meets Flavor</h2>
                <p>
                    At 11:11, we believe every meal should be a special moment. Nestled in the breathtaking beauty of
                    Haldummulla, our restaurant is an escape, located just 5km from the majestic Bambarakanda Falls, Sri
                    Lanka's tallest waterfall.
                </p>
                <p class="signature">
                    "Inspired by the mountains, crafted with passion."
                </p>
                <a href="about.php" class="btn-outline">DISCOVER OUR STORY</a>
            </div>
        </div>
    </div>
</section>
<section id="menu">
    <div class="container">
        <div class="section-title animate-on-scroll from-left">
            <p class="sub-heading">OUR MENU</p>
            <h2>Taste Our Creations</h2>
        </div>

        <div class="menu-filters animate-on-scroll from-right">
            <button class="filter-btn active" data-category="all">All</button>
            <button class="filter-btn" data-category="rice-noodles">Rice & Noodles</button>
            <button class="filter-btn" data-category="kottu">Kottu</button>
            <button class="filter-btn" data-category="biriyani">Special Biriyani</button>
            <button class="filter-btn" data-category="mains">Mains (Meats & Fish)</button>
            <button class="filter-btn" data-category="pasta">Pasta</button>
            <button class="filter-btn" data-category="bites">Bites & Omlets</button>
            <button class="filter-btn" data-category="beverages">Beverages</button>
        </div>

        <div class="menu-grid">
            <div class="product-card animate-on-scroll from-bottom" data-category="rice-noodles">
                <div class="product-slider-container">
                    <div class="product-slider">
                        <div class="product-slide active"><img src="assets/images/about1.jpg" alt="Rice Dish 1"></div>
                        <div class="product-slide"><img src="assets/images/about2.jpg" alt="Rice Dish 2"></div>
                        <div class="product-slide"><img src="assets/images/about3.jpg" alt="Rice Dish 3"></div>
                    </div>
                </div>
                <div class="product-card-body">
                    <h3 class="product-title">Spicy Chicken Fried Rice</h3>
                    <p class="product-description">A classic stir-fry with fresh vegetables, egg, and tender chicken
                        pieces.</p>
                    <p class="product-price">Rs. 1500.00</p>
                    <div class="product-actions">
                        <button class="btn-add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="product-card animate-on-scroll from-bottom" data-category="kottu">
                <div class="product-slider-container">
                    <div class="product-slider">
                        <div class="product-slide active"><img src="assets/images/food/kottu1.jpg" alt="Kottu"></div>
                        <div class="product-slide"><img src="assets/images/food/kottu2.jpg" alt="Kottu"></div>
                    </div>
                </div>
                <div class="product-card-body">
                    <h3 class="product-title">Chicken Kottu</h3>
                    <p class="product-description">Shredded godamba roti stir-fried with chicken, vegetables, and
                        aromatic spices.</p>
                    <p class="product-price">Rs. 1200.00</p>
                    <div class="product-actions">
                        <button class="btn-add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="product-card animate-on-scroll from-bottom" data-category="mains">
                <div class="product-slider-container">
                    <div class="product-slider">
                        <div class="product-slide active"><img src="assets/images/food/devil1.jpg" alt="Devilled Dish">
                        </div>
                    </div>
                </div>
                <div class="product-card-body">
                    <h3 class="product-title">Devilled Beef</h3>
                    <p class="product-description">Tender beef cubes tossed in a fiery, sweet and sour sauce with
                        peppers and onions.</p>
                    <p class="product-price">Rs. 1900.00</p>
                    <div class="product-actions">
                        <button class="btn-add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="testimonials">
    <div class="container">
        <div class="section-title animate-on-scroll from-left">
            <p class="sub-heading">Testimonials</p>
            <h2>What Our Customers Say</h2>
        </div>

        <div class="testimonial-slider-container animate-on-scroll from-bottom">
            <div class="testimonial-slider">
                <div class="testimonial-slide active">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Absolutely amazing! The food was exceptional, and the view of the mountains is just
                        breathtaking. A must-visit place in Haldummulla."
                    </p>
                    <h4 class="customer-name">John Doe</h4>
                </div>

                <div class="testimonial-slide">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="far fa-star"></i> <!-- 4 stars -->
                    </div>
                    <p class="testimonial-text">
                        "Great atmosphere and friendly staff. The Chicken Kottu was one of the best I've ever had. Will
                        definitely be back!"
                    </p>
                    <h4 class="customer-name">Jane Smith</h4>
                </div>

                <div class="testimonial-slide">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "The Special Biriyani Pot is a masterpiece. Perfect for a family outing. The service was
                        top-notch. Highly recommended."
                    </p>
                    <h4 class="customer-name">David Fernando</h4>
                </div>

            </div>

            <div class="slider-navigation">
                <button class="slider-nav prev"><i class="fas fa-arrow-left"></i></button>
                <button class="slider-nav next"><i class="fas fa-arrow-right"></i></button>
            </div>

        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="section-title animate-on-scroll from-bottom">
            <p class="sub-heading">GET IN TOUCH</p>
            <h2>Let's Connect</h2>
        </div>
        <div class="contact-container">
            <div class="contact-details animate-on-scroll from-left">
                <div class="contact-info-item">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="info-text">
                        <h4>Address</h4>
                        <p>11:11 Restaurant, Haldummulla, Sri Lanka</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="info-text">
                        <h4>Reservation</h4>
                        <p>+94 77 123 4567</p>
                    </div>
                </div>
                <div class="contact-info-item">
                    <div class="icon"><i class="fas fa-clock"></i></div>
                    <div class="info-text">
                        <h4>Hours</h4>
                        <p>Monday - Sunday: 10:00 AM - 10:00 PM</p>
                    </div>
                </div>

            </div>
            <div class="contact-form-container animate-on-scroll from-right">
                <form action="handle_contact.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn-outline">Send Message</button>
                </form>
            </div>

        </div>
        <div class="contact-map-container animate-on-scroll from-right">
            <div id="googleMap"></div>
        </div>
    </div>
    <a href="https://www.google.com/maps/dir/?api=1&destination=11:11+Restaurant,+Walhaputhenna,+Haldummulla" target="_blank" class="btn-outline directions-btn">
    <i class="fas fa-directions"></i> GET DIRECTIONS
</a>
    </div>
</section>


<?php include 'includes/footer.php'; ?>