<section class="banner">
    <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/banner/<?php echo $banner->id . '.' . $banner->image; ?>">
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">
                <?php echo CHtml::link('HOME', array('site/index')) ?>
                <span>/</span>Market Fresh
            </div>
        </div>
    </div>

</div>
<section class="gallery">
    <div class="container div-1">
        <div class="row">

            <div class="col-md-12">

                <h1><span class="popular-2">Market Fresh </span></h1>

            </div>
            <div class="clearfix"></div>
            <div class="col-md-4">

                <ul>
                    <?php foreach($model as $model1) {
                            ?>
                            <li><?php echo CHtml::link($model1->name, array('site/MarketFresh/details/' . $model1->canonical_name)) ?></li>
                    <?php }
                    ?>


                </ul>
            </div>



            <div class="col-md-8 colleges">

                <h2><?php echo $content->name; ?></h2>
                <?php echo $content->large_description; ?>
            </div>






        </div>
    </div>
</section>
