<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/user/userDetails/admin'; ?>">User Details</a>
        </li>
        <li class="active"> Create User </li>
    </ul>
</div>
<div class="row">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/user/userDetails/admin'; ?>" class='btn btn-danger'>Manage Users</a>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update User - <?php echo $model->first_name . ' ' . $model->last_name; ?></h2>

            </div>
            <?php $this->renderPartial("_form", array("model" => $model)); ?>


            <div class="box">
                <a href="#" class="btn btn-info btn-setting btn-sm">Add Address</a>
                <div class="box-body table-responsive no-padding">
                    <?php
                    $this->widget('booster.widgets.TbGridView', array(
                        'type' => ' bordered condensed hover',
                        'id' => 'user-address-grid',
                        'dataProvider' => $address1->search(),
                        'filter' => $address1,
                        'columns' => array(
                            'first_name',
                            'last_name',
                            'contact_number',
                            'company',
                            'address_1',
                            'address_2',
                            'city',
                            array(
                                'name' => 'state',
                                'value' => function($data) {
                                        return States::model()->findByPk($data->state)->state_name;
                                }
                            ),
                            array(
                                'name' => 'country',
                                'value' => function($data) {
                                        return Countries::model()->findByPk($data->country)->country_name;
                                }
                            ),
                            'postcode',
                            array(
                                'htmlOptions' => array('nowrap' => 'nowrap'),
                                'class' => 'booster.widgets.TbButtonColumn',
                                'template' => '<td>{update}</td><td>{delete}</td>',
                                'buttons' => array(
                                    'update' => array(
                                        'url' => 'Yii::app()->request->baseUrl."/admin.php/user/userDetails/update/id/".$data->userid."/address/".$data->id',
                                        'label' => '<i class="glyphicon glyphicon-pencil"> </i>',
                                        'options' => array(
                                            'data-toggle' => 'tooltip',
                                            'title' => 'Edit',
                                        //  'class' => 'btn-setting'
                                        ),
                                    ),
                                    'delete' => array(
                                        'url' => 'Yii::app()->request->baseUrl."/admin.php/user/userAddress/delete/id/".$data->id',
                                        'label' => '<i class="glyphicon glyphicon-trash"> </i>',
                                        'options' => array(
                                            'data-toggle' => 'tooltip',
                                            'title' => 'Delete',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content  modal-body">

            <div class="box">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-edit"></i> Address - <?php echo $model->first_name . ' ' . $model->last_name; ?></h2>
                        <button class="close" data-dismiss="modal" type="button">×</button>
                    </div>
                    <div class="box-content">
                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'user-address-form',
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
                            <?php echo $form->labelEx($address, 'first_name', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'first_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'first_name'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'last_name', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'last_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'last_name'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'company', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'company', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'company'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'contact_number', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'contact_number', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'contact_number'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'address_1', array('class' => 'control-label')); ?>
                            <?php echo $form->textArea($address, 'address_1', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control', 'rows' => '4', 'cols' => '50')); ?>

                            <?php echo $form->error($address, 'address_1'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'address_2', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'address_2', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'address_2'); ?>
                        </div>

                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'city', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'city', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'city'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'state', array('class' => 'control-label')); ?>
                            <?php echo CHtml::activeDropDownList($address, 'state', CHtml::listData(States::model()->findAll(), 'Id', 'state_name'), array('empty' => '--Select--', 'class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'state'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'country', array('class' => 'control-label')); ?>
                            <?php echo CHtml::activeDropDownList($address, 'country', CHtml::listData(Countries::model()->findAll(), 'id', 'country_name'), array('empty' => '--Select--', 'class' => 'form-control')); ?>
                            <?php echo $form->error($address, 'country'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($address, 'postcode', array('class' => 'control-label')); ?>
                            <?php echo $form->textField($address, 'postcode', array('class' => 'form-control')); ?>

                            <?php echo $form->error($address, 'postcode'); ?>
                        </div>









                        <div class="box-footer">
                            <?php echo CHtml::submitButton($address->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
                        </div>

                        <?php $this->endWidget(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
        $(document).ready(function () {
<?php
if($address->hasErrors()) {
        ?>
                    $('#myModal').modal({backdrop: 'static', keyboard: false});
        <?php
}
if(isset($_REQUEST['address']) && $_REQUEST['address'] != '') {
        ?>
                    $('#myModal').modal('show');
        <?php
}
?>
        });
</script>