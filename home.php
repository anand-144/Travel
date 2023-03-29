<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!---header-->
    <section class="header">

        <a href="home.php" class="logo">Travel.</a>


        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!--end of header-->

    <!--home section-->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-4.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover The New Places</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-5.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make Your Tour WorthWhile</h3>
                        <a href="package.php" class="btn">Discover More</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>


    <!--services section starts -->

    <section class="services">

        <h1 class="heading-title"> Our Services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>

    </section>

    <!--end of services-->


    <!--home about section start-->

    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique blanditiis hic est iusto voluptate
                atque fuga aut dolores vitae saepe reiciendis, mollitia, aperiam facere recusandae fugit quibusdam.
                Praesentium, consequatur sit!</p>
            <a href="about.php" class="btn">Read More</a>

        </div>

    </section>

    <!--home about section end-->

    <!--home package section start-->

    <section class="home-package">

        <h1 class="heading-title">
            Our Packages
        </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quisquam sequi laboriosam cupiditate
                        quibusdam?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Surfing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quisquam sequi laboriosam cupiditate
                        quibusdam?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Para gliding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quisquam sequi laboriosam cupiditate
                        quibusdam?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Desert Safari</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quisquam sequi laboriosam cupiditate
                        quibusdam?</p>
                    <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>
    <!--home package section end-->

    <!--home offer section start-->

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae debitis ratione tenetur fugiat temporibus
                delectus sapiente ex.</p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>


    <!--home offer section end-->




















    <!--footer-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick <span>Links</span></h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>


            <div class="box">
                <h3>Extra <span>Links</span></h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>Contact <span>Info</span></h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-envelope"></i> admin@gmail.com </a>
                <a href="#"><i class="fas fa-map"></i> Mumbai, India - 400104 </a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> Linkedin</a>
            </div>

        </div>

        <div class="credit">created by <span>Anand Singh</span> | all rights reserved! </div>

    </section>

    <!--script js-->

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>