<div class="my_cart_item cart_product_detail cart_item">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/products/<?php echo $folder; ?>/<?php echo $prod_details->id; ?>/small.<?php echo $prod_details->main_image; ?>" />
        <h3><?php echo ucfirst($prod_details->product_name); ?></h3>
        <p><span>Qty:</span>	<?php echo $cart_content->quantity; ?></p>
        <p><span>Price:</span>	<?php echo Yii::app()->Discount->Discount($prod_details); ?></p>
        <div class="clearfix"></div>
        <div class="remove_item" canname="<?php echo $prod_details->canonical_name; ?>" cartid="<?php echo $cart_content->id; ?>"><a  class="cart_close1" >Remove</a></div>
</div>







