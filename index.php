<?php
    session_start();
    include './admin/cmsAdmin/function.php';
    $post = new posts;
    $rows = $post->getProdect();
    $cats = $post->getCat();
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electorinc.</title>
    <link rel="stylesheet" href="content/theme/css/all.min.css">
    <link rel="stylesheet" href="content/theme/css/normlize.css">
    <link rel="stylesheet" href="content/theme/css/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="content/theme/css/owl.carousel.min.css">
    <link rel="stylesheet" href="content/theme/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="content/theme/css/style.css">
</head>

<body>
    <!-- start navbar -->
    <!-- soical -->
    <div class="socials">
        <div class="socail">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-google-plus-g"></i>
            <i class="fab fa-youtube"></i>
            <div class="dollar">
                <i class="fas fa-dollar-sign"></i>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="en">
                <span>En</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
    <!-- soical -->

    <div class="navbar-top">
        <div class="container">
            <div class="nav-content">
                <div class="logo">
                    <p><span>e</span> electronic</p>
                </div>
                <div class="search">
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit">search</button>
                    </form>
                </div>
                <div class="tele">
                    <i class="fas fa-phone-alt"></i>
                    <span>800-2345-6789</span>
                    <span><a href="admin/cmsAdmin/Register.php">SignUp</a> </span>
                    <span><a href="admin/cmsAdmin/login.php">Login</a> </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End navbar -->
    <!-- start header -->
    <div class="header">
        <div class="container">
            <div class="header-con">
                <!-- category -->
                <div class="category">
                    <div class="cat-header">
                        <i class="fas fa-bars"></i>
                        <h3>Categories</h3>
                    </div>
                    
                    <ul class="list-none">
                        <?php
                        foreach($cats as $cat){?>
                            <li><a href="categ.php?id=<?= $cat['ID']?>&name=<?= $cat['name']?>"><?= $cat['name'] ?></a></li>
                      <?php  }
                        ?>
                    </ul>
                    
                </div>
                <!-- category -->
                <div class="slide">
                    <div class="slide-nav">
                        <ul class="list-none">
                            <li><i class="fas fa-home"></i>Home</li>
                            <li><i class="far fa-star"></i>Wish List</li>
                            <li><i class="fas fa-portrait"></i>My Account</li>
                            <li><i class="fas fa-shopping-cart"></i>Shopping</li>
                            <li><i class="far fa-check-square"></i>Checkout</li>
                            <li><a href="./admin/cmsAdmin/cart.php"> <i class="fas fa-shopping-cart"></i>item <i class="fas fa-chevron-down"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--Start Carosul-->
                    <div class="slide-slider">
                        <div class="slide-remote active">
                            <div class="slide-continer">
                                <div class="img-box">
                                    <img src="content/theme/image/iphone01.png" alt="" srcset="">
                                </div>
                                <div class="cont-box">
                                    <h4>iphone 6</h4>
                                    <p>Comfort is a very important thing nowadays because it is a condition of satisfaction.</p>
                                    <a href="">Shop now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide-remote">
                            <div class="slide-continer">
                                <div class="img-box">
                                    <img src="content/theme/image/iphone02.png" alt="" srcset="">
                                </div>
                                <div class="cont-box">
                                    <h4>iphone 6 Max</h4>
                                    <p>Quo minus pariatur in enim accusantium sed illum accusantium ab omnis veniam et alias eveniet.</p>
                                    <a href="">Shop now!</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide-remote">
                            <div class="slide-continer">
                                <div class="img-box last-img">
                                    <img src="content/theme/image/iphone03.png" alt="" srcset="">
                                </div>
                                <div class="cont-box">
                                    <h4>iphone 6 Plus</h4>
                                    <p>This expedient serves to get an idea of the finished product that will soon be printed.</p>
                                    <a href="">Shop now!</a>
                                </div>
                            </div>
                        </div>
                        <button id="prev" onclick="prev()" class="arr-left"><i class="fas fa-arrow-left"></i></button>
                        <button id="next" onclick="next()" class="arr-right"><i class="fas fa-arrow-right"></i></button>
                    </div>
                    <!--End Carosul-->
                    <div class="slide-bottom">
                        <div class="box1">
                            <div class="content">
                                <h3 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="200">TV&Video</h3>
                                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus distinctio corporis reprehenderit architecto.</p>
                                <a class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200" href="">Shop now!</a>
                            </div>

                            <img src="content/theme/image/PNG-images-Monitor-19png.png" alt="">
                        </div>
                        <div class="box2">
                            <div class="content">
                                <h3 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="200">Home appliances</h3>
                                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus distinctio corporis reprehenderit architecto.</p>
                                <a class="wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200" href="">Shop now!</a>
                            </div>

                            <img src="content/theme/image/PNG-images-PNGs-Vacuum-Vacuum-cleaner-Hoover-Hoovers--24png.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->
    <!-- Start  Latest -->
    <div class="container">
        <div class="latest">
            <div class="specal">
                <h5>Specials</h5>
                <div class="items">
                    <img src="content/theme/image/cameraSmall.png" alt="">
                    <div class="specal-cont">
                        <span class="span-one">$90.00</span>
                        <span class="span-two">EOS 7OD Digtal SLR Camera</span>
                    </div>
                </div>
                <div class="items">
                    <img src="content/theme/image/cameraSmall.png" alt="">
                    <div class="specal-cont">
                        <span class="span-one">$90.00</span>
                        <span class="span-two">EOS 7OD Digtal SLR Camera</span>
                    </div>
                </div>
                <div class="items">
                    <img src="content/theme/image/cameraVideo.png" alt="">
                    <div class="specal-cont">
                        <span class="span-one">$80.00</span>
                        <span class="span-two">Wirless SmartPhone Video capture</span>
                    </div>
                </div>
            </div>
            <div class="latests">
                <h3>Latest</h3>
                <i class="fas fa-chevron-left move"></i>
                <i class="fas fa-chevron-right move"></i>

                <div class="latest-contain">
                    <?php
                    foreach($rows as $row)
                    {
                        ?>

                    <div class="latest-box">
                        <form action="./admin/cmsAdmin/cart.php?cart=add&id=<?= $row['id']?>" method="POST">
                        <div class="image-box">
                            <img src="content/theme/image/<?= $row['images']; ?>" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/<?= $row['images'] ?>" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100"><?= $row['prod_date'] ?></h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100"><?= $row['prod_name'] ?></p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$<?= $row['price'] ?></span>
                        <input type="hidden" value="<?= $row['id'] ?>">
                        <input type="text" name="quantity" value="1" />
                        <input type="hidden" name="hidden_name" value="<?= $row['prod_name']?>"/>
                        <input type="hidden" name="hidden_price" value="<?= $row['price']?>"/>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <input type="submit" name="add_to_cart" value="add_to_cart">
                        <div class="latest-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart">

                            </i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    
                        </form>
                    </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest -->
    <!-- Start  Featured -->
    <div class="container">
        <div class="featured">
            <div class="bestseller">
                <h5>Bestsellers</h5>
                <div class="items">
                    <img src="content/theme/image/cameraSmall.png" alt="">
                    <div class="bestseller-cont">
                        <span class="span-one">$90.00</span>
                        <span class="span-two">EOS 7OD Digtal SLR Camera</span>
                    </div>
                </div>
                <div class="items">
                    <img src="content/theme/image/cameraVideo.png" alt="">
                    <div class="bestseller-cont">
                        <span class="span-one">$80.00</span>
                        <span class="span-two">Wirless SmartPhone Video capture</span>
                    </div>
                </div>
                <div class="items">
                    <img src="content/theme/image/cameraVideo.png" alt="">
                    <div class="bestseller-cont">
                        <span class="span-one">$80.00</span>
                        <span class="span-two">Wirless SmartPhone Video capture</span>
                    </div>
                </div>
            </div>
            <div class="featureds">
                <h3>Featured</h3>
                <i class="fas fa-chevron-left make"></i>
                <i class="fas fa-chevron-right make"></i>
                <div class="featured-contain">
                    <div class="featured-box">
                        <div class="image-box">
                            <img src="content/theme/image/apple.png" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/monetor2.png" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$3000.00</h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">65-Inch 4K HD Smart LED TV</p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <div class="featured-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="image-box">
                            <img src="content/theme/image/apple.png" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/monetor2.png" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$3000.00</h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">65-Inch 4K HD Smart LED TV</p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <div class="featured-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="image-box">
                            <img src="content/theme/image/apple.png" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/monetor2.png" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$3000.00</h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">65-Inch 4K HD Smart LED TV</p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <div class="featured-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="image-box">
                            <img src="content/theme/image/apple.png" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/monetor2.png" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$3000.00</h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">65-Inch 4K HD Smart LED TV</p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <div class="featured-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="image-box">
                            <img src="content/theme/image/apple.png" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/monetor2.png" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$3000.00</h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">65-Inch 4K HD Smart LED TV</p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <div class="featured-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="featured-box">
                        <div class="image-box">
                            <img src="content/theme/image/apple.png" alt="" srcset="">
                            <img class="image-hover" src="content/theme/image/monetor2.png" alt="" srcset="">
                        </div>
                        <h5 class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">$3000.00</h5>
                        <p class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">65-Inch 4K HD Smart LED TV</p>
                        <span class="wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis delectus praesentium laborum nulla, molestias modi rerum distinctio ullam ea temporidem.</span>
                        <div class="featured-icon wow fadeInLeft" data-wow-duration=".5s" data-wow-offset="100">
                            <i class="fas fa-shopping-cart"></i>
                            <i class="far fa-heart"></i>
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End featured -->
    <!-- Start About -->
    <div class="about">
        <div class="container">
            <div class="about-content">
                <div class="abouts">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio recusandae possimus quaerat maxime labore, laborum tenetur. Optio nostrum numquam maxime incidunt architecto modi iste aut, a natus, excepturi, accusantium ut.</p>
                </div>
                <div class="events">
                    <h3>Events</h3>
                    <div><i class="fas fa-truck"></i><span>Free shoping</span> For All purechases starting from 3 items</div>
                    <div><i class="fas fa-sync-alt"></i><span>100% quality</span> The best quality of all products</div>
                    <div><i class="far fa-thumbs-up"></i><span>Customer programs</span> A lot of bounuse for the loyal customers</div>
                </div>
            </div>
            <hr>
            <div class="about-bottom">
                <div class="information">
                    <h5>Information</h5>
                    <ul class="list-none">
                        <li>About</li>
                        <li>Delevery Information</li>
                        <li>Praviry policy</li>
                        <li>Terms & Condition</li>
                    </ul>
                </div>
                <div class="Computer Service">
                    <h5>Computer Service</h5>
                    <ul class="list-none">
                        <li>Contact Us</li>
                        <li>Return</li>
                        <li>Site Map</li>
                    </ul>
                </div>
                <div class="Extras">
                    <h5>Extras</h5>
                    <ul class="list-none">
                        <li>Brands</li>
                        <li>Gifts</li>
                        <li>Affiction</li>
                        <li>Speceals</li>
                    </ul>
                </div>
                <div class="My Account">
                    <h5>My Account</h5>
                    <ul class="list-none">
                        <li>My Account</li>
                        <li>Order Mostery</li>
                        <li>Wish List</li>
                        <li>NewsLitter</li>
                    </ul>
                </div>
                <div class="Follow-us">
                    <h5>Follow Us</h5>
                    <ul class="list-none">
                        <li><i class="fab fa-facebook-f"></i> <span>Facebook</span></li>
                        <li><i class="fab fa-twitter"></i><span>Twitter</span></li>
                        <li><i class="fab fa-google-plus-g"></i><span>GooglePlus</span></li>
                        <li><i class="fab fa-youtube"></i><span>Youtube</span></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer">
                <span>e</span>
                <p> Powered By OpenCart Elctronic online store &copy; 2021.</p>
            </div>
        </div>
    </div>

    <!-- End About -->

    <script src="content/theme/js/jquery-3.4.1.js"></script>
    <script src="content/theme/js/owl.carousel.min.js"></script>
    <script src="content/theme/js/wow.min.js"></script>
    <script src="content/theme/js/main.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel();
            });
             $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                });
        </script> -->
</body>

</html>