<?php
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>


<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'gallery-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <br/>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'category'); ?>
        <?php echo $form->dropDownList($model, 'category', CHtml::listData(MasterGallery::model()->findAll(), 'id', 'name'), array('empty' => 'Select Category', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'category'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 250, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'image', array('class' => 'control-label')); ?>
        <?php echo $form->fileField($model, 'image', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control')); ?>
        <?php
        if($model->image != '') {
                echo '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->baseUrl . '/uploads/gallery/' . $model->id . '/small.' . $model->image . '" />';
        }
        ?>
        <?php echo $form->error($model, 'image'); ?>
    </div>


    <div class="form-group">
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->dropDownList($model, 'status', array('1' => "Enabled", '0' => "Disabled"), array('class' => 'form-control')); ?>

        <?php echo $form->error($model, 'status'); ?>
    </div>


    <div class="form-group btns">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-success')); ?> </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->