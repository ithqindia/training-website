<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $title = 'Contact page';
        include 'inc-head.php'; 
    ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'inc-nav.php'  ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
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
        <h1 >This is  my contact page</h1>
        <form>
            <lable>Name</lable>
            <input type="text">
            <lable>Email</lable>
            <input type="text">
            <lable>Phone</lable>
            <input type="text">
            <lable>Address</lable>
            <input type="text">
        </form>
        

    </main>
    <!-- ======= Footer ======= -->
    <?php include 'inc-footer.php' ?>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <?php include 'inc-scripts.php' ?>

</body>

</html>