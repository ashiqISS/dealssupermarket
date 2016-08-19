<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> User Details </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>User Details </h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/user/userDetails/create'; ?>" class='btn btn-danger'>New User</a>

        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'user-details-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'first_name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/user/userDetails/update/id/' . $data->id . '" title="' . $data->first_name . " " . last_name . '">' . $data->first_name . '</a>';
                    },
                    'type' => 'raw',
                ),
                array(
                    'name' => 'last_name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/user/userDetails/update/id/' . $data->id . '" title="' . $data->first_name . " " . last_name . '">' . $data->last_name . '</a>';
                    },
                    'type' => 'raw',
                ),
                'email',
                'phone_no_2',
//                    'fax',
                'newsletter',
//                    'status',
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
