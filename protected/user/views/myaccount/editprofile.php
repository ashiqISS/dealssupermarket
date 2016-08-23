
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumbs">

                <a href="<?php echo Yii::app()->request->baseUrl . '/Myaccount/Profile'; ?>">HOME</a>
                <span>/</span>Update Profile
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

                <div class="left-content"><div class="row">
                        <h2>Update Profile Information</h2>
                        <p></p>
                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'dimension-class-form',
                            'htmlOptions' => array('class' => ''),
                            'action' => Yii::app()->baseUrl . '/index.php/Myaccount/EditProfile',
                            // Please note: When you enable ajax validation, make sure the corresponding
                            // controller action is handling ajax validation correctly.
                            // There is a call to performAjaxValidation() commented in generated controller code.
                            // See class documentation of CActiveForm for details on this.
                            'enableAjaxValidation' => false,
                        ));
                        ?>
                        <?php //echo $form->errorSummary($model);   ?>
                        <div class="strip-padding">
                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'first_name<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-new')); ?>
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
                                    <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-new')); ?>
                                    <?php echo $form->error($model, 'last_name'); ?>
                                </div>
                            </div>

                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'email<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'class' => 'form-new', 'disabled' => 'true')); ?>
                                    <?php echo $form->error($model, 'email'); ?>
                                </div>
                            </div>

                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'gender<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-4 col-xs-4 zeros">
                                    <?php echo $form->dropDownList($model, 'gender', array('' => '--Select Gender--', 'Male' => "Male", 'Female' => "Female"), array('class' => 'form-new')); ?>
                                    <?php echo $form->error($model, 'gender'); ?>
                                </div>
                            </div>



                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'country', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-4 col-xs-4 zeros">
                                    <?php echo CHtml::activeDropDownList($model, 'country', CHtml::listData(Countries::model()->findAll(), 'id', 'country_name'), array('empty' => '--Select Country--', 'class' => 'form-new')); ?>
                                    <?php echo $form->error($model, 'country'); ?>
                                </div>
                            </div>

                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'phone_no_1<font color="red"> *</font>', array('class' => 'control-labelz')); ?>
                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->textField($model, 'phone_no_1', array('size' => 60, 'maxlength' => 100, 'class' => 'form-new')); ?>
                                    <?php echo $form->error($model, 'phone_no_1'); ?>
                                </div>
                            </div>
                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'phone_no_2', array('class' => 'control-labelz')); ?>

                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">
                                    <?php echo $form->textField($model, 'phone_no_2', array('size' => 60, 'maxlength' => 100, 'class' => 'form-new')); ?>
                                    <?php echo $form->error($model, 'phone_no_2'); ?>
                                </div>
                            </div>
                            <div class="copyz">
                                <div class="col-sm-3 col-xs-3 zeros">
                                    <?php echo $form->labelEx($model, 'newsletter', array('class' => 'control-labelz')); ?>

                                </div>
                                <div class="col-sm-1 col-xs-1 zeros">
                                    <label for="textinput" class="control-labelz">:</label>
                                </div>
                                <div class="col-sm-8 col-xs-8 zeros">&nbsp;&nbsp;&nbsp;
                                    <?php
                                    echo $form->checkBox($model, 'newsletter', array('class' => 'subscrib'));
                                    ?>
                                    <?php //echo $form->error($model, 'newsletter');   ?>
                                    <label><span></span>Please add me to the Subscriber email list. <a href="#">See Privacy Policy</a></label>

                                </div>
                            </div>



                            <div class="copyz">
                                <div class="col-sm-4 col-xs-4 zeros"></div>
                                <div class="col-sm-4 col-xs-4 zeros">
                                    <?php echo CHtml::resetButton('Reset', array('class' => 'btn can2 btn-default')); ?>
                                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save', array('class' => 'btn can1 btn-default',)); ?>


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
        padding: 2px;
        font-size: 12px;
        content: "\f00c";
        color: #f47721;
    }
    .errorMessage {
        color: red;
    }
</style>

