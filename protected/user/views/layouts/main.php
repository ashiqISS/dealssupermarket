<!DOCTYPE html>
<html>
    <head>
        <title>Deals Supermarket</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/simpleMobileMenu.css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,600,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css">
        <!--        <link rel="stylesheet" href="css/font-awesome.min.css">-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/slick-theme.css"/>
        <!--        btn effects-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/component.css" />
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.min.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/slick.min.js"></script>
        <script src="<?php echo Yii::app()->baseUrl; ?>/js/simpleMobileMenu.js"></script>
        <script type="text/javascript">
                /* Location setting*/

                $(document).ready(function () {
                    $('#locdropdown li a').click(function (e) {
                        var txt = $(e.target).text();
                        var t = txt + " <span class = 'caret' >";
                        $("#loc").html(t);

                        var baseUrl = "<?php echo Yii::app()->baseUrl; ?>";

                        if (txt != "")
                        {
                            $.ajax({
                                type: "GET",
                                url: baseUrl + '/Site/SetLocation',
                                data: ({city: txt}),
                                success: function (data)
                                {
                                    location.reload();
                                }
                            });

                        }
                        else
                        {
                            //alert("error");
                        }

                    });
                });

        </script>
        <style>

            #mask {
                background-color: #fff;
                bottom: 0;
                height: 100%;
                left: 0;
                position: fixed;
                right: 0;
                top: 0;
                z-index: 100000;
            }

            #loader {
                background-image: url(<?php echo Yii::app()->baseUrl; ?>/images/loader.gif);
                background-position: center center;
                background-repeat: no-repeat;
                height: 200px;
                left: 50%;
                margin: -100px 0 0 -100px;
                position: absolute;
                top: 50%;
                width: 140px;
            }
            .dropup{
                position: fixed !important;
                width: 100%;
                margin: 0 auto;
                z-index: 200000;
                top: 0;
            }
            .dropdown-menu {
                z-index: 2000000;
            }
            #static_cnt {
                position: relative;
                z-index: 100;
            }

            #static_cnts {
                position: relative;
                z-index: 40000;
            }
            .headers {
                z-index: 1000;
                position: relative;
            }
            .dropups{
                position: fixed !important;
                width: 100%;
                margin: 0 auto;
                z-index: 200000;
                top: 0;
            }


        </style>
    </head>
    <body>

        <div class="ovrly"></div>


        <div id="mask">
            <div id="loader">
            </div>
        </div>



        <div id="static_cnts" class="">
            <header class="cf visible-xs visible-sm">

                <div class="navigation">
                    <nav>
                        <a href="javascript:void(0)" class="smobitrigger ion-navicon-round"><span>Main Category</span></a>
                        <ul class="mobimenu">

                            <div id="cssmenu">
                                <ul>
                                    <li>
                                        <div class="form-mob">

                                            <form action="<?php echo Yii::app()->baseUrl; ?>/index.php/searching/SearchList">
                                                <input type="search" class="searchbox-two" name="Keyword" placeholder="Search" vk_1a558="subscribed">
                                            </form>


                                        </div>


                                    </li>
                                  <!--  <li><a href="#"><span>Baby Products</span></a></li>



                                    <li class="has-sub"><a href="#"><span>Bakery Products</span></a>
                                            <ul>
                                                    <li><a href="#"><span>Engineering</span></a></li>
                                                    <li><a href="#"><span>Business Administration</span></a></li>
                                                    <li class="last"><a href='#'><span>Computer Application</span></a></li>
                                                    <li class="last"><a href='#'><span>Media Science</span></a></li>
                                                    <li class="last"><a href='#'><span>Hospital Management</span></a></li>
                                                    <li class="last"><a href='#'><span>Future Campus School</span></a></li>
                                            </ul>
                                    </li>
                                    <li><a href="#"><span>Beverages</span></a></li>
                                    <li><a href="#"><span>Baby Products</span></a></li>


                                    <li><a href="#"><span>Beverages</span></a></li>
                                    <li><a href="#"><span>Baby Products</span></a></li>-->


                                    <?php
                                    $main_cats = ProductCategory::model()->findAllByAttributes(array(), array('condition' => 'id = parent'));
                                    foreach($main_cats as $main_cat) {
                                            $subcats = ProductCategory::model()->findAllByAttributes(array('parent' => $main_cat->id), array('condition' => 'id !=' . $main_cat->id));
                                            $main_menus = Yii::app()->request->baseUrl . "/index.php/products/category/name/" . $main_cat->canonical_name;
                                            ?>
                                            <li class="has-sub"><a href="<?php echo $main_menus; ?>"><span><?php echo $main_cat->category_name; ?></span></a>
                                                <ul>
                                                    <?php
                                                    foreach($subcats as $cats) {
                                                            $sub_menus = Yii::app()->request->baseUrl . "/index.php/products/category/name/" . $cats->canonical_name;
                                                            ?>

                                                            <li><a href="<?php echo $sub_menus; ?>"><span><?php echo $cats->category_name; ?></span></a></li>



                                                            <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                            <?php
                                    }
                                    ?>
                                </ul>
                            </div>

                        </ul>
                    </nav>
                </div>
            </header>


        </div>
        <div id="static_cnt" class="">



            <section class="headers-main hidden-xs hidden-sm">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a href="<?php echo Yii::app()->baseUrl; ?>/index.php"><img class="img-responsive" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png"/></a>
                        </div>
                        <div class="col-md-6  list-1">
                            <ul>
                                <li><?php echo CHtml::link('Home', array('site/index')) ?></li>
                                <li><?php echo CHtml::link('About us', array('site/AboutUs')) ?></li>
                                <li><?php echo CHtml::link('Market Fresh', array('site/MarketFresh')) ?></li>
                                <li><?php echo CHtml::link('Promotion', array('site/Promotion')) ?></li>
                                <li><?php echo CHtml::link('Gallery', array('site/Gallery')) ?></li>
                                <li><?php echo CHtml::link('Contact us', array('site/ContactUs')) ?></li>

                            </ul>
                        </div>


                        <div class="col-md-2 col-sm-2 col-xs-2 list-2">
                            <div class="dropdown">
                                <button class="btn btn-primary drops dropdown-toggle" type="button" data-toggle="dropdown" id="loc">
                                    <?php
                                    if(Yii::app()->session['location'] != "")
                                            echo ucfirst(strtolower(Yii::app()->session['location']));
                                    else
                                            echo "Choose Location";
                                    ?>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu tt" id="locdropdown">
                                    <li><a href="#" id="Marina">Marina</a></li>
                                    <li><a href="#" id="Barsha">Barsha</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="headers-main searches visible-xs visible-sm">
                <section class="fresh">
                    <div class="container new-header">
                        <div class="row">

                            <div class="col-md-2 col-sm-6 col-xs-3">

                            </div>

                            <div class="col-md-2 col-sm-2 col-xs-3 list-2 visible-xs visible-sm">
                                <div class="dropdown">
                                    <button class="btn btn-primary drops dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-user"></i>
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu tt">
                                        <?php if(isset(Yii::app()->session['user'])) { ?>
                                                <li>Hi  <b><a href="<?php echo Yii::app()->baseUrl; ?>/Myaccount"><?php echo (Yii::app()->session['user']->first_name), array('class' => 'sign'); ?></a></b> | </li>
                                                <li><?php echo CHtml::link('Log Out', array('site/Logout'), array('class' => 'register')); ?></li>
                                                <?php
                                        } else {
                                                ?>
                                                <li><a class="sign" href="<?php echo Yii::app()->baseUrl; ?>/site/Login">Sign In</a></li>
                                                <li><a class="register" href="<?php echo Yii::app()->baseUrl; ?>/site/Register">Register</a></li>
                                                <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-3 list-2">
                                <div class="dropdown">
                                    <button class="btn btn-primary drops dropdown-toggle" type="button" data-toggle="dropdown">Marina
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu tt">
                                        <li><a href="#">sub menu</a></li>
                                        <li><a href="#">sub menu</a></li>
                                        <li><a href="#">sub menu</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2 col-xs-3 list-2 visible-xs visible-sm">
                                <div class="dropdown">
                                    <button class="btn btn-primary drops dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-align-justify"></i>
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu tt">
                                        <li><a href="<?php echo CHtml::link('Home', array('site/index')) ?>">Home</a></li>
                                        <li><a href="<?php echo CHtml::link('About us', array('site/AboutUs')) ?>">About us</a></li>
                                        <li><a href="<?php echo CHtml::link('Market Fresh', array('site/MarketFresh')) ?>">Market Fresh </a></li>
                                        <li><a href="<?php echo CHtml::link('Promotion', array('site/Promotion')) ?>">Promotion</a></li>
                                        <li><a href="<?php echo CHtml::link('Gallery', array('site/Gallery')) ?>">Gallery </a></li>
                                        <li><a href="<?php echo CHtml::link('Contact us', array('site/ContactUs')) ?>">Contact us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 d1">
                            <a href="<?php echo Yii::app()->baseUrl; ?>"><img class="img-responsive small-logo" src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png"/></a>
                        </div>

                        <div class="col-xs-7 d2">
                            <a href="#" class="cart-hover">
                                <div class="mycart">
                                    <div class="orders clickme-2">
                                        <img class="base" src="<?php echo Yii::app()->baseUrl; ?>/images/bucket.jpg">
                                        <h5>56</h5>

                                        <div class="target-2">
                                            <div class="item-1">
                                                <img src="<?php echo Yii::app()->baseUrl; ?>/images/p4.jpg" alt = "jQuery" />
                                                <h1>Product Name</h1>
                                                <h2>Price</h2>
                                                <h2>Lorem Lispum</h2>
                                            </div>

                                            <div class="item-1">
                                                <img src="<?php echo Yii::app()->baseUrl; ?>/images/p4.jpg" alt = "jQuery" />
                                                <h1>Product Name</h1>
                                                <h2>Price</h2>
                                                <h2>Lorem Lispum</h2>
                                            </div>


                                            <div class="clearfix"></div>


                                            <div class="subtotal-1"><span class="subs-1">subtotal</span></div>
                                            <div class="subtotal-2"><span class="subs-2"> Rs.20000</span></div>

                                            <button type="submit" class="btn proceed-cart btn-default">My Shopping Bag / Checkout</button>
                                        </div>
                                    </div>
                                    <h3>My Cart</h3>
                                    <h6>00.0 AED</h6>
                                </div>

                                <!--                                <div class="has-div">
                                                                    lakshmi
                                                                </div>-->
                            </a>
                        </div>
                    </div>

                </div>


            </section>





            <section class="searches hidden-xs hidden-sm">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <div class="dropdown">
                                <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                                    Shop By Category <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                    <?php
                                    $main_cats = ProductCategory::model()->findAllByAttributes(array(), array('condition' => 'id = parent'));
                                    foreach($main_cats as $main_cat) {
                                            $subcats = ProductCategory::model()->findAllByAttributes(array('parent' => $main_cat->id), array('condition' => 'id !=' . $main_cat->id));
                                            /* if (!empty($subcats)) {
                                              $main_menus = '#';
                                              } else {

                                             */
                                            $main_menus = Yii::app()->request->baseUrl . "/index.php/products/category/name/" . $main_cat->canonical_name;
                                            //}
                                            ?>

                                            <li class="dropdown-submenu">
                                                <a tabindex="-1" href="<?php echo $main_menus; ?>"><?php echo $main_cat->category_name; ?></a>
                                                <ul class="dropdown-menu menu-2">
                                                    <?php
                                                    foreach($subcats as $cats) {
                                                            $sub_menus = Yii::app()->request->baseUrl . "/index.php/products/category/name/" . $cats->canonical_name;
                                                            ?>

                                                            <li><a tabindex="-1" href="<?php echo $sub_menus; ?>"><?php echo $cats->category_name; ?></a></li>
                                                            <!--  <li class="dropdown-submenu menu-3">
                                                                      <a href="#">Even More..</a>
                                                                      <ul class="dropdown-menu levels">
                                                                              <li><a href="#">3rd level</a></li>
                                                                              <li><a href="#">3rd level</a></li>
                                                                      </ul>
                                                              </li>-->


                                                            <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </li>


                                            <?php
                                    }
                                    ?>




                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <div id="custom-search-input">
                                <form name="frm" action="<?php echo Yii::app()->baseUrl; ?>/index.php/searching/SearchList" method="POST">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control input-lg multiples" name="Keyword" placeholder="Search Products" />
                                        <span class="input-group-btn">
                                            <button class="btn btn-info btn-lg" type="button">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <ul class="list-inline">
                                <?php if(isset(Yii::app()->session['user'])) { ?>
                                        <li>Hi  <b><a href="<?php echo Yii::app()->baseUrl; ?>/Myaccount"><?php echo Yii::app()->session['user']->first_name; ?></a></b> | </li>
                                        <li><?php echo CHtml::link('Log Out', array('site/Logout')); ?></li>
                                        <?php
                                } else {
                                        ?>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/site/Login">Login</a></li>
                                        <li><a href="<?php echo Yii::app()->baseUrl; ?>/site/Register">Register</a></li>
                                        <?php
                                }
                                ?>
                            </ul>


                        </div>


                        <div class="col-md-2">




                            <div class="mycart">
                                <div class="orders clickme">
                                    <a href="cart.php"> <img class="base" src="<?php echo Yii::app()->baseUrl; ?>/images/bucket.jpg">
                                        <h5>56</h5></a>
                                    <div class="target">
                                        <div class="item-1">
                                            <img src="<?php echo Yii::app()->baseUrl; ?>/images/p4.jpg" alt = "jQuery" />
                                            <h1>Product Name</h1>
                                            <h2>Price</h2>
                                            <h2>Lorem Lispum</h2>
                                        </div>

                                        <div class="item-1">
                                            <img src="<?php echo Yii::app()->baseUrl; ?>/images/p4.jpg" alt = "jQuery" />
                                            <h1>Product Name</h1>
                                            <h2>Price</h2>
                                            <h2>Lorem Lispum</h2>
                                        </div>


                                        <div class="clearfix"></div>


                                        <div class="subtotal-1">
                                            <span class="subs-1">subtotal</span>
                                        </div>
                                        <div class="subtotal-2"><span class="subs-2"> Rs.20000</span></div>

                                        <button type="submit" class="btn proceed-cart btn-default">My Shopping Bag / Checkout</button>
                                    </div>
                                </div>
                                <h3><a class="cartz" href="cart.php">My Cart</a></h3>
                                <h6>00.0 AED</h6>


                            </div>










                            <!--                            <div class="has-div">
                                                            lakshmi
                                                        </div>-->

                        </div>
                    </div>
                </div>
            </section>
        </div>



        <?php echo $content; ?>






        <section class="newsletter">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 col-xs-6 six">
                        <img class="min" src="<?php echo Yii::app()->baseUrl; ?>/images/foot.jpg">
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 six">
                        <h4><img class="customer" src="<?php echo Yii::app()->baseUrl; ?>/images/f0.jpg">Customer Support</h4>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Custom Link</a></li>
                            <li><a href="#">Another Custom Link</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 six">
                        <h4><img class="customer" src="<?php echo Yii::app()->baseUrl; ?>/images/f2.jpg">The Shopier</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &  Conditions</a></li>
                            <li><a href="#">Custom Link</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-6 six">
                        <h4><img class="customer" src="<?php echo Yii::app()->baseUrl; ?>/images/f3.jpg">My Account</h4>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Custom Link</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 six">
                        <img class="news" src="<?php echo Yii::app()->baseUrl; ?>/images/news.jpg">
                        <div class="inlines">
                            <form class="form-inline" role="form">
                                <div class="form-group">

                                    <input type="email" placeholder="Your Email Address" class="form-controls" id="email">
                                </div>
                                <button type="submit" class="btn btn-default subs"><i class="fa haha-email fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section>
            <div class="container foots">

                <div class="row copyright">
                    <div class="col col-md-6">
                        <p>Copyright &copy; 2016.
                            All rights reserved.</p>
                    </div>

                    <div class="col col-md-6">
                        <h2>Developed By <a href="http://www.intersmartsolution.com/"><img class="smart" src="<?php echo Yii::app()->baseUrl; ?>/images/intersmart.jpg"></a></h2>
                    </div>
                </div>
            </div>
        </section>



        <script>
                jQuery(document).ready(function () {
                    $(window).scroll(function () {

                        var body = $("html, body");

                        var threshold = 90;
                        if ($(window).scrollTop() <= threshold)
                            $('#static_cnt').removeClass('dropup');

                        else
                            $('#static_cnt').addClass('dropup');

                    });


                });


        </script>

        <script>
                jQuery(document).ready(function () {
                    $(window).scroll(function () {

                        var body = $("html, body");

                        var threshold = 90;
                        if ($(window).scrollTop() <= threshold)
                            $('#static_cnts').removeClass('dropups');

                        else
                            $('#static_cnts').addClass('dropups');

                    });


                });


        </script>



<!--<script>
    jQuery(document).ready(function () {
        $(window).scroll(function () {

            var body = $("html, body");

            var threshold = 90;
            if ($(window).scrollTop() <= threshold)
                $('#static_cnt3').removeClass('drop');

            else
                $('#static_cnt3').addClass('drop');

        });


    });


</script>-->



        <script>



                jQuery(window).scroll(function () {
                    var scrlTop = jQuery(window).scrollTop();


                    $window = jQuery(window);

                    function myanimations(doelement, doclass) {
                        $element = jQuery(doelement);

                        $element.each(function () {
                            $thisone = jQuery(this);
                            if ($thisone.offset().top + 200 < ($window.height() + $window.scrollTop()) &&
                                    ($thisone.offset().top + $element.outerHeight()) + 170 > $window.scrollTop())
                            {
                                $thisone.removeClass('fadeOut');
                                $thisone.addClass('animated');
                                $thisone.addClass(doclass);
                            } else {
                                $thisone.removeClass(doclass);
                                $thisone.addClass('fadeOut');
                            }
                        });
                    }

                    myanimations('.ui-mains h1', 'fadeInUp');
                    myanimations('.ui-mains p', 'fadeInUp m2');

                });

        </script>
        <script type="text/javascript">

                jQuery(document).ready(function ($) {
                    $('.smobitrigger').smplmnu();
                });

        </script>
        <script>

                (function ($) {
                    $(document).ready(function () {
                        $('#cssmenu ul ul li:odd').addClass('odd');
                        $('#cssmenu ul ul li:even').addClass('even');
                        $('#cssmenu > ul > li > a').click(function () {
                            $('#cssmenu li').removeClass('active');
                            $(this).closest('li').addClass('active');
                            var checkElement = $(this).next();
                            if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                                $(this).closest('li').removeClass('active');
                                checkElement.slideUp('normal');
                            }
                            if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                                $('#cssmenu ul ul:visible').slideUp('normal');
                                checkElement.slideDown('normal');
                            }
                            if ($(this).closest('li').find('ul').children().length == 0) {
                                return true;
                            } else {
                                return false;
                            }
                        });
                    });
                })(jQuery);


        </script>
        <script>

                (function () {
                    "use strict";

                    $(window).load(function () {
                        $("#loader").fadeOut();
                        $("#mask").delay(10000).fadeOut("slow");
                    });
                })(jQuery);

                window.onload = function () {
                    document.getElementById('mask').style.display = 'none';
                };
        </script>

<!--<script>
    $(document).ready(function () {

        $(".cart-hover").mouseenter(function () {


            $(".has-div").toggleClass('shs');
        });

        $(".cart-hover").mouseleave(function () {


            $(".has-div").toggleClass('shs');

        });

    });
</script>-->



        <script type = "text/javascript" language = "javascript">

                $(document).ready(function () {
                    $(".clickme").hover(function (event) {
                        $(".target").toggle('slow');
                    });
                });

        </script>
        <script type = "text/javascript" language = "javascript">

                $(document).ready(function () {
                    $(".clickme-2").click(function (event) {
                        $(".target-2").toggle('slow');
                    });
                });

        </script>
        <script>
                $('.navicon').on('click', function (e) {
                    e.preventDefault();
                    $(this).toggleClass('navicon--active');
                    $('.toggle').toggleClass('toggle--active');
                });
        </script>


    </body>
</html>