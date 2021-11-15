<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $title = "Portfolio page";
    include 'inc-head.php';
    ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'inc-nav.php'  ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero-portfolio" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
                    <h2>We are team of talented digital marketers</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-store-line"></i>
                        <h3><a href="">Lorem Ipsum</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-bar-chart-box-line"></i>
                        <h3><a href="">Dolor Sitema</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-calendar-todo-line"></i>
                        <h3><a href="">Sedare Perspiciatis</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-paint-brush-line"></i>
                        <h3><a href="">Magni Dolores</a></h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <div class="icon-box">
                        <i class="ri-database-2-line"></i>
                        <h3><a href="">Nemos Enimade</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                        <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                        <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                        <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                        <li><strong>Category</strong>: Web design</li>
                        <li><strong>Client</strong>: ASU Company</li>
                        <li><strong>Project date</strong>: 01 March, 2020</li>
                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                    </ul>
                    </div>
                    <div class="portfolio-description">
                    <h2>This is an example of portfolio detail</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
                    </div>
                </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
    </main>
    <!-- ======= Footer ======= -->
    <?php include 'inc-footer.php' ?>

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include 'inc-scripts.php' ?>

</body>

</html>

