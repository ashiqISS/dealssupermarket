<?php
if(Yii::app()->controller->action->id == 'aboutUs') {
        $page = 'About Us';
        $id = 1;
} else if(Yii::app()->controller->action->id == 'marketFresh') {
        $page = 'Market Fresh';
        $id = 2;
} else if(Yii::app()->controller->action->id == 'contactUs') {
        $page = 'Contact Us';
        $id = 5;
} else {
        $page = '';
        $id = '';
}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> <?php echo $page; ?> </li>
    </ul>
</div>
<div class="row">


    <div class="box col-md-12">

        <a class="btn btn-danger" href="<?php echo Yii::app()->request->baseurl . '/admin.php/cms/pages/create/page/' . $id; ?>" id="add-note">

            <span>Add New</span>
        </a>
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'pages-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/cms/pages/update/id/' . $data->id . '" title="' . $data->name . '">' . $data->name . '</a>';
                    },
                    'type' => 'raw',
                ),
                array(
                    'htmlOptions' => array('nowrap' => 'nowrap'),
                    'class' => 'booster.widgets.TbButtonColumn',
                    'template' => '{delete}',
                ),
            ),
        ));
        ?>
    </div>




</div>

