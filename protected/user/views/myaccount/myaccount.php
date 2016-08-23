<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <a href="<?php echo Yii::app()->request->baseUrl . '/Myaccount/Profile'; ?>">HOME</a>
                <span>/</span>My Account
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


<section class="logout">
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
                    <h2>My Account Information</h2>
                    <p>Your Personal Details</p>
                    <div class="strip-padding">

                        <div class="copyz">
                            <div class="col-sm-3 col-xs-3 zeros">
                                <label for="textinput" class="control-labelz">First Name</label>
                            </div>
                            <div class="col-sm-1 col-xs-1 zeros">
                                <label for="textinput" class="control-labelz">:</label>
                            </div>
                            <div class="col-sm-8 col-xs-8 zeros">
                                <label for="textinput" class="control-labelz-2"><?php echo ucfirst($model->first_name); ?></label>
                            </div>
                        </div>


                        <div class="copyz">
                            <div class="col-sm-3 col-xs-3 zeros">
                                <label for="textinput" class="control-labelz">Last Name</label>
                            </div>
                            <div class="col-sm-1 col-xs-1 zeros">
                                <label for="textinput" class="control-labelz">:</label>
                            </div>
                            <div class="col-sm-8 col-xs-8 zeros">
                                <label for="textinput" class="control-labelz-2"><?php echo ucfirst($model->last_name); ?></label>
                            </div>
                        </div>



                        <div class="copyz">
                            <div class="col-sm-3 col-xs-3 zeros">
                                <label for="textinput" class="control-labelz">Email</label>
                            </div>
                            <div class="col-sm-1 col-xs-1 zeros">
                                <label for="textinput" class="control-labelz">:</label>
                            </div>
                            <div class="col-sm-8 col-xs-8 zeros">
                                <label for="textinput" class="control-labelz-2"><?php echo $model->email; ?></label>
                            </div>
                        </div>
                        <div class="copyz">
                            <div class="col-sm-3 col-xs-3 zeros">
                                <label for="textinput" class="control-labelz">Phone 1</label>
                            </div>
                            <div class="col-sm-1 col-xs-1 zeros">
                                <label for="textinput" class="control-labelz">:</label>
                            </div>
                            <div class="col-sm-8 col-xs-8 zeros">
                                <label for="textinput" class="control-labelz-2"><?php echo $model->phone_no_1; ?></label>
                            </div>
                        </div>
                        <?php if(!empty($model->phone_no_2)) { ?>
                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <label for="textinput" class="control-labelz">Phone 2</label>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <label for="textinput" class="control-labelz-2"><?php echo $model->phone_no_2; ?></label>
                                    </div>
                                </div>
                        <?php } ?>
                    </div>

                </div>

            </div>
            <?php echo $this->renderPartial('_menu'); ?>

        </div>
    </div>
</section>
