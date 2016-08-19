<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <a href="index.php">HOME</a>
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
                                                                <label for="textinput" class="control-labelz-2"><?php echo Yii::app()->session['user']['first_name']; ?></label>
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
                                                                <label for="textinput" class="control-labelz-2"><?php echo Yii::app()->session['user']['last_name']; ?></label>
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
                                                                <label for="textinput" class="control-labelz-2"><?php echo Yii::app()->session['user']['email']; ?></label>
                                                        </div>
                                                </div>
                                                <div class="copyz">
                                                        <div class="col-sm-3 col-xs-3 zeros">
                                                                <label for="textinput" class="control-labelz">Telephone</label>
                                                        </div>
                                                        <div class="col-sm-1 col-xs-1 zeros">
                                                                <label for="textinput" class="control-labelz">:</label>
                                                        </div>
                                                        <div class="col-sm-8 col-xs-8 zeros">
                                                                <label for="textinput" class="control-labelz-2"><?php echo Yii::app()->session['user']['phone_no_1']; ?></label>
                                                        </div>
                                                </div>




                                        </div>






                                </div>

                        </div>
                        <?php echo $this->renderPartial('_menu'); ?>

                </div>
        </div>
</section>
