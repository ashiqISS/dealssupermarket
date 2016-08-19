<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Admin User </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Admin Users</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/settings/adminUser/create'; ?>" class='btn btn-danger'>New User</a>
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'admin-user-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'admin_post_id',
                    'header' => 'Post Name',
                    'value' => '$data->adminPost->post_name',
//                                            'value' => function($data) {
//
//                                                    return $data->adminPost->post_name;
//                                            },
                    'filter' => CHtml::listData(AdminPost::model()->findAll(), 'id', 'post_name')
                ),
                array(
                    'name' => 'name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/settings/adminUser/update/id/' . $data->id . '" title="' . $data->name . '">' . $data->name . '</a>';
                    },
                    'type' => 'raw',
                ),
                'username',
                'password',
                array(
                    'htmlOptions' => array('nowrap' => 'nowrap'),
                    'class' => 'booster.widgets.TbButtonColumn',
                    'template' => '{delete}',
                ),
            ),
        ));
        ?>
    </div><!-- /.box-body -->
</div><!-- /.box -->
