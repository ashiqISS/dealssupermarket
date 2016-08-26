<?php
if (Yii::app()->session['user']) {
        $cnts = 4;
} else {
        $cnts = 3;
}
?>
<div class="col-md-<?php echo $cnts; ?> mov">
        <div class="lak">
                <a href="#"> <img class="img-responsive our center-block" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/products/1000/<?php echo $data->id; ?>/big.<?php echo $data->main_image; ?>"></a>
                <div class="cart-img">
                        <h4><a class="title_1" href="#"><?php echo $data->product_name; ?></a></h4>
                        <h5><a class="title_2" href="#">AED : <?php
                                        if (($_SESSION['location']) && ($_SESSION['location'] == 'MARINA')) {

                                                echo $data->price_in_marina;
                                        } else {
                                                echo $data->price_in_barsha;
                                        }
                                        ?></a></h5>
                        <a class="cart-btn" href="#"><i class="fa baskets fa-shopping-basket"></i>Add to basket</a>
                </div>

                <div class="overlays"></div>
        </div>
</div>