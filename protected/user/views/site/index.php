<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
                <?php
                $r1 = 1;
                foreach ($slider as $sliderss) {
                        if ($r1 == 1) {
                                $active1 = 'active';
                        } else {
                                $active1 = '';
                        }
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $r1; ?>" class="<?= $active1; ?>"></li>

                        <?php
                        $r1++;
                }
                ?>



        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
                <?php
                $r = 1;

                foreach ($slider as $sliders) {
                        if ($r == 1) {
                                $active = 'active';
                        } else {
                                $active = '';
                        }
                        ?>
                        <div class="item <?= $active; ?>">
                                <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/sliders/<?php echo $sliders->id . "." . $sliders->image_extension; ?>" alt="Chania">
                        </div>
                        <?php
                        $r++;
                }
                ?>





        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
        </a>
</div>
<section class="ui-mains">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <?php
                                foreach ($model as $models) {
                                        ?>
                                        <h1><?php echo $models->name; ?></h1>
                                        <p><?php echo $models->large_description; ?> </p>
                                        <?php
                                }
                                ?>
                        </div>
                </div>

        </div>
</section>

<section class="ui-images">
        <div class="container div-1">
                <div class="row">
                        <?php
                        foreach ($pdtbanner as $pdtbanners) {
                                ?>
                                <div class="col-md-6">
                                        <div class="btnz">
                                                <div class="zoom-img">
                                                        <a href="#"><img class="img-responsive bod" src="<?php echo Yii::app()->baseUrl; ?>/uploads/products/1000/<?php echo $pdtbanners->id; ?>/special.<?php echo $pdtbanners->special_product_image; ?>"></a>
                                                </div>
                                                <a class="now" href="#">Shop Now<i class="fa arr fa-angle-right"></i></a>
                                        </div>
                                </div>
                                <?php
                        }
                        ?>

                </div>

        </div>


        <div class="container div-23">
                <div class="row">
                        <div class="col-md-3 col-xs-6 likes">
                                <a href="#">
                                        <img class="img-responsive cen" src="images/r1.jpg">


                                        <h3>Baby Products</h3>
                                        <img class="img-responsive itemz" src="images/icon.png">
                                </a>
                        </div>

                        <div class="col-md-3 col-xs-6 likes">
                                <a href="#">
                                        <img class="img-responsive cen" src="images/r2.jpg">


                                        <h3>Bakery Products</h3>
                                        <img class="img-responsive itemz" src="images/icon-2.png">
                                </a>
                        </div>

                        <div class="col-md-3 col-xs-6 likes">
                                <a href="#">
                                        <img class="img-responsive cen" src="images/r3.jpg">


                                        <h3>Beverages</h3>
                                        <img class="img-responsive itemz" src="images/icon3.png">
                                </a>
                        </div>

                        <div class="col-md-3 col-xs-6 likes">
                                <a href="#">
                                        <img class="img-responsive cen" src="images/r4.jpg">


                                        <h3>Butchery</h3>
                                        <img class="img-responsive itemz" src="images/icon-4.png">
                                </a>
                        </div>

                </div>

        </div>
</section>



<section class="details">
        <div class="container div-1">
                <div class="row">
                        <div class="col-md-12">

                                <h1><span class="popular">popular PRODUCTS</span></h1>

                                <div class="productz">
                                        <div class="item margins">
                                                <div class="main">

                                                        <div class="lak">
                                                                <a href="#">  <img class="img-responsive our" src="images/p1.jpg"> </a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                                        <a class="cart-btn" href="category.php"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>


                                                                <img class="img-responsive off-tag" src="images/tag.png">

                                                        </div>

                                                </div>
                                        </div>

                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p2.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Nescafe Classic 100gm</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 16.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p3.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Signal TB Inside Clean Mar</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 19.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p4.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Lays Chips Salt 170GM</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 6.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#">  <img class="img-responsive our" src="images/p5.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Floridas Natural Growers ..</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 11.50</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p6.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Hero Baby Apple Juice 130ml</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 5.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>





                                </div>

                        </div>
                </div>
        </div>
</section>


<section class="details">
        <div class="container div-1">
                <div class="row">
                        <div class="col-md-12">

                                <h1><span class="popular">Featured PRODUCTS</span></h1>

                                <div class="productz-2">


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p2.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Nescafe Classic 100gm</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 16.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p3.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Signal TB Inside Clean Mar</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 19.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p4.jpg"></a>
                                                                <div class="cart-img">

                                                                        <h3><a class="title_1" href="#">Lays Chips Salt 170GM</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 6.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#">  <img class="img-responsive our" src="images/p5.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Floridas Natural Growers ..</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 11.50</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p6.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Hero Baby Apple Juice 130ml</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 5.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="item margins">
                                                <div class="main">
                                                        <a href="#">
                                                                <div class="lak">
                                                                        <img class="img-responsive our" src="images/p1.jpg">
                                                                        <div class="cart-img">
                                                                                <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                                                <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                                                <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                        </div>

                                                                        <div class="overlays"></div>


                                                                        <img class="img-responsive off-tag" src="images/tag.png">

                                                                </div>
                                                        </a>
                                                </div>
                                        </div>



                                </div>
                        </div>
                </div>
        </div>
