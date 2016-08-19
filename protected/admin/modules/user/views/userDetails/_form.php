
<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-details-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>



    <div class="form-group">
        <?php echo $form->labelEx($model, 'first_name', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'first_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'first_name'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'last_name', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'last_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'last_name'); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'Date of Birth', array('class' => 'control-label')); ?>

        <?php
        $from = date('Y') - 80;
        $to = date('Y') - 16;
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'dob',
            'value' => 'dob',
            'options' => array(
                'dateFormat' => 'dd-mm-yy',
                'changeYear' => true, // can change year
                'changeMonth' => true, // can change month
                'yearRange' => $from . ':' . $to, // range of year
                'showButtonPanel' => true, // show button panel
            ),
            'htmlOptions' => array(
                'size' => '10', // textField size
                'maxlength' => '10', // textField maxlength
                'class' => 'form-control',
                'placeholder' => 'Date Of Birth',
            ),
        ));
        ?>
        <?php echo $form->error($model, 'Date of Birth'); ?>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'Gender', array('class' => 'control-label')); ?>

        <?php echo $form->dropDownList($model, 'gender', array('male' => "male", 'female' => "fe-male"), array('empty' => 'Select Gender', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'Gender'); ?>

    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'email_verification', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'email_verification', array('1' => "Verified", '0' => "Not Verified"), array('empty' => 'Select', 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'email_verification'); ?>
    </div>


    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'confirm', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'confirm', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'confirm'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone_no_1', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'phone_no_1', array('class' => 'form-control')); ?>

        <?php echo $form->error($model, 'phone_no_1'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'phone_no_2', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'phone_no_2', array('class' => 'form-control')); ?>

        <?php echo $form->error($model, 'phone_no_2'); ?>
    </div>





    <div class="form-group">
        <?php echo $form->labelEx($model, 'newsletter', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'status', array('1' => "Enabled", '0' => "Disabled"), array('class' => 'form-control')); ?>

        <?php echo $form->error($model, 'newsletter'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'status', array('1' => "Enabled", '0' => "Disabled"), array('class' => 'form-control')); ?>

        <?php echo $form->error($model, 'status'); ?>
    </div>


    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->