<section class="banner">
    <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/banner/<?php echo $banner->id . '.' . $banner->image; ?>">
</section>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <?php echo CHtml::link('HOME', array('site/index')) ?>
                <span>/</span>About Us
            </div>
        </div>
    </div>
</div>
<?php
foreach($model as $models) {
        ?>
        <section class="about">
            <div class="container div-1">
                <div class="row">
                    <div class="col-md-12">

                        <h1><span class="popular-2"><?= $models->name; ?></span></h1>

                        <?= $models->large_description; ?>

                    </div>
                </div>
            </div>
        </section>
        <?php
}
?>


