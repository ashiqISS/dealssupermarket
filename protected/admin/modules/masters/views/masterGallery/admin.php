<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Gallery Category </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Gallery Category</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/masters/masterGallery/create'; ?>" class='btn btn-danger'>New Category</a>


        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'master-gallery-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/masters/masterGallery/update/id/' . $data->id . '" title="' . $data->name . '">' . $data->name . '</a>';
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


