<style>
        .errorMessage {
                color: red;
        }
</style>

<div class="clearfix"></div>


<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <a href="<?php echo Yii::app()->baseUrl; ?>">HOME</a>
                                <span>/</span>register
                        </div>
                </div>
        </div>

</div>
<section class="login">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <h1><span class="newgen">register </span></h1>

                                <div class="new_form">

                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'dimension-class-form',
                                            'htmlOptions' => array('class' => ''),
                                            'action' => Yii::app()->baseUrl . '/index.php/site/Register/',
                                            // Please note: When you enable ajax validation, make sure the corresponding
                                            // controller action is handling ajax validation correctly.
                                            // There is a call to performAjaxValidation() commented in generated controller code.
                                            // See class documentation of CActiveForm for details on this.
                                            'enableAjaxValidation' => false,
                                        ));
                                        ?>
                                        <div class="form-group">
                                                <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'First Name', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'first_name'); ?>
                                        </div>

                                        <div class="form-group">

                                                <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Last Name', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'last_name'); ?>
                                        </div>
                                        <div class="form-group">
                                                <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Email Address', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'email'); ?>
                                        </div>


                                        <div class="form-group">

                                                <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Password', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'password'); ?>
                                        </div>

                                        <div class="form-group">

                                                <?php echo $form->passwordField($model, 'confirm', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Confirm Password', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'confirm'); ?>
                                        </div>

                                        <div class="form-group">

                                                <?php echo $form->dropDownList($model, 'gender', array('' => '--Select Gender--', 'Male' => "Male", 'Female' => "Female"), array('class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'gender'); ?>
                                        </div>
                                        <div class="form-group">

                                                <?php echo CHtml::activeDropDownList($model, 'country', CHtml::listData(Countries::model()->findAll(), 'id', 'country_name'), array('empty' => '--Select Country--', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'country'); ?>
                                        </div>
                                        <div class="form-group">

                                                <?php echo $form->textField($model, 'phone_no_1', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Phone', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'phone_no_1'); ?>
                                        </div>
                                        <div class="form-group">

                                                <?php echo $form->textField($model, 'phone_no_2', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'Phone', 'class' => 'form-new')); ?>
                                                <?php echo $form->error($model, 'phone_no_2'); ?>
                                        </div>
                                        <div class="form-group">
                                                <?php if (CCaptcha::checkRequirements()): ?>
                                                        <div id="capche" >
                                                                <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                                                <br/>
                                                                <?php $this->widget('CCaptcha'); ?>
                                                                <br/>


                                                                <?php echo $form->textField($model, 'verifyCode', array('class' => "form-new")); ?>
                                                                <br/>
                                                                <?php echo $form->error($model, 'verifyCode', array('class' => 'red')); ?>
                                                                <br/>

                                                        <?php endif; ?>
                                                </div>
                                                <?php echo CHtml::resetButton('Reset', array('class' => 'btn can2 btn-default')); ?>

                                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'btn can1 btn-default',)); ?>







                                                <!--

                                                                                        <div class="col-md-5 col-sm-5 col-xs-5 padd">
                                                                                                <a class="forgot" href="<?php echo Yii::app()->baseUrl; ?>/site/Register">New User?</a>
                                                                                        </div>

                                                                                        <div class="col-md-7 col-sm-7 col-xs-7 padd">

                                                                                                <a class="new" href="<?php echo Yii::app()->baseUrl; ?>/site/Forgotpassword">Forgot your password</a>

                                                                                        </div>
                                                -->

                                                <?php $this->endWidget(); ?>
                                        </div>
                                </div>
                        </div>
                </div>
</section>

























