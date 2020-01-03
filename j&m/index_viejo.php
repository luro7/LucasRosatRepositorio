<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J&M Express</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo">
                    <a href="index_viejo.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <ul class="main-menu">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./search.html">Login</a></li>
                    <li><a href="./about.html">Galería</a></li>
                    <!-- <li><a href="./single-property.html">Single Property</a></li> -->
                    <!-- <li><a href="./blog.html">Blog</a></li> -->
                    <li><a href="./contact.html">Contacto</a></li>

                   <!--  <li class="top-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li> -->
                </ul>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->
<!-- Hero Section Begin -->
<section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
    <div class="container hero-text text-white">
        <h2>Envía tu encomienda</h2>
        <h1>ahora mismo.</h1>
    </div>
    <div class="filter-search">
        <div class="container" >
            <div class="row">
                <div class="col-lg-10">
                    <form class="formulario" >
                        <div class="col-md-5 colocacion" style="float: left;">
                            <label for="">Desde</label>
                            <select type="text" class="form-control" id="lugar_desde">
                                <option value="Bahia Blanca">Bahia Blanca</option>
                                <option value="Monte Hermoso">Monte Hermoso</option>
                            </select>
                        </div>
                        <div class="col-md-5 colocacion" style="float: left; margin-bottom: 20px; ">
                            <label for="">Hasta</label>
                            <select type="text" class="form-control" id="lugar_hasta">
                                <option value="Bahia Blanca">Bahia Blanca</option>
                                <option value="Monte Hermoso">Monte Hermoso</option>
                            </select>
                        </div>
                        <div class="search-btn">
                            <!--<button type="submit"><i class="flaticon-search"></i>Search</button>-->
                            <button id="modalCompletar" type="button" data-toggle="modal"><i class="flaticon-search"></i>Nuevo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Filter Search Section Begin -->

<!-- Filter Search Section End -->
<!-- Hotel Room Section Begin -->
<!--<section class="hotel-rooms spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/1.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/2.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/3.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/4.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/5.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="room-items">
                    <div class="room-img set-bg" data-setbg="img/rooms/6.jpg">
                        <a href="#" class="room-content">
                            <i class="flaticon-heart"></i>
                        </a>
                    </div>
                    <div class="room-text">
                        <div class="room-details">
                            <div class="room-title">
                                <h5>Country Style House with beautiful garden and terrace</h5>
                                <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                            </div>
                        </div>
                        <div class="room-features">
                            <div class="room-info">
                                <div class="size">
                                    <p>Lot Size</p>
                                    <img src="img/rooms/size.png" alt="">
                                    <i class="flaticon-bath"></i>
                                    <span>2561 sqft</span>
                                </div>
                                <div class="beds">
                                    <p>Beds</p>
                                    <img src="img/rooms/bed.png" alt="">
                                    <span>9</span>
                                </div>
                                <div class="baths">
                                    <p>Baths</p>
                                    <img src="img/rooms/bath.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <p>Garage</p>
                                    <img src="img/rooms/garage.png" alt="">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <div class="room-price">
                            <p>For Sale</p>
                            <span>$345,000</span>
                        </div>
                        <a href="#" class="site-btn btn-line">View Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Hotel Room Section End -->
<!-- Popular Room Section Begin -->
<!-- <section class="popular-room set-bg p-in" data-setbg="img/bg-2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="slider-active owl-carousel">
                    <div class="popular-items">
                        <div class="popular-room-text">
                            <div class="popular-room-details">
                                <div class="popular-room-title">
                                    <h5>Spacious Modern Smart House</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                    <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                </div>
                            </div>
                            <div class="popular-room-description">
                                <div class="popular-room-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                        commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                        vehicula imperdiet sed justo. magna.</p>
                                </div>
                            </div>
                            <div class="popular-room-features">
                                <div class="popular-room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>2561 sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>9</span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <p>Garage</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span>1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-room-price">
                                <p>For Sale</p>
                                <span>$345,000</span>
                                <span class="deal">Best Deal</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                    <div class="popular-items">
                        <div class="popular-room-text">
                            <div class="popular-room-details">
                                <div class="popular-room-title">
                                    <h5>Spacious Modern Smart House</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                    <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                </div>
                            </div>
                            <div class="popular-room-description">
                                <div class="popular-room-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                        commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                        vehicula imperdiet sed justo. magna.</p>
                                </div>
                            </div>
                            <div class="popular-room-features">
                                <div class="popular-room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>2561 sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>9</span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <p>Garage</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span>1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-room-price">
                                <p>For Sale</p>
                                <span>$345,000</span>
                                <span class="deal">Best Deal</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                    <div class="popular-items">
                        <div class="popular-room-text">
                            <div class="popular-room-details">
                                <div class="popular-room-title">
                                    <h5>Spacious Modern Smart House</h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                    <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                </div>
                            </div>
                            <div class="popular-room-description">
                                <div class="popular-room-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                        commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                        vehicula imperdiet sed justo. magna.</p>
                                </div>
                            </div>
                            <div class="popular-room-features">
                                <div class="popular-room-info">
                                    <div class="size">
                                        <p>Lot Size</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span>2561 sqft</span>
                                    </div>
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>9</span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <p>Garage</p>
                                        <img src="img/rooms/garage.png" alt="">
                                        <span>1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-room-price">
                                <p>For Sale</p>
                                <span>$345,000</span>
                                <span class="deal">Best Deal</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Popular Room Section End -->
