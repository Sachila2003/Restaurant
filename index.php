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
                    <!-- ඔයාට අවශ්‍ය නම් තව slides එකතු කරන්න -->
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

<?php include 'includes/footer.php'; ?>