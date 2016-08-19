<section class="banner">
        <img src="<?php echo Yii::app()->baseUrl; ?>/uploads/banner/<?php echo $banner->id . '.' . $banner->image; ?>">
</section>

<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <a href="<?php echo Yii::app()->baseUrl; ?>/index.php">HOME</a>
                                <span>/</span>Contact Us
                        </div>
                </div>
        </div>

</div>
<section class="contacts">
        <div class="container div-1">
                <div class="row">


                        <div class="col-md-12">

                                <h1><span class="popular-2">CONTACT US</span></h1>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-md-9 lefted">
                                <div class="row">
                                        <?php
                                        if (Yii::app()->session['user']) {

                                                $user_id = Yii::app()->session['user']['id'];
                                                $user_det = UserDetails::model()->findByPk($user_id);
                                                $name = $user_det->first_name;
                                                $email = $user_det->email;
                                                $phone = $user_det->phone_no_2;
                                        }
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'contact-us-contact-form',
                                            'action' => Yii::app()->baseUrl . '/index.php/site/contactUs/',
                                            'htmlOptions' => array('class' => 'us'),
                                            // Please note: When you enable ajax validation, make sure the corresponding
                                            // controller action is handling ajax validation correctly.
                                            // See class documentation of CActiveForm for details on this,
                                            // you need to use the performAjaxValidation()-method described there.
                                            'enableAjaxValidation' => false,
                                        ));
                                        ?>
                                        <?php if (Yii::app()->user->hasFlash('success')): ?>
                                                <div class="alert alert-success normal">
                                                        <strong>Success!</strong> <?php echo Yii::app()->user->getFlash('success'); ?>
                                                </div>
                                        <?php endif; ?>
                                        <?php if (Yii::app()->user->hasFlash('error')): ?>
                                                <div class="alert alert-danger">
                                                        <strong>Sorry! </strong> <?php echo Yii::app()->user->getFlash('error'); ?>
                                                </div>
                                        <?php endif; ?>
                                        <p><strong><em>To contact us via email, complete the fields below:</em></strong></p>
                                        <div class="common">
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mob-file zeros">
                                                        <div class="form-group">
                                                                <?php echo $form->labelEx($model, 'name'); ?>
                                                                <?php echo $form->textField($model, 'name', array('size' => 60, 'class' => 'ui_source', 'value' => $name)); ?>
                                                                <?php echo $form->error($model, 'name', array('style' => 'color:red')); ?>
                                                        </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mob-file zeros">
                                                        <div class="form-group">
                                                                <?php echo $form->labelEx($model, 'email'); ?>
                                                                <?php echo $form->textField($model, 'email', array('size' => 60, 'class' => 'ui_source', 'value' => $email)); ?>
                                                                <?php echo $form->error($model, 'email', array('style' => 'color:red')); ?>
                                                        </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mob-file zeros">
                                                        <div class="form-group">
                                                                <?php echo $form->labelEx($model, 'phone'); ?>
                                                                <?php echo $form->textField($model, 'phone', array('size' => 60, 'class' => 'ui_source', 'value' => $phone)); ?>
                                                                <?php echo $form->error($model, 'phone', array('style' => 'color:red')); ?>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="common">
                                                <div class="col-sm-12 col-xs-12 zeros">
                                                        <div class="form-group">
                                                                <?php echo $form->labelEx($model, 'comment'); ?>
                                                                <?php echo $form->textArea($model, 'comment', array('rows' => 5, 'cols' => 60, 'class' => 'form-control-ui')); ?>
                                                                <?php echo $form->error($model, 'comment', array('style' => 'color:red')); ?>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="common tops">

                                                <div class="col-lg-2 col-md-3 col-xs-6 zeros pull-left nop sum">

                                                        <?php echo CHtml::resetButton('Reset', array('class' => 'btn sub-con-2 btn-default')); ?>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-xs-6 zeros pull-left nop sum">
                                                        <?php echo CHtml::submitButton('Submit', array('class' => 'btn sub-con-1 btn-default')); ?>
                                                </div>


                                        </div>

                                        <?php $this->endWidget(); ?>
                                        <div class="clearfix"></div>
                                </div>

                        </div>


                        <div class="col-md-3">

                                <img class="pngs img-responsive" src="<?php echo Yii::app()->baseUrl; ?>/images/contact.png">
                                <div class="win">
                                        <div class="add-left">
                                                <i class="fa tack fa-thumb-tack"></i>
                                        </div>
                                        <div class="add-right">
                                                <p><?php echo $address->large_description; ?> </p>


                                        </div>


                                        <div class="add-left">
                                                <i class="fa tack fa-phone"></i>
                                        </div>
                                        <div class="add-right">
                                                <p><strong>Telephone:</strong> <?php echo $telephone->large_description; ?></p>


                                        </div>

                                        <div class="add-left">
                                                <i class="fa tack fa-fax"></i>
                                        </div>
                                        <div class="add-right">
                                                <p><strong>FAX: </strong> <?php echo $fax->large_description; ?></p>


                                        </div>


                                        <div class="add-left">
                                                <i class="fa tack fa-envelope"></i>
                                        </div>
                                        <div class="add-right">
                                                <p><strong>E-mail: </strong> <?php echo $emails->large_description; ?></p>


                                        </div>
                                </div>
                        </div>







                </div>
        </div>
</section>