<!-- Newslatter Section Begin -->
<!-- <section class="newslatter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="newslatter-text">
                    <img src="img/message.png" alt="">
                    <h4>Join our mailing to get weekly updates on <br>our exclusive deals.</h4>
                    <form>
                        <input type="text" placeholder="Email address">
                        <button type="submit" class="site-btn news-btn">Subscribe!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Newslatter Section End -->
<!-- Servies Section Begin -->
<section class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="left-side">
                    <h2><span>Porque enviar sus encomiendas con nosotros?</span><br><br>Porque brindamos un servicio <br> con la mejor calidad.</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right-side">
                    <ul>
                        <li><img src="img/check.png" alt="">Ofrecemos nuestros servicios a un menor precio.</li>
                        <li><img src="img/check.png" alt="">Servicio puerta a puerta.</li>
                        <li><img src="img/check.png" alt="">Rapidez en el retiro de la encomienda.</li>
                        <li><img src="img/check.png" alt="">Entrega del envio en manos del receptor.</li>
                        <li><img src="img/check.png" alt="">Fuerte compromiso con nuestros clientes.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Servies Section End -->
<!-- <section class="instagram">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Don’t forget to follow us on Instagram @homes</h2>
            </div>
        </div>
    </div>
</section> -->
<!-- Footer Section Begin -->
<footer class="footer-section">
    <!-- Rooms Pic Section Begin-->
    <div class="room-pic">
        <div class="container-fluid">
            <!-- <div class="row sp-40">
                <img src="img/room-pic/1.jpg" alt="">
                <img src="img/room-pic/2.jpg" alt="">
                <img src="img/room-pic/3.jpg" alt="">
                <img src="img/room-pic/4.jpg" alt="">
                <img src="img/room-pic/5.jpg" alt="">
            </div> -->
        </div>
    </div>
    <!-- Rooms Pic Section End -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center sp-60">
                <!-- <img src="img/only-logo.png" alt=""> -->
            </div>
        </div>
        <div class="row p-37">
            <div class="col-lg-4">
                <div class="about-footer">
                    <h5>Acerca de Nosotros</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                        Maecenas a rutrum tellus nam vel semper nibh.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
