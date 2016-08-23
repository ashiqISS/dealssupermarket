
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <a href="<?php echo Yii::app()->request->baseUrl . '/Myaccount/Profile'; ?>">HOME</a>
                <span>/</span>Change Password
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
                <div class="left-content"><div class="row">
                        <h2>Change password</h2>
                        <p></p>
                        <?php
                        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                            'id' => 'chnage-password-form',
                            'enableClientValidation' => true,
                            'htmlOptions' => array('class' => 'well'),
                            'action' => Yii::app()->baseUrl . '/index.php/Myaccount/Changepassword',
                            'clientOptions' => array(
                                'validateOnSubmit' => true,
                            ),
                        ));
                        ?>

                        <?php //echo $form->errorSummary($model); ?>
                        <div class="strip-padding">
                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'old_password<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->passwordField($model, 'old_password', array('class' => 'form-new', 'placeholder' => 'Old Password')); ?>
                                    <?php echo $form->error($model, 'old_password'); ?>
                                </div>
                            </div>


                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'new_password<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->passwordField($model, 'new_password', array('class' => 'form-new', 'placeholder' => 'New Password')); ?>
                                    <?php echo $form->error($model, 'new_password'); ?>
                                </div>
                            </div>

                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'repeat_password<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->passwordField($model, 'repeat_password', array('class' => 'form-new', 'placeholder' => 'Retype Password')); ?>
                                    <?php echo $form->error($model, 'repeat_password'); ?>
                                </div>
                            </div>

                            <div class="copyz">
                                <div class="col-sm-4 col-xs-4 zeros"></div>
                                <div class="col-sm-4 col-xs-4 zeros">
                                    <?php echo CHtml::resetButton('Reset', array('class' => 'btn can2 btn-default')); ?>
                                    <?php echo CHtml::submitButton('Update', array('class' => 'btn can1 btn-default',)); ?>


                                </div>
                            </div>

                        </div>
                        <?php $this->endWidget(); ?></div>
                </div>

            </div>
            <?php echo $this->renderPartial('_menu'); ?>

        </div>
    </div>


</section>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl . '/js/jquery-2.1.4.min.js'; ?>"></script>

<style>

    .errorMessage {
        color: red;
    }
</style>

