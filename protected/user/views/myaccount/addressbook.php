<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <a href="<?php echo Yii::app()->request->baseUrl . '/Myaccount/Profile'; ?>">HOME</a>
                <span>/</span>Address Book
            </div>
        </div>
    </div>

</div>

<div class="anim-menu visible-xs">
    <a href="#" class="navicon"></a>
    <div class="toggle">
        <?php echo $this->renderPartial('_togglemenu'); ?>

    </div>
</div>


<section class="addressbook">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="border-bottom">

                    <div class="clearfix"></div>
                    <?php if(Yii::app()->user->hasFlash('success')): ?>
                            <div class="alert alert-success">
                                <strong>Success!</strong> <?php echo Yii::app()->user->getFlash('success'); ?>
                            </div>
                    <?php endif; ?>
                    <?php if(Yii::app()->user->hasFlash('error')): ?>
                            <div class="alert alert-danger">
                                <strong>!</strong> <?php echo Yii::app()->user->getFlash('error'); ?>
                            </div>
                    <?php endif; ?>
                </div>
                <div class="left-content">
                    <h2>Address Book Entries</h2>
                    <br>
                    <div class="row">
                        <div class="default_address">


                            <?php if(empty($model)) { ?>
                                    <div class="row">
                                        <!--                                        <div class="col-xs-6 row-borderd text-right empty_image"></div>-->
                                        <div class="col-xs-6 empty_message">

                                            <div class="alert alert-danger">
                                                <strong>!</strong> Sorry Address Book Not Found
                                            </div>
                                            <?php echo CHtml::link('New Address', array('Myaccount/Newaddress', 'id' => CHtml::encode($address->id)), array('class' => 'btn continue btn-default')); ?>

                                        </div>
                                    </div>

                            <?php } else {
                                    ?>
                                    <?php
                                    foreach($model as $address) {
                                            $country = Countries::model()->findByPk($address->country);
                                            ?>
                                            <div class="col-sm-6">
                                                <div class="dv<?php echo $address->id; ?>">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
                                                        <tbody>
                                                            <?php if($address->default_billing_address == '1') { ?>
                                                                    <tr>
                                                                        <th class="cart_action"><span class="label label-success"><i class="fa fa-check"></i></span> Billing Address</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><p><?php echo ucfirst($address->first_name); ?>
                                                                                <?php echo ucfirst($address->last_name); ?><br>
                                                                                <?php echo ucfirst($address->company); ?><br>
                                                                                <?php echo $address->contact_number; ?><br>
                                                                                <?php echo $address->state; ?><br>
                                                                                <?php echo $country->country_name; ?><br>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_action action_link"><a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Myaccount/EditAddress/<?php echo $address->id; ?>">Edit</a> | <a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Myaccount/newaddress/<?php echo $address->id; ?>">New Address</a> | <a href="#"  onclick="deleteaddress(<?php echo $address->id; ?>)">Delete</a> </td>
                                    <!--                                                                                                <td class="cart_action action_link"><?php echo CHtml::link('Edit', array('Myaccount/EditAddress', 'id' => CHtml::encode($address->id))); ?> | <?php echo CHtml::link('New Address', array('Myaccount/Newaddress', 'id' => CHtml::encode($address->id))); ?> | <?php echo CHtml::link('Delete', array('Myaccount/DeleteAddress'), array('class' => '', 'onclick' => 'deleteaddress($address->id)')); ?></td>-->
                                                                    </tr>
                                                            <?php } else { ?>
                                                                    <tr>
                                                                        <th class="cart_action">Billing Address</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><p><?php echo ucfirst($address->first_name); ?>
                                                                                <?php echo ucfirst($address->last_name); ?><br>
                                                                                <?php echo ucfirst($address->company); ?><br>
                                                                                <?php echo $address->contact_number; ?><br>
                                                                                <?php echo $address->state; ?><br>
                                                                                <?php echo $country->country_name; ?><br>

                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_action action_link"><a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Myaccount/EditAddress/<?php echo $address->id; ?>">Edit</a> | <a href="#" onclick="deleteaddress(<?php echo $address->id; ?>)">Delete</a> </td>
                                    <!--<td class="cart_action action_link"><?php echo CHtml::link('Edit', array('Myaccount/EditAddress', 'id' => CHtml::encode($address->id))); ?> |  <?php echo CHtml::link('Delete', array('Myaccount/DeleteAddress'), array('class' => '', 'onclick' => 'deleteaddress($address->id)')); ?></td>-->
                                                                    </tr>

                                                            <?php } ?>

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="dv<?php echo $address->id; ?>">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
                                                        <tbody>
                                                            <?php if($address->default_shipping_address == '1') { ?>
                                                                    <tr>
                                                                        <th class="cart_action"><span class="label label-success"><i class="fa fa-check"></i></span> Shipping Address</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><p><?php echo ucfirst($address->first_name); ?>
                                                                                <?php echo ucfirst($address->last_name); ?><br>
                                                                                <?php echo ucfirst($address->company); ?><br>
                                                                                <?php echo $address->contact_number; ?><br>
                                                                                <?php echo $address->state; ?><br>
                                                                                <?php echo $country->country_name; ?><br>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_action action_link"><a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Myaccount/EditAddress/<?php echo $address->id; ?>">Edit</a> | <a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Myaccount/newaddress/<?php echo $address->id; ?>">New Address</a> | <a href="#"  onclick="deleteaddress(<?php echo $address->id; ?>)">Delete</a> </td>
                                    <!--<td class="cart_action action_link"><?php echo CHtml::link('Edit', array('Myaccount/EditAddress', 'id' => CHtml::encode($address->id))); ?> | <?php echo CHtml::link('New Address', array('Myaccount/Newaddress', 'id' => CHtml::encode($address->id))); ?> | <?php echo CHtml::link('Delete', array('Myaccount/DeleteAddress'), array('class' => '', 'onclick' => 'deleteaddress()')); ?></td>-->
                                                                    </tr>
                                                            <?php } else { ?>
                                                                    <tr>
                                                                        <th class="cart_action">Shipping Address</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><p><?php echo ucfirst($address->first_name); ?>
                                                                                <?php echo ucfirst($address->last_name); ?><br>
                                                                                <?php echo ucfirst($address->company); ?><br>
                                                                                <?php echo $address->contact_number; ?><br>
                                                                                <?php echo $address->state; ?><br>
                                                                                <?php echo $country->country_name; ?><br>

                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cart_action action_link"><a href="<?php echo Yii::app()->baseUrl; ?>/index.php/Myaccount/EditAddress/<?php echo $address->id; ?>">Edit</a> | <a href="#"  onclick="deleteaddress(<?php echo $address->id; ?>)">Delete</a> </td>
                                                                    </tr>

                                                            <?php } ?>

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                            <?php
                                    }
                            }
                            ?>


                        </div>

                        <!--                    <div class="repeatz">
                                                <div class="repeat-div">
                                                    <div class="address-1">
                                                        <p>Dhanya Jayakumar</p>
                                                        <p>Mvk</p>
                                                        <p>Kerala</p>
                                                        <p>India</p>
                                                    </div>
                                                    <div class="address-2">
                                                        <a class="edit-btn" href="#">Edit</a>
                                                        <a class="delete-btn" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="repeat-div">
                                                    <div class="address-1">
                                                        <p>Dhanya Jayakumar</p>
                                                        <p>Mvk</p>
                                                        <p>Kerala</p>
                                                        <p>India</p>
                                                    </div>
                                                    <div class="address-2">
                                                        <a class="edit-btn" href="#">Edit</a>
                                                        <a class="delete-btn" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>-->

                        <!--                    <button type="submit" class="btn back btn-default">Back</button>-->
                        <!--                        <button type="submit" class="btn continue btn-default">new address</button>-->

                    </div>
                </div>


            </div>

            <?php echo $this->renderPartial('_menu'); ?>

        </div>
    </div>
</section>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl . '/js/jquery-2.1.4.min.js'; ?>"></script>
<script type="text/javascript">

                                                        function deleteaddress(id)
                                                        {



                                                            var baseUrl = "<?php echo Yii::app()->baseUrl; ?>";
                                                            var r = confirm("Are you sure you want to delete shipping address and billing address??");
                                                            if (r == true)
                                                            {
                                                                $.ajax({
                                                                    type: "GET",
                                                                    url: baseUrl + '/Myaccount/DeleteAddress',
                                                                    data: ({id: id}),
                                                                    success: function (data)
                                                                    {
                                                                        $(".dv" + id).fadeOut("5000");
                                                                        //window.location.replace("<?php //echo Yii::app()->baseUrl;   ?>/Myaccount/Addressbook/");
                                                                    }
                                                                });

                                                            }
                                                            else
                                                            {
                                                                window.location.replace("<?php echo Yii::app()->baseUrl; ?>/Myaccount/Addressbook/");
                                                            }
                                                        }

</script>
