<div class="row">
    <div class="col-md-12 center login-header">
        <img src="<?php echo Yii::app()->baseUrl; ?>/admin/img/logo.png" alt="deals-super-market" width="150"/>
        <h3>Welcome to Admin Panel</h3>
    </div>
    <!--/span-->
</div><!--/row-->

<div class="row">
    <div class="well col-md-5 center login-box">
        <div class="alert alert-info">
            Please login with your Username and Password.
        </div>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'admin-user-form',
            'htmlOptions' => array('class' => 'form-horizontal'),
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
        ?>


        <fieldset>
            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                <?php echo $form->textField($model, 'username', array('placeholder' => 'Username', 'class' => 'form-control')); ?>


            </div>
            <?php echo $form->error($model, 'username'); ?>
            <div class="clearfix"></div><br>

            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                <?php echo $form->passwordField($model, 'password', array('placeholder' => 'Password', 'class' => 'form-control')); ?>

            </div>
            <?php echo $form->error($model, 'password'); ?>
            <div class="clearfix"></div>

            <!--                                <div class="input-prepend">
                                                <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                                            </div>-->
            <div class="clearfix"></div>

            <p class="center col-md-5">
                <button type="submit" class="btn btn-primary">Login</button>
            </p>
        </fieldset>
        <?php $this->endWidget(); ?>
    </div>
    <!--/span-->
</div><!--/row-->
