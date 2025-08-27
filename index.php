<?php include 'includes/header.php'; ?>

<!-- HERO SECTION START -->
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
            <!-- Left Column: Image Slider -->
            <div class="about-slider-container animate-on-scroll from-left">
                <!-- ඔයාගේ Slider HTML එක මෙතන -->
                <div class="about-slider"> <!-- 'team-slider' වෙනුවට 'about-slider' -->
                    <!-- Slide 1 -->
                    <div class="about-slide active"> <!-- 'team-slide' වෙනුවට 'about-slide' -->
                        <img src="assets/images/about1.jpg" alt="11:11 Restaurant Interior">
                    </div>
                    <!-- Slide 2 -->
                    <div class="about-slide">
                        <img src="assets/images/about2.jpg" alt="11:11 Restaurant Interior">
                    </div>
                    <!-- Slide 3 -->
                    <div class="about-slide">
                        <img src="assets/images/about3.jpg" alt="Signature Dish">
                    </div>
                </div>
            </div>

            <!-- Right Column: Content -->
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
<<<<<<< HEAD
<!-- ================================== -->
<!--            MENU SECTION            -->
<!-- ================================== -->
<section id="menu">
    <div class="container">
        <div class="section-title" animate-on-scroll from-bottom>
            <p class="sub-heading">OUR MENU</p>
            <h2>Taste Our Creations</h2>
        </div>

        <!-- Category Filter Tabs -->
        <div class="menu-filters" animate-on-scroll from-bottom>
            <button class="filter-btn active" data-category="all">All</button>
            <button class="filter-btn" data-category="rice">Rice</button>
            <button class="filter-btn" data-category="kottu">Kottu</button>
            <button class="filter-btn" data-category="biriyani">Special Biriyani</button>
        </div>

        <!-- Menu Grid -->
        <div class="menu-grid" animate-on-scroll from-bottom>
            
            <!-- PRODUCT CARD 1 -->
            <div class="product-card" animate-on-scroll from-bottom data-category="rice">
                <!-- Mini Image Slider -->
                <div class="product-slider-container">
                    <div class="product-slider">
                        <div class="product-slide active"><img src="assets/images/about1.jpg" alt="Rice Dish 1"></div>
                        <div class="product-slide"><img src="assets/images/about2.jpg" alt="Rice Dish 2"></div>
                        <div class="product-slide"><img src="assets/images/about3.jpg" alt="Rice Dish 3"></div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="product-card-body">
                    <h3 class="product-title">Spicy Chicken Fried Rice</h3>
                    <p class="product-description">A classic stir-fry with fresh vegetables, egg, and tender chicken pieces.</p>
                    <p class="product-price">Rs. 1500.00</p>
                    <div class="product-actions">
=======
<section id="menu">
    <div class="container">
        <div class="section-title animate-on-scroll from-bottom">
            <p class="sub-heading">OUR MENU</p>
            <h2>Taste Our Creations</h2>
        </div>
        <div class="menu-filters animate-on-scroll from-bottom">
                <button class="filter-btn active" data-category="all">All</button>
                <button class="filter-btn" data-category="rice">Rice</button>
                <button class="filter-btn" data-category="kottu">Kottu</button>
                <button class="filter-btn" data-category="biriyani">Special Biriyani</button>
        </div>
        <di class="menu-grid">
            <div class="product-card animate-on-scroll from-bottom" data-category="rice">
                <div class="product-slider-container">
                    <div class="product-slider">
                        <div class="product-slider active"><img src="/assets//images/about1.jpg" alt="Rice Dish 1"></div>
                        <div class="product-slider"><img src="/assets//images/about2.jpg" alt="Rice Dish 2"></div>
                        <div class="product-slider"><img src="/assets//images/about3.jpg" alt="Rice Dish 3"></div>
                    </div>
                </div>
                <div class="product-card-body">
                    <h3 class="product-title">Special Chiken Fried Rice</h3>
                    <p class="product-description">A classic stir-fry with fresh vegetables, egg, and tender chiken pleces.</p>
                    <p class="product-price">Rs. 1200.00</p>
                    <div class="product-action">
>>>>>>> 9a1d562203239f28f07c1a4b5f2c137b49e5cdd2
                        <button class="btn-add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <!-- END OF PRODUCT CARD 1 -->

            <!-- You can copy-paste more cards here for testing -->

        </div> <!-- menu-grid end -->
    </div> <!-- container end -->
</section> <!-- menu section end -->
=======
            <!-- <div class="product-card animate-on-scroll from-bottom" data-category="rice">
                <div class="product-slider-container">
                    <div class="product-slider">
                        <div class="product-slider active"><img src="/assets//images/about1.jpg" alt="Rice Dish 1"></div>
                        <div class="product-slider"><img src="/assets//images/about2.jpg" alt="Rice Dish 2"></div>
                        <div class="product-slider"><img src="/assets//images/about3.jpg" alt="Rice Dish 3"></div>
                    </div>
                </div>
                <div class="product-card-body">
                    <h3 class="product-title">Special Chiken Fried Rice</h3>
                    <p class="product-description">A classic stir-fry with fresh vegetables, egg, and tender chiken pleces.</p>
                    <p class="product-price">Rs. 1200.00</p>
                    <div class="product-action">
                        <button class="btn-add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
>>>>>>> 9a1d562203239f28f07c1a4b5f2c137b49e5cdd2


<?php include 'includes/footer.php'; ?>