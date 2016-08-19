<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'admin-post-form',
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
        <?php echo $form->labelEx($model, 'post_name', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'post_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'post_name'); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'admin', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'admin', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'admin'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'products', array('class' => 'ontrol-label')); ?>
        <?php echo $form->dropDownList($model, 'products', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'products'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'orders', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'orders', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'orders'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'coupons', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'coupons', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'coupons'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'cms', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'cms', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'cms'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'masters', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'masters', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'masters'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'user_details', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'user_details', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'user_details'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'reports', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'reports', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'reports'); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'status', array('1' => 'Yes', '0' => 'No'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'status'); ?>
    </div>

    <div class="form-group">
        <label>&nbsp;</label><br/>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->