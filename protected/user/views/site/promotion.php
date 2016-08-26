


<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/flipbook/style.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>

<!--[if IE]>
<script src="js/html5.js" type="text/javascript"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

        <!--[if IE]><script src="js/selectivizr.js"></script><![endif]-->

<script>
        $(document).bind("mobileinit", function () {
            $.mobile.ajaxEnabled = false;
        });
</script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/flipbook/jquery.mobile-1.2.0.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/flipbook/turn.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/flipbook/onload.js"></script>









<section class="banner">
    <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/banner/<?php echo $banner->id . '.' . $banner->image; ?>">
</section>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <?php echo CHtml::link('HOME', array('site/index')) ?>
                <span>/</span>Promotion
            </div>
        </div>
    </div>
</div>
<?php
//foreach($model as $models) {
?>
<section class="about">
    <div class="container div-1">
        <div class="row">
            <div class="col-md-12">

                <h1><span class="popular-2"><?= $models->name; ?></span></h1>



                <!-- BEGIN PAGE -->
                <div id="page">



                    <!-- BEGIN BOOK -->
                    <div id="book">
                        <?php
                        $num = 0;
                        foreach($model as $flipImages) {
                                $num++;
                                ?>

                                <div style="">
                                    <div class="meta left">
                                        <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/promotion/<?php echo $flipImages->id . "/$flipImages->id." . $flipImages->image; ?>">
                                        <span class="num"><?= $num; ?></span>
                                        <span class="description"><?= $flipImages->title; ?></span>
                                    </div></div>


                        <?php } ?>

                        <div id="end">
                            <p>the end</p>
                        </div>
                    </div><!-- END BOOK -->

                    <a class="nav_arrow prev"></a>
                    <a class="nav_arrow next"></a>

                </div>
                <!-- END PAGE -->


                <!-- BEGIN FOOTER -->
                <!--            <footer id="footer">

                                <a href="#" id="logo">
                                    <img src="img/logo.png" alt="" />
                                </a>

                                <nav id="center" class="menu">
                                    <ul>
                                        <li>
                                            <a href="download/file.zip" class="download" title="Download (ZIP)"></a>
                                        </li>
                                        <li>
                                            <a class="zoom_in" title="Zoom In"></a>
                                        </li>
                                        <li>
                                            <a class="zoom_out" title="Zoom Out"></a>
                                        </li>
                                        <li>
                                            <a class="zoom_auto" title="Zoom Auto"></a>
                                        </li>
                                        <li>
                                            <a class="zoom_original" title="Zoom Original (scale 1:1)"></a>
                                        </li>
                                        <li>
                                            <a class="show_all" title="Show All Pages"></a>
                                        </li>
                                        <li>
                                            <a class="home" title="Show Home Page"></a>
                                        </li>

                                    </ul>
                                </nav>

                                <nav id="right" class="menu">
                                    <ul>
                                        <li>
                                            <a class="contact" title="Send Message"></a>
                                        </li>
                                        <li class="goto">
                                            <label for="page-number">GO TO PAGE</label>
                                            <input type="text" id="page-number" />
                                            <button type="button">GO</button>
                                        </li>
                                    </ul>
                                </nav>

                            </footer>-->
                <!-- END FOOTER -->



                <!--            <div class="overlay" id="contact">

                                <form>
                                    <a class="close">X</a>

                                    <fieldset>
                                        <h3>contact</h3>

                                        <p>
                                            <input type="text" value="name..." id="name" class="req" />
                                        </p>

                                        <p>
                                            <input type="text" value="email..." id="email" class="req" />
                                        </p>

                                        <p>
                                            <textarea id="message" class="req">message</textarea>
                                        </p>

                                        <p>
                                            <button type="submit">Send Message</button>
                                        </p>
                                    </fieldset>

                                    <fieldset class="thanks">
                                        <h3>Message Sent</h3>
                                        <p>This window will close in 5 seconds.</p>
                                    </fieldset>
                                </form>

                            </div>-->



                <!-- BEGIN ALL PAGES -->
                <!--            <div class="overlay" id="all_pages">

                                <section class="container">

                                    <div id="menu_holder">

                                        <ul id="slider">
                                            <li class="page1">
                                                <img src="pages/thumbs/cover.jpg" alt="" />
                                            </li>

                                            <li class="page2">
                                                <img src="pages/thumbs/2.jpg" alt="" />
                                            </li>

                                            <li class="page3">
                                                <img src="pages/thumbs/3.jpg" alt="" />
                                            </li>

                                            <li class="page4">
                                                <img src="pages/thumbs/4_5.jpg" alt="" />
                                            </li>

                                            <li class="page6">
                                                <img src="pages/thumbs/6_7.jpg" alt="" />
                                            </li>

                                            <li class="page8">
                                                <img src="pages/thumbs/8.jpg" alt="" />
                                            </li>

                                            <li class="page9">
                                                <img src="pages/thumbs/9.jpg" alt="" />
                                            </li>

                                            <li class="page10">
                                                <img src="pages/thumbs/10_11.jpg" alt="" />
                                            </li>

                                            <li class="page12">
                                                <img src="pages/thumbs/12_13.jpg" alt="" />
                                            </li>

                                            <li class="page14">
                                                <img src="pages/thumbs/14_15.jpg" alt="" />
                                            </li>

                                            <li class="page16">
                                                <img src="pages/thumbs/end.png" alt="" />
                                            </li>
                                        </ul>
                                    </div>

                                </section>

                            </div>-->
                <!-- END ALL PAGES -->












            </div>
        </div>
    </div>
</section>
<?php
//}
?>