</section>
<section class="details">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <img class="img-responsive chick" src="images/ad.jpg">
                        </div>
                </div>
        </div>
</section>



<section class="details">
        <div class="container div-1">
                <div class="row">
                        <div class="col-md-12">

                                <h1><span class="popular">product Category 1</span></h1>

                                <div class="productz-3">

                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p3.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Signal TB Inside Clean Mar</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 19.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="item margins">
                                                <div class="main">
                                                        <a href="#">
                                                                <div class="lak">
                                                                        <img class="img-responsive our" src="images/p1.jpg">
                                                                        <div class="cart-img">
                                                                                <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                                                <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                                                <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                        </div>

                                                                        <div class="overlays"></div>


                                                                        <img class="img-responsive off-tag" src="images/tag.png">

                                                                </div>
                                                        </a>
                                                </div>
                                        </div>

                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p2.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Nescafe Classic 100gm</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 16.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>





                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p4.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Lays Chips Salt 170GM</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 6.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#">  <img class="img-responsive our" src="images/p5.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Floridas Natural Growers ..</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 11.50</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p6.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Hero Baby Apple Juice 130ml</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 5.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>





                                </div>

                        </div>
                </div>
        </div>
</section>





<section class="details">
        <div class="container div-1">
                <div class="row">
                        <div class="col-md-12">

                                <h1><span class="popular">product Category 2</span></h1>

                                <div class="productz-4">
                                        <div class="item margins">
                                                <div class="main">
                                                        <a href="#">
                                                                <div class="lak">
                                                                        <img class="img-responsive our" src="images/p1.jpg">
                                                                        <div class="cart-img">
                                                                                <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                                                <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                                                <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                        </div>

                                                                        <div class="overlays"></div>


                                                                        <img class="img-responsive off-tag" src="images/tag.png">

                                                                </div>
                                                        </a>
                                                </div>
                                        </div>

                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p2.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Nescafe Classic 100gm</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 16.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p6.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Hero Baby Apple Juice 130ml</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 5.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"> <img class="img-responsive our" src="images/p3.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Signal TB Inside Clean Mar</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 19.00</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#"><img class="img-responsive our" src="images/p4.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Lays Chips Salt 170GM</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 6.75</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>


                                        <div class="item margins">
                                                <div class="main">
                                                        <div class="lak">
                                                                <a href="#">  <img class="img-responsive our" src="images/p5.jpg"></a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Floridas Natural Growers ..</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 11.50</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to baskest</a>
                                                                </div>

                                                                <div class="overlays"></div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                        </div>
                </div>
        </div>
</section>


<script>

        $(document).ready(function() {

                $('.productz').slick({
                        slidesToShow: 5,
                        autoplay: false,
                        autoplaySpeed: 4000,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        prevArrow: '<i id="prev_slide_3"><img src="images/prev.png"></i>',
                        nextArrow: '<i id="next_slide_3"><img src="images/next.png"></i>',
                        responsive: [
                                {
                                        breakpoint: 1000,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 3
                                        }
                                },
                                {
                                        breakpoint: 800,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 2
                                        }
                                },
                                {
                                        breakpoint: 480,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 1
                                        }
                                }
                        ]
                });

        });

</script>


<script>

        $(document).ready(function() {

                $('.productz-2').slick({
                        slidesToShow: 5,
                        autoplay: false,
                        autoplaySpeed: 4000,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        prevArrow: '<i id="prev_slide_3"><img src="images/prev.png"></i>',
                        nextArrow: '<i id="next_slide_3"><img src="images/next.png"></i>',
                        responsive: [
                                {
                                        breakpoint: 1000,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 3
                                        }
                                },
                                {
                                        breakpoint: 800,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 2
                                        }
                                },
                                {
                                        breakpoint: 480,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 1
                                        }
                                }
                        ]
                });

        });

</script>



<script>

        $(document).ready(function() {

                $('.productz-3').slick({
                        slidesToShow: 5,
                        autoplay: false,
                        autoplaySpeed: 4000,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        prevArrow: '<i id="prev_slide_3"><img src="images/prev.png"></i>',
                        nextArrow: '<i id="next_slide_3"><img src="images/next.png"></i>',
                        responsive: [
                                {
                                        breakpoint: 1000,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 3
                                        }
                                },
                                {
                                        breakpoint: 800,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 2
                                        }
                                },
                                {
                                        breakpoint: 480,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 1
                                        }
                                }
                        ]
                });

        });

</script>
<script>

        $(document).ready(function() {

                $('.productz-4').slick({
                        slidesToShow: 5,
                        autoplay: false,
                        autoplaySpeed: 4000,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        prevArrow: '<i id="prev_slide_3"><img src="images/prev.png"></i>',
                        nextArrow: '<i id="next_slide_3"><img src="images/next.png"></i>',
                        responsive: [
                                {
                                        breakpoint: 1000,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 3
                                        }
                                },
                                {
                                        breakpoint: 800,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 2
                                        }
                                },
                                {
                                        breakpoint: 480,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 1
                                        }
                                }
                        ]
                });

        });

</script>
