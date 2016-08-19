<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/gallery/admin'; ?>">Gallery</a>
        </li>
        <li class="active"> Create New </li>
    </ul>
</div>
<div class="row">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/gallery/admin'; ?>" class='btn btn-danger'>Manage Gallery</a>

    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Create New</h2>  </div>
                <?php $this->renderPartial("_form", array("model" => $model)); ?>



        </div>
    </div>
</div>



