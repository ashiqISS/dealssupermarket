<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <a href="<?php echo Yii::app()->baseUrl; ?>">HOME</a>
                                <span>/</span>Login
                        </div>
                </div>
        </div>

</div>

<section class="login">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1><span class="newgen">Login </span></h1>

                                <div class="new_form">
                                        <?php if (Yii::app()->user->hasFlash('login_list')): ?>
                                                <div class="alert alert-danger mesage">
                                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                                        <strong>Sorry!</strong><?php echo Yii::app()->user->getFlash('login_list'); ?>
                                                </div>
                                        <?php endif; ?>
                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'action' => Yii::app()->request->baseUrl . '/index.php/site/Login/',
                                            'id' => 'login-form',
                                            'htmlOptions' => array('class' => ''),
                                            // Please note: When you enable ajax validation, make sure the corresponding
                                            // controller action is handling ajax validation correctly.
                                            // There is a call to performAjaxValidation() commented in generated controller code.
                                            // See class documentation of CActiveForm for details on this.
                                            'enableAjaxValidation' => false,
                                        ));
                                        ?>
                                        <div>
                                                <div class="form-group">
                                                        <?php echo $form->textField($model, 'email', array('maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'Email')); ?>
                                                        <?php echo $form->error($model, 'email'); ?>

                                                </div>
                                                <div class="form-group">
                                                        <?php echo $form->passwordField($model, 'password', array('maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'Password')); ?>
                                                        <?php echo $form->error($model, 'password'); ?>

                                                </div>




                                                <?php echo CHtml::submitButton($model->isNewRecord ? 'SIGN IN' : 'SIGN IN', array('class' => 'btn new-btn btn-default')); ?>


                                                <div class="col-md-5 col-sm-5 col-xs-5 padd">
                                                        <a class="forgot" href="<?php echo Yii::app()->baseUrl; ?>/site/Register">New User?</a>
                                                </div>

                                                <div class="col-md-7 col-sm-7 col-xs-7 padd">

                                                        <a class="new" href="<?php echo Yii::app()->baseUrl; ?>/site/Forgotpassword">Forgot your password</a>

                                                </div>
                                        </div>
                                        <?php $this->endWidget(); ?>



                                </div>
                        </div>
                </div>
        </div>
</section>



