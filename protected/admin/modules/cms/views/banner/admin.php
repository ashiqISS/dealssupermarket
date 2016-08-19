<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Banner </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Banner</h3>

        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'banner-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'heading',
                array(
                    'name' => 'image',
                    'value' => function($data) {
                            if($data->image == "") {
                                    return;
                            } else {
                                    return '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->request->baseUrl . "/uploads/banner/" . $data->id . "." . $data->image . '" />';
                            }
                    },
                    'type' => 'raw'
                ),
                array(
                    'htmlOptions' => array('nowrap' => 'nowrap'),
                    'class' => 'booster.widgets.TbButtonColumn',
                    'template' => '{update}',
                ),
            ),
        ));
        ?>
    </div>

</div>


</div>

