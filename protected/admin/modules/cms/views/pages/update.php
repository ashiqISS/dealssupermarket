<?php
if($model->menu_id == 1) {

        $action = 'aboutUs';
        $page = 'About Us';
} else if($model->menu_id == 2) {
        $page = 'Market Fresh';
        $action = 'marketFresh';
} else if($model->menu_id == 5) {
        $page = 'Contact Us';
        $action = 'contactUs';
} else {

        $action = '';
}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>
        <?php
        if($action != "") {
                ?>
                <li>
                    <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/pages/' . $action; ?>"><?= $page; ?></a>
                </li>
        <?php } ?>
        <li class="active">  <?php echo $model->name; ?> </li>
    </ul>
</div>
<div class="row">
    <?php
    if($action != "") {
            ?>
            <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/pages/' . $action; ?>" class='btn btn-danger'>Manage <?= $page; ?></a>
    <?php } ?>
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Update <?= $page; ?> - <?php echo $model->name; ?></h2>  </div>
                <?php $this->renderPartial("_form", array("model" => $model)); ?>



        </div>
    </div>
</div>



