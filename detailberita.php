<?php
include 'koneksi.php';
include 'skrip.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PMI KOTA SURAKARTA</title>
    <!-- core CSS -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/css2/bootstrap2.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/ico/favicon.png">

    <!-- =============CSS Berita -->
    <link rel="stylesheet" href="assets/berita/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/berita/css/style.css">
    <link rel="stylesheet" href="assets/berita/css/responsive.css">
</head>
<!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Beranda</a></li>
                        <li class="scroll"><a href="#udd">Unit Donor Darah</a></li>
                        <li class="scroll"><a href="#services">Unit Markas</a></li>
                        <li class="scroll"><a href="#public">Info Publik</a></li>
                        <li class="scroll"><a href="#about">Admin</a></li>
                        <li class="scroll"><a href="#">Kontak</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->

    <?php
    $inf = "SELECT * FROM berita WHERE id_berita='$_GET[id]'";

    $info = mysqli_query($con, $inf);
    $infoa = mysqli_fetch_array($info);

    ?>

    <section class="pad100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- Start Blog Post -->
                    <div class="single-blog-post">
                        <div class="blog-img">
                            <img src="images/blog/01.jpg" class="img-responsive" alt="Blog Image">
                        </div>
                        <div class="blog-post-content">
                            <div class="post-format">
                                <i class="fa fa-picture-o"></i>
                            </div>
                            <div class="post-description">
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>Super User</li>
                                    <li><i class="fa fa-folder-open-o"></i>Blog</li>
                                    <li><i class="fa fa-calendar-o"></i><?php echo $infoa['tgl_masuk']; ?></li>
                                    <!-- <li><i class="fa fa-eye"></i>Hits: 223</li> -->
                                </ul>
                                <h1><?php=$infoa['nama_berita'];?></h1>
                            </div>
                            <div class="post-text">
                                <?= $infoa['deskripsi']; ?>
                            </div>
                            <ul class="post-tag">
                                Tags:
                                <li><a href="#">HTML</a>,</li>
                                <li><a href="#">Bootstrap</a>,</li>
                                <li><a href="#">Creative</a>,</li>
                                <li><a href="#">Retina</a></li>
                            </ul>
                        </div>

                        <!-- Start Comment Section -->
                        <div class="comment-section">
                            <h2>4 Comments</h2>

                            <ul class="comment-tree">
                                <li>
                                    <div class="comment-box">
                                        <img alt="" src="assets/images/testimonials/1.jpg">
                                        <div class="comment-content">
                                            <h4>John Doe <a href="#">Reply</a></h4>
                                            <span>July 6, 2013. 8:30 pm.</span>
                                            <p>Class aptent taciti sociosqu litora torquent per conubia per
                                                himenaeos. Nulla tristique in semper vel. Vestibulum sodales ante a
                                                purus volutpat euismod. Proin sodales quam nec ante sollicitudin
                                                lacinia. </p>
                                        </div>
                                    </div>
                                    <ul class="depth">
                                        <li>
                                            <div class="comment-box">
                                                <img alt="" src="assets/images/testimonials/2.jpg">
                                                <div class="comment-content">
                                                    <h4>John Doe <a href="#">Reply</a></h4>
                                                    <span>July 6, 2013. 8:30 pm.</span>
                                                    <p>Class aptent taciti sociosqu litora torquent per conubia per
                                                        himenaeos. Nulla tristique in semper vel. </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <div class="comment-box">
                                        <img alt="" src="assets/images/testimonials/2.jpg">
                                        <div class="comment-content">
                                            <h4>John Doe <a href="#">Reply</a></h4>
                                            <span>July 6, 2013. 8:30 pm.</span>
                                            <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi,
                                                euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras
                                                consequat.</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="comment-box">
                                        <img alt="" src="assets/images/testimonials/3.jpg">
                                        <div class="comment-content">
                                            <h4>John Doe <a href="#">Reply</a></h4>
                                            <span>July 6, 2013. 8:30 pm.</span>
                                            <p>Class aptent taciti sociosqu litora torquent per conubia per
                                                himenaeos. Nulla tristique in semper vel. Vestibulum sodales ante a
                                                purus volutpat euismod. Proin sodales quam nec ante sollicitudin
                                                lacinia. </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                            <form class="comment-form">
                                <h2>Leave a Reply</h2>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input name="name" id="name1" type="text" placeholder="Nama*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="mail" id="mail1" type="text" placeholder="Email*">
                                    </div>
                                    <div class="col-md-4">
                                        <input name="website" id="website1" type="text" placeholder="Website">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="comment" id="comment1" placeholder="Tuliskan pesanmu*"></textarea>
                                        <input type="submit" id="submit_contact1" class="btn btn-primary" value="Kirim Komentar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--/#meet-team-->


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2020 <a target="_blank" href="www.pmisurakarta.or.id"> PMI KOTA SURAKARTA.</a> All rights reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <!--JS Count Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>