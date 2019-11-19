
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|DM+Serif+Display:400,400i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="ftco-32x32.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <?php echo $__env->yieldContent('css'); ?>

    <style >
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>

<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Cooking Guide</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
<!-- END header -->

<div class="slider-wrap">
    <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('img/foods.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 ">
                        <h1 data-aos="fade-up mb-5">Let's Cook Some Foods!</h1>
                        <p data-aos="fade-up" data-aos-delay="200"><a href="/food/index" class="btn btn-white btn-outline-white">Get Recipt Food</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item" style="background-image: url('img/drinks.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-md-8 text-center col-sm-12 ">
                        <h1 data-aos="fade-up mb-5">Make Some Drinks!</h1>
                        <p data-aos="fade-up" data-aos-delay="200"><a href="/drink/index" class="btn btn-white btn-outline-white">Get Recipt Drink</a></p>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END slider -->
</div>

<?php echo $__env->yieldContent('content'); ?>


<footer class="site-footer" role="contentinfo">

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4 mb-5">
                <h3>About Us</h3>
                <p class="mb-5">it was Created by Rizki Aprilan. this is for project of laravel in the last session</p>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                </ul>

            </div>
            <div class="col-md-5 mb-5">
                <div>
                    <h3>Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block">
                            <span class="d-block text-black">Address:</span>
                            <span>Nimun Raya Street, South Jakarta, Indonesia</span></li>
                        <li class="d-block"><span class="d-block text-black">Phone:</span><span>+628811334455</span></li>
                        <li class="d-block"><span class="d-block text-black">Email:</span><span>riskiazza@gmail.com</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">

            </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/main.js"></script>


<?php echo $__env->yieldContent('script'); ?>

</body>
</html>
<?php /**PATH D:\Laravel Project\Cooking_Guide.V2\resources\views/master.blade.php ENDPATH**/ ?>