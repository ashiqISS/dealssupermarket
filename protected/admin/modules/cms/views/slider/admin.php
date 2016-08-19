<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Slider </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Slider</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/slider/create'; ?>" class='btn btn-danger'>Add New</a>




        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'slider-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'htmlOptions' => array('nowrap' => 'nowrap'),
                    'class' => 'booster.widgets.TbButtonColumn',
                    'header' => 'Edit',
                    'template' => '{update}',
                ),
                array(
                    'name' => 'image_extension',
                    'value' => function($data) {
                            if($data->image_extension == "") {
                                    return;
                            } else {
                                    return '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->request->baseUrl . "/uploads/sliders/" . $data->id . "." . $data->image_extension . '" />';
                            }
                    },
                    'type' => 'raw'
                ),
                array(
                    'name' => 'status',
                    'value' => function($data) {



                            if($data->status == 1) {
                                    return "Enabled";
                            } elseif($data->status == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                /*
                  'DOU',
                 */
                array(
                    'htmlOptions' => array('nowrap' => 'nowrap'),
                    'class' => 'booster.widgets.TbButtonColumn',
                    'header' => 'Delete',
                    'template' => '{delete}',
                ),
            ),
        ));
        ?>
    </div>
</div>

