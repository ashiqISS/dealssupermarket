
<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/settings/AdminPost/admin'; ?>">Admin Post</a>
        </li>
        <li class="active"> New Post </li>
    </ul>
</div>
<div class="row">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/settings/adminPost/admin'; ?>" class='btn btn-danger'>Manage Post</a>
    <div class="box col-md-12">

        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> New Post</h2>  </div>
                <?php $this->renderPartial("_form", array("model" => $model)); ?>



        </div>
    </div>
</div>

