<?php include 'components/alert.php'; ?>

<style type="text/css">
    <?php include 'style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Green Coffee - About Us</title>
</head>
<body>
    <?php include 'components/header.php'; ?>

    <div class="main">
        <div class="banner">
            <h1>About Us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>about</span>
        </div>

        <!-- About Categories -->
        <div class="about-category">
            <div class="box">
                <img src="assets/image/3.webp">
                <div class="detail">
                    <span>Coffee</span>
                    <h1>Lemon Green</h1>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box">
                <img src="assets/image/2.webp">
                <div class="detail">
                    <span>Coffee</span>
                    <h1>Lemon Tea Name</h1>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
        </div>

        <!-- Testimonial Section -->
        <div class="testimonial-container">
            <div class="title">
                <img src="assets/image/download.png" class="logo">
                <h1>What People Say About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam et ab, dolore placeat voluptatem nobis.</p>
            </div>
            <div class="container slider">
                <div class="testimonial-item active">
                    <img src="assets/image/01.jpg">
                    <h1>Sara Smith</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illum, in vel enim.</p>
                </div>
                <div class="testimonial-item">
                    <img src="assets/image/02.jpg">
                    <h1>Jason Smith</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illum, in vel enim laborum.</p>
                </div>
                <div class="testimonial-item">
                    <img src="assets/image/03.jpg">
                    <h1>Selena Ansari</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illum, in vel enim laborum.</p>
                </div>
                <!-- Arrows -->
                <div class="left-arrow">
                    <i class="bx bxs-left-arrow-alt"></i>
                </div>
                <div class="right-arrow">
                    <i class="bx bxs-right-arrow-alt"></i>
                </div>
            </div>
        </div>

        <?php include 'components/footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        // Ensure DOM is fully loaded
        document.addEventListener("DOMContentLoaded", function () {
            const slider = document.querySelector('.slider');
            const leftArrow = document.querySelector('.left-arrow');
            const rightArrow = document.querySelector('.right-arrow');

            // Check if slider and arrows exist
            if (!slider || !leftArrow || !rightArrow) {
                console.error("Slider or arrows are missing from the DOM.");
                return;
            }

            // Testimonial Items
            const slides = document.querySelectorAll('.testimonial-item');
            let index = 0;

            // Helper to update active class
            function updateSlides() {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
            }

            // Scroll Right
            function nextSlide() {
                index = (index + 1) % slides.length;
                updateSlides();
            }

            // Scroll Left
            function prevSlide() {
                index = (index - 1 + slides.length) % slides.length;
                updateSlides();
            }

            // Attach event listeners
            rightArrow.addEventListener('click', nextSlide);
            leftArrow.addEventListener('click', prevSlide);

            // Initialize active slide
            updateSlides();
        });
    </script>
</body>
</html>
