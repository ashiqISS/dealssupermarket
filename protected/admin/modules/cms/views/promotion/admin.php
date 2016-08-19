<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Promotion </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Promotions</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/promotion/create'; ?>" class='btn btn-danger'>Add New</a>




        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'promotion-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'title',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/cms/promotion/update/id/' . $data->id . '" title="' . $data->title . '">' . $data->title . '</a>';
                    },
                    'type' => 'raw',
                ),
                array(
                    'name' => 'image',
                    'value' => function($data) {
                            if($data->image == "") {
                                    return;
                            } else {
                                    return '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->request->baseUrl . "/uploads/promotion/" . $data->id . "/" . $data->id . "." . $data->image . '" />';
                            }
                    },
                    'type' => 'raw'
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

