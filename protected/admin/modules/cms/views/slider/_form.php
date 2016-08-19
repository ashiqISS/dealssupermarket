

<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'slider-form',
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
        <?php echo $form->labelEx($model, 'image_extension', array('class' => 'control-label')); ?>
        <?php echo $form->fileField($model, 'image_extension', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php
        if($model->image_extension != '') {
                echo '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->baseUrl . '/uploads/sliders/' . $model->id . '.' . $model->image_extension . '" />';
        }
        ?>

        <?php echo $form->error($model, 'image_extension'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'content', array('class' => 'control-label')); ?>
        <?php
        $this->widget('application.admin.extensions.eckeditor.ECKEditor', array(
            'model' => $model,
            'attribute' => 'content',
        ));
        ?>

        <?php echo $form->error($model, 'content'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'status', array('1' => 'Enabled', '0' => 'Disabled'), array('class' => 'form-control')); ?>

        <?php echo $form->error($model, 'status'); ?>
    </div>




    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->