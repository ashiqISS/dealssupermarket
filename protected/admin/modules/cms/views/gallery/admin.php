<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Gallery </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Gallery</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/cms/gallery/create'; ?>" class='btn btn-danger'>Add New</a>


        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'gallery-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'category',
                    'filter' => CHtml::listData(MasterGallery::model()->findAll(), 'id', 'name'),
                    'value' => function ($data) {
                            return MasterGallery::model()->findByPk($data->category)->name;
                    },
                ),
                array(
                    'name' => 'title',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/cms/gallery/update/id/' . $data->id . '" title="' . $data->title . '">' . $data->title . '</a>';
                    },
                    'type' => 'raw',
                ),
                array(
                    'name' => 'image',
                    'value' => function($data) {
                            return '<img width="125" style="border: 2px solid #5f5f5f;" src="' . Yii::app()->baseUrl . '/uploads/gallery/' . $data->id . '/small.' . $data->image . '" />';
                    },
                    'type' => 'raw',
                ),
                /*
                  'ub',
                  'doc',
                  'dou',
                 */
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



