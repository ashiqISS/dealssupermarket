<?php
$value = rtrim($product->category_id, ',');
$ids = explode(',', $value);
foreach ($ids as $id) {
        $cat_name = ProductCategory::model()->findByPk($id)->category_name;
}
?>



<?php
$folder = Yii::app()->Upload->folderName(0, 1000, $product->id);
?>


<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <?php
                                //$category_name = Yii::app()->request->getParam('name');
                                $url = Yii::app()->request->urlReferrer;
                                $catname = explode("/", $url);
                                $category_name = $catname[8];
                                ?>
                                <?php echo $this->renderPartial('_bread_crumb', array('category_name' => $category_name)); ?><span>/</span><?php echo $product->product_name; ?>

                        </div>
                </div>
        </div>

</div>

<section class="details-products">
        <div class="container">
                <div class="row">
                        <div class="col-md-9">
                                <div class="row">
                                        <div class="col-md-6">

                                                <!-- MAIN SLIDES -->
                                                <div class="views">
                                                        <figure class="figures"> <img class="img-responsive" src="images/d1.jpg" alt="One">
                                                        </figure>
                                                        <figure class="figures"> <img class="img-responsive" src="images/d2.jpg" alt="One">
                                                        </figure>
                                                        <figure class="figures"> <img class="img-responsive" src="images/d3.jpg" alt="One">
                                                        </figure>
                                                </div>
                                                <!-- THUMBNAILS -->
                                                <div class="slider-nav-thumbnails">
                                                        <div><img class="small_img" src="images/d1.jpg" alt="One"></div>
                                                        <div><img class="small_img" src="images/d2.jpg" alt="Two"> </div>
                                                        <div><img class="small_img" src="images/d3.jpg" alt="Three"> </div>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <h1>Product Description</h1>
                                                <p><?php echo $product->description; ?></p>
                                                <h2>AED :<?php
                                                        if (($_SESSION['location']) && ($_SESSION['location'] == 'MARINA')) {

                                                                echo $product->price_in_marina;
                                                        } else {
                                                                echo $product->price_in_barsha;
                                                        }
                                                        ?></h2>
                                                <div class="counter">
                                                        <div class="counter-1">
                                                                <a class="cart-b" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
                                                        </div>

                                                        <div class="counter-2">
                                                                <div class="input-group topz">
                                                                        <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default min">-</button>
                                                                        </span>
                                                                        <input id="after" class="form-control nisi" type="text" value="1" min="1" max="10" vk_17e8e="subscribed" style="text-align: center;">
                                                                        <span class="input-group-btn">
                                                                                <button type="button" class="btn btn-default min">+</button>
                                                                        </span>
                                                                </div>

                                                        </div>
                                                </div>


                                                <div class="clearfix"></div>

                                                <h6>Product will be delivered within 8 - 10 business days</h6>
                                                <h5>Estimated Delivery Charges <span class="deliver">+Rs 476</span></h5>
                                        </div>
                                </div>


                        </div>
                        <div class="col-md-3">

                                <div class="lak takeover">
                                        <a href="#">  <img class="img-responsive our center-block" src="images/p1.jpg"> </a>
                                        <div class="cart-img">
                                                <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
                                        </div>

                                        <div class="overlays"></div>


                                        <img class="img-responsive off-tag" src="images/tag.png">

                                </div>
                                <div class="lak takeover">
                                        <a href="#">  <img class="img-responsive our center-block" src="images/p1.jpg"> </a>
                                        <div class="cart-img">
                                                <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
                                        </div>

                                        <div class="overlays"></div>


                                        <img class="img-responsive off-tag" src="images/tag.png">

                                </div>
                        </div>

                </div>
        </div>
</div>
</section>


<section class="ink">
        <div class="container">
                <div class="row">
                        <div class="col-md-12 col-sm-12">
                                <div class="color-1">
                                        <ul id="myTabs" class="nav nav-tabs nav-justified adv">
                                                <li class="sims active"><a href="#service-1" data-toggle="tab" aria-expanded="true">Discription</a></li>
                                                <li class="sims"><a href="#service-2" data-toggle="tab" aria-expanded="false">Additional Description</a> </li>

                                        </ul>
                                        <div id="myTabContent" class="tab-content packing">
                                                <div class="tab-pane fade active in" id="service-1">
                                                        <h1><?php echo $product->product_details; ?></h1>

                                                </div>
                                                <div class="tab-pane fade" id="service-2">
                                                        <h1><?php echo $product->product_details1; ?></h1>

                                                </div>



                                                <div class="tab-pane fade" id="service-3">
                                                        <h1>product description</h1>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                                                est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
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

                                <h1><span class="popular">popular PRODUCTS</span></h1>

                                <div class="product-detail">
                                        <div class="item margins">
                                                <div class="main">

                                                        <div class="lak">
                                                                <a href="#">  <img class="img-responsive our" src="images/p1.jpg"> </a>
                                                                <div class="cart-img">
                                                                        <h3><a class="title_1" href="#">Coca Cola</a></h3>
                                                                        <h4><a class="title_2" href="#">AED : 1.50</a></h4>
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
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
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
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
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
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
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
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
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
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
                                                                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
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

        $('.views').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '.slider-nav-thumbnails',
//    prevArrow : '<i id="prev_slide_gallery" class="fa fa-angle-left"></i>',
//    nextArrow : '<i id="next_slide_gallery" class="fa  fa-angle-right"></i>',


        });

        $('.slider-nav-thumbnails').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '.views',
                dots: false,
                //	centerMode: true,
                focusOnSelect: true,
                responsive: [
                        {
                                breakpoint: 650,
                                settings: {
                                        centerMode: false,
                                        slidesToShow: 4

                                }

                        },
                        {
                                breakpoint: 520,
                                settings: {
                                        centerMode: false,
                                        slidesToShow: 3

                                }

                        },
                        {
                                breakpoint: 350,
                                settings: {
                                        centerMode: false,
                                        slidesToShow: 2

                                }

                        }

                ]

        });


        //remove active class from all thumbnail slides
        $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

        //set active class to first thumbnail slides
        $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

        // On before slide change match active thumbnail to current slide
        $('.views').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                var mySlideNumber = nextSlide;
                $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
                $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
        });

</script>

<script>

        $(document).ready(function() {

                $('.product-detail').slick({
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
