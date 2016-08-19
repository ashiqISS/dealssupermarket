<section class="banner">
    <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/banner/<?php echo $banner->id . '.' . $banner->image; ?>">
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <?php echo CHtml::link('HOME', array('site/index')) ?>
                <span>/</span>Gallery
            </div>
        </div>
    </div>

</div>
<section class="gallery">
    <div class="container div-1">
        <div class="row">

            <div class="col-md-12">

                <h1><span class="popular-2">Gallery </span></h1>

            </div>
            <div class="clearfix"></div>
            <div class="col-md-3">

                <ul>
                    <li><?php echo CHtml::link('All', array('site/Gallery')) ?></li>
                    <?php foreach($model as $model1) {
                            ?>
                            <li><?php echo CHtml::link($model1->name, array('site/MarketFresh/details/' . $model1->canonical_name)) ?></li>
                    <?php }
                    ?>
                </ul>
            </div>



            <div class="col-md-9 colleges">


                <div class="col-md-4 col-sm-4 col-xs-6 gallerys vent">
                    <div class="main-sub">
                        <div class="thumbz thumb-height">
                            <a href="images/t1.jpg" class="nivoimg" data-lightbox-gallery="gallery1">
                                <img class="tea" src="images/t1.jpg" alt=""  width="100%"/>
                                <div class="play"><i class="fa ds fa-plus"></i></div>
                                <div class="overlays"></div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-6 gallerys vent">
                    <div class="main-sub">
                        <div class="thumbz thumb-height">
                            <a href="images/t2.jpg" class="nivoimg" data-lightbox-gallery="gallery1">
                                <img class="tea" src="images/t2.jpg" alt=""  width="100%"/>
                                <div class="play"><i class="fa ds fa-plus"></i></div>
                                <div class="overlays"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 gallerys vent">
                    <div class="main-sub">
                        <div class="thumbz thumb-height">
                            <a href="images/t3.jpg" class="nivoimg" data-lightbox-gallery="gallery1">
                                <img class="tea" src="images/t3.jpg" alt=""  width="100%"/>
                                <div class="play"><i class="fa ds fa-plus"></i></div>
                                <div class="overlays"></div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-6 gallerys vent">
                    <div class="main-sub">
                        <div class="thumbz thumb-height">
                            <a href="images/t4.jpg" class="nivoimg" data-lightbox-gallery="gallery1">
                                <img class="tea" src="images/t4.jpg" alt=""  width="100%"/>
                                <div class="play"><i class="fa ds fa-plus"></i></div>
                                <div class="overlays"></div>
                            </a>
                        </div>
                    </div>
                </div>



                <div class="col-md-4 col-sm-4 col-xs-6 gallerys vent">
                    <div class="main-sub">
                        <div class="thumbz thumb-height">
                            <a href="images/t5.jpg" class="nivoimg" data-lightbox-gallery="gallery1">
                                <img class="tea" src="images/t5.jpg" alt=""  width="100%"/>
                                <div class="play"><i class="fa ds fa-plus"></i></div>
                                <div class="overlays"></div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-6 gallerys vent">
                    <div class="main-sub">
                        <div class="thumbz thumb-height">
                            <a href="images/t6.jpg" class="nivoimg" data-lightbox-gallery="gallery1">
                                <img class="tea" src="images/t6.jpg" alt=""  width="100%"/>
                                <div class="play"><i class="fa ds fa-plus"></i></div>
                                <div class="overlays"></div>
                            </a>
                        </div>
                    </div>
                </div>



            </div>






        </div>
    </div>
</section>


<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/nivo-lightbox.css" type="text/css">
<script src="<?php echo Yii::app()->baseUrl; ?>/js/nivo-lightbox.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/themes/default/default.css" type="text/css">

<script>
        $(document).ready(function () {
            $('a.nivoimg').nivoLightbox({
                keyboardNav: true
            });
        });
</script>