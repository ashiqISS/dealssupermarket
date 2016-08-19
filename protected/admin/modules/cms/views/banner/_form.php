<?php
/* @var $this BannerController */
/* @var $model Banner */
/* @var $form CActiveForm */
?>

<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'banner-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>



    <div class="form-group">
        <?php echo $form->labelEx($model, 'heading', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'heading', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'heading'); ?></div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'image', array('class' => 'control-label')); ?>
        <?php echo $form->fileField($model, 'image', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
        <?php
        if($model->image != '') {
                echo '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->baseUrl . '/uploads/banner/' . $model->id . '.' . $model->image . '" />';
        }
        ?>
        <?php echo $form->error($model, 'image'); ?></div>


    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
<!-- form -->