<!--                <div class="footer-blog">-->
<!--                    <h5>Latest Blog Posts</h5>-->
<!---->
<!--                    <div class="single-blog">-->
<!--                        <div class="lt-side">-->
<!--                            <img src="img/footer-blog-1.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="rt-side">-->
<!--                            <h6>How to find the perfect area for<br> your next house.</h6>-->
<!--                            <div class="blog-time">-->
<!--                                <i class="flaticon-clock"></i>-->
<!--                                <span>5 min</span>-->
<!--                            </div>-->
<!--                            <a href="#" class="read-more">-->
<!--                                <i class="flaticon-right-arrow-1"></i>-->
<!--                                <span>Read More</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="single-blog">-->
<!--                        <div class="lt-side">-->
<!--                            <img src="img/footer-blog-2.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="rt-side">-->
<!--                            <h6>How to find the perfect area for<br> your next house.</h6>-->
<!--                            <div class="blog-time">-->
<!--                                <i class="flaticon-clock"></i>-->
<!--                                <span>5 min</span>-->
<!--                            </div>-->
<!--                            <a href="#" class="read-more">-->
<!--                                <i class="flaticon-right-arrow-1"></i>-->
<!--                                <span>Read More</span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-address">
                    <h5>Contáctenos</h5>
                    <ul>
                        <li><i class="flaticon-placeholder"></i><span>Calle Nº111, Buenos Aires, Argentina</span>
                        </li>
                        <li><i class="flaticon-envelope"></i><span>mail@mail.com</span></li>
                        <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                    </ul>
                    <p>Lunes – Viernes: 9 am – 5 pm</p>
                    <p>Sabados: 9 am – 1pm</p>
                </div>
            </div>
        </div>

        <div class="row p-20">
            <div class="col-lg-12 text-center">
                <div class="copyright">
                     © 2019 Diseño y Desarollo por  <a class="iddeadevs" href="http://www.iddeadevs.com" >IddeaDevs</a>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-resize" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="abrir-form">
                <form id="formDatos" class="registro" method="post">
                    <div class="form_registro_body">
                        <div class="step active" id="step-1">
                            <div class="modal-body">
                                <div id="elegir_formulario">
                                    <button type="button" id="registrado" style="display: block;margin-bottom: 10px;" class="btn btn-success">Estoy Registrado</button>
                                    <button type="button" id="registrar" class="btn btn-success">Registrarme</button>
                                </div>
                                <div id="div_dni" style="display: none;">
                                    <h4 class="text-center text-black-50">Ingrese su DNI para buscar su usuario</h4>
                                    <div class="alinearDni col-md-8">
                                        <label for="dni_buscar" class="col-form-label">DNI (Ej: 40XXXXXX)</label>
                                        <input type="text" id="dni_buscar" class="BuscarDni" placeholder="Introduce el DNI" required>
                                        <button type="button" id="btnBuscar" class="btn btn-success">Buscar</button>
                                    </div>
                                    <div class="form-group col-md-10 text-center">
                                        <h6 id="mensaje" style="color: darkgreen; margin-top: 10px;"></h6>
                                    </div>
                                </div>
                                <div id="div_datos_cli" style="display: none;">
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="nombre" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="apellido" class="col-form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="dni" class="col-form-label">DNI</label>
                                        <input type="text" class="form-control" id="dni" name="dni" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="telefono" class="col-form-label">Telefono</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                    <div class="form-group col-md-5 ubicacion">
                                        <label for="domicilio" class="col-form-label">Domicilio</label>
                                        <input type="text" class="form-control" id="domicilio" name="domicilio" required>
                                    </div>

                                    <div class="form-group col-md-10 text-center">
                                        <h6 id="mensaje_campos" style="color: #ff2a2a; margin-top: 10px;"></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="volver_elegir" style="display: none;" class="btn btn-secondary">Volver</button>
                                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="button" data-to_step="2" data-step="1" id="btnClienteCargado" class="btn btn-success">Continuar</button>
                            </div>
                        </div>
                        <div class="step" id="step-2">
                            <div class="modal-body">
                                <div class="form-group col-md-5 ubicacion">
                                    <label for="" class="col-form-label">Ubicación del envío</label>
                                    <input type="text" class="form-control" id="" placeholder="Ingrese calle y altura">
                                    <input type="text" class="form-control" id="lugar_envio_desde" value="" disabled>
                                </div>
                                <div class="form-group col-md-5 ubicacion" >
                                    <label for="" class="col-form-label">Ubicación de recepción</label>
                                    <input type="text" class="form-control" id="" placeholder="Ingrese calle y altura">
                                    <input type="text" class="form-control" id="lugar_envio_hasta" value="" disabled>
                                </div>
                                <div class="form-group col-md-5 ubicacion">
                                    <label for="tamaño" class="col-form-label">Tamaño del paquete que desea enviar.</label><br>
                                        <input type="radio" name="tamaño" id="grande">
                                        <label for="grande">Grande</label>
                                        <input type="radio" name="tamaño" id="mediano">
                                        <label for="mediano">Mediano</label>
                                        <input type="radio" name="tamaño" id="chico">
                                        <label for="chico">Chico</label>
                                </div>
                                <div class="form-group col-md-5 ubicacion">
                                    <label for="" class="col-form-label">Cantidad de bultos</label>
                                    <input type="text" class="form-control" id="">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="costo" class="col-form-label">Costo de la encomienda</label>
                                    <input type="text" class="form-control" id="costo" disabled="">
                                </div>
                                <!--<div class="form-group form-registro-progreso col-md-10">
                                    <ul class="progressbar">
                                        <li class="progressbar__option active">En espera</li>
                                        <li class="progressbar__option ">Aceptado</li>
                                        <li class="progressbar__option ">Entregado</li>
                                    </ul>
                                </div>-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-to_step="1" data-step="2" class="btn btn-secondary clase_volver" >Volver</button>
                                <button type="button" id="btnGuardar" data-to_step="3" data-step="2" class="btn btn-success clase_siguiente">Continuar</button>
                            </div>
                        </div>
                        <div class="step" id="step-3">
                            <div class="modal-body">
                                <h3> Detalles del envio.</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                    ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                    ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam aperiam, atque consequuntur deleniti dolor dolorem,
                                    ea et ex excepturi illum ipsa minus natus officia quae qui repellat veniam.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-to_step="2" data-step="3" class="btn btn-secondary clase_volver">Volver</button>
                                <button type="submit" id="btnGuardar" data-to_step="3" data-step="2" class="btn btn-success">Aceptar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Js Plugins -->
