<?php
if($_REQUEST['page'] == 1) {
        $page = 'About Us';
        $action = 'aboutUs';
} else if($_REQUEST['page'] == 2) {
        $page = 'Market Fresh';
        $action = 'marketFresh';
} else if($_REQUEST['page'] == 5) {
        $page = 'Contact Us';
        $action = 'contactUs';
} else {
        $page = '';
        $action = '';
}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/pages/' . $action; ?>"><?php echo $page; ?></a>
        </li>
        <li class="active"> Create New </li>
    </ul>
</div>
<div class="row">
    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/pages/' . $action; ?>" class='btn btn-danger'>Manage <?php echo $page; ?></a>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Create New</h2>  </div>
                <?php $this->renderPartial("_form", array("model" => $model)); ?>



        </div>
    </div>
</div>



