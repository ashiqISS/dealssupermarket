<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'countries-form',
        'htmlOptions' => array(),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>



    <div class="form-group">
        <?php echo $form->labelEx($model, 'country_name', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'country_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

        <?php echo $form->error($model, 'country_name'); ?>
    </div>


    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->