<link rel="stylesheet" type="text/css" href="alertify/css/alertify.min.css" >
<link rel="stylesheet" type="text/css" href="alertify/css/themes/default.css" >
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/main.js"></script>
<script src="js/modal.js"></script>
<script src="alertify/alertify.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        abrir_div();
        var nombre, apellido,tel,dni,dom;
        $("#btnClienteCargado").click(function (e) {
            nombre = $('#nombre').val();
            apellido = $('#apellido').val();
            tel = $('#telefono').val();
            dni = $('#dni').val();
            dom = $('#domicilio').val();
            if (nombre.length==0 || apellido.length==0 || tel.length==0 || dni.length==0 || dom.length==0) {
                $('#mensaje_campos').addClass('contError');
                document.getElementById("mensaje_campos").innerHTML ="Debe completar todos los campos" ;
                $('#btnClienteCargado').removeClass('clase_siguiente');
            }else {
                $('#btnClienteCargado').addClass('clase_siguiente');
                document.getElementById("mensaje_campos").innerHTML ="" ;
                e.preventDefault();
                $.ajax({
                    method: 'POST',
                    url: '/../BACKEND/apis/clientes/RegistroCliente.php',
                    dataType: 'json',
                    data: {
                        nombre: $("#nombre").val(),
                        apellido: $("#apellido").val(),
                        dni: $("#dni").val(),
                        telefono: $("#telefono").val(),
                        domicilio: $("#domicilio").val()
                    },
                    success: function (respuesta) {
                        alertify.alert('Correcto', respuesta.mensaje, function () {
                            alertify.success('Guardado!');
                        });
                        //alertify.alert(respuesta.mensaje);
                    },
                    error: function () {
                        console.log("No se ha podido obtener la información");
                    }
                });
            }
        });

        $("#btnBuscar").click(function (e) {
            var dni;
            dni = $('#dni_buscar').val();
            if (dni.length==0) {
                $('#mensaje').addClass('contError');
                document.getElementById("mensaje").innerHTML ="Debe colocar un DNI" ;
                $('#btnClienteCargado').removeClass('clase_siguiente');
            }else {
                $('#mensaje').removeClass('contError');
                $('#btnClienteCargado').addClass('clase_siguiente');
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'BACKEND/apis/clientes/BuscarCliente.php',
                    dataType: 'json',
                    data: {
                        dni: $("#dni_buscar").val()
                    },
                    success: function (respuesta) {
                        if (respuesta.codigo == 1) {
                            document.getElementById("mensaje").innerHTML = "Bienvenido " + respuesta.mensaje.cli_nombre + " " + respuesta.mensaje.apellido;
                            $('#btnClienteCargado').addClass('clase_siguiente');
                            /*  document.getElementById('nombre').value = respuesta.mensaje.cli_nombre;
                              document.getElementById('apellido').value = respuesta.mensaje.apellido;
                              document.getElementById('dni').value = respuesta.mensaje.dni;
                              document.getElementById('telefono').value = respuesta.mensaje.telefono;
                              document.getElementById('domicilio').value = respuesta.mensaje.nombre+" "+respuesta.mensaje.latitud+" "+respuesta.mensaje.longitud;*/
                        } else {
                            document.getElementById("mensaje").innerHTML = respuesta.mensaje;
                            $('#btnClienteCargado').removeClass('clase_siguiente');
                        }
                    },
                    error: function (data) {
                        console.log("No se ha podido obtener la información");
                    }
                });
            }
        });
    });

    function abrir_div(){
        $("#registrado").click(function(){

            $("#volver_elegir").prop('display', 'block');
            $("#div_datos_cli").hide();
            $('#elegir_formulario').hide();
            $("#div_dni").show();
            $("#volver_elegir").css('display', 'block');
        });
        $("#registrar").click(function(){
            $("#div_datos_cli").show();
            $('#elegir_formulario').hide();
            $("#div_dni").hide();
            $("#volver_elegir").css('display', 'block');
        });
        $("#volver_elegir").click(function(){
            $("#elegir_formulario").show();
            $('#div_datos_cli').hide();
            $("#div_dni").hide();
            $("#volver_elegir").css('display', 'none');
        });
    }

    function ValidarUsu() {
            $.ajax({
                method: 'POST',
                url: 'BACKEND/apis/clientes/RegistroCliente.php',
                dataType: 'json',
                data: {
                    nombre: $("#nombre").val(),
                    apellido: $("#apellido").val(),
                    dni: $("#dni").val(),
                    telefono: $("#telefono").val(),
                    domicilio: $("#domicilio").val()
                },
                success: function (respuesta) {
                    alertify.success(respuesta.mensaje);
                    //alertify.alert(respuesta.mensaje);
                },
                error: function () {
                    console.log("No se ha podido obtener la información");
                }
            });
    }
</script>
</body>

</html>