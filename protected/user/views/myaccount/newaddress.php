<?php
/* @var $this UserAddressController */
/* @var $model UserAddress */
/* @var $form CActiveForm */

//$url =;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <a href="<?php echo Yii::app()->request->baseUrl . '/Myaccount/Profile'; ?>">HOME</a>
                <span>/</span>Add new Address Book
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
                    <div class="row">
                        <h2>New Address Book</h2>
                        <p></p>
                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'user-address-form',
                            'action' => Yii::app()->baseUrl . '/index.php/Myaccount/Newaddress/',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation' => false,
                        ));
                        ?>
                        <?php //echo $form->errorSummary($model); ?>
                        <div class="row">
                            <div class="strip-padding">
                                <div class="copyz">

                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'first_name<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'first_name', array('size' => 40, 'maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'First Name')); ?>
                                        <?php echo $form->error($model, 'first_name'); ?>
                                    </div>
                                </div>

                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'last_name<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'last_name', array('size' => 40, 'maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'Last Name')); ?>
                                        <?php echo $form->error($model, 'last_name'); ?>
                                    </div>
                                </div>

                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'company', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'company', array('size' => 40, 'maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'Email')); ?>
                                        <?php echo $form->error($model, 'company'); ?>
                                    </div>
                                </div>
                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'contact_number<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'contact_number', array('size' => 40, 'maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'Contact Number')); ?>
                                        <?php echo $form->error($model, 'contact_number'); ?>
                                    </div>
                                </div>
                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'address_1<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textArea($model, 'address_1', array('rows' => 6, 'cols' => 50, 'class' => 'form-new', 'placeholder' => 'Address 1')); ?>
                                        <?php echo $form->error($model, 'address_1'); ?>
                                    </div>
                                </div>
                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'address_2', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textArea($model, 'address_2', array('rows' => 6, 'cols' => 50, 'class' => 'form-new', 'placeholder' => 'Address 2')); ?>
                                        <?php echo $form->error($model, 'address_2'); ?>
                                    </div>
                                </div>
                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'city<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'city', array('size' => 40, 'maxlength' => 100, 'class' => 'form-new', 'placeholder' => 'City')); ?>
                                        <?php echo $form->error($model, 'city'); ?>
                                    </div>
                                </div>

                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'postcode<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'postcode', array('size' => 40, 'maxlength' => 111, 'class' => 'form-new', 'placeholder' => 'Postcode')); ?>
                                        <?php echo $form->error($model, 'postcode'); ?>
                                    </div>
                                </div>

                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'country<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo CHtml::activeDropDownList($model, 'country', CHtml::listData(Countries::model()->findAll(), 'id', 'country_name'), array('empty' => '--Select Country--', 'class' => 'form-new')); ?>
                                        <?php echo $form->error($model, 'country'); ?>
                                    </div>
                                </div>


                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'state<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->textField($model, 'state', array('size' => 60, 'maxlength' => 111, 'class' => 'form-new', 'placeholder' => 'State')); ?>
                                        <?php echo $form->error($model, 'state'); ?>
                                    </div>
                                </div>

                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'default_billing_address', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->checkBox($model, 'default_billing_address'); ?>
                                        <?php echo $form->error($model, 'default_billing_address'); ?>
                                    </div>
                                </div>
                                <div class="copyz">
                                    <div class="col-sm-3 col-xs-3 zeros">
                                        <?php echo $form->labelEx($model, 'default_shipping_address', array('class' => 'control-labelz')); ?>
                                    </div>
                                    <div class="col-sm-1 col-xs-1 zeros">
                                        <label for="textinput" class="control-labelz">:</label>
                                    </div>
                                    <div class="col-sm-8 col-xs-8 zeros">
                                        <?php echo $form->checkBox($model, 'default_shipping_address', array('class' => 'subscrib')); ?>
                                        <?php echo $form->error($model, 'default_shipping_address'); ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="copyz">
                                    <div class="col-sm-4 col-xs-4 zeros"></div>
                                    <div class="col-sm-4 col-xs-4 zeros">
                                        <?php echo CHtml::resetButton('Reset', array('class' => 'btn can2 btn-default')); ?>

                                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'btn can1 btn-default')); ?>

                                    </div>
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
<style>
    .subscrib {
        border: solid 1px #d5d5d7;
        padding-top: 5px;
        font-size: 12px;
        content: "\f00c";
        color: #f47721;
    }
    .errorMessage {
        color: red;
    }
</style>






