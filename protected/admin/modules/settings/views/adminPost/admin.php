<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Admin Post </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Admin Post</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/settings/adminPost/create'; ?>" class='btn btn-danger'>New Post</a>

        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'admin-post-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'name' => 'post_name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/settings/adminPost/update/id/' . $data->id . '" title="' . $data->post_name . '">' . $data->post_name . '</a>';
                    },
                    'type' => 'raw',
                ),
                array(
                    'name' => 'admin',
                    'value' => function($data) {
                            if($data->admin == 1) {
                                    return "Enabled";
                            } elseif($data->admin == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'products',
                    'value' => function($data) {
                            if($data->products == 1) {
                                    return "Enabled";
                            } elseif($data->products == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'orders',
                    'value' => function($data) {
                            if($data->orders == 1) {
                                    return "Enabled";
                            } elseif($data->orders == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'coupons',
                    'value' => function($data) {
                            if($data->coupons == 1) {
                                    return "Enabled";
                            } elseif($data->coupons == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'cms',
                    'value' => function($data) {
                            if($data->cms == 1) {
                                    return "Enabled";
                            } elseif($data->cms == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'masters',
                    'value' => function($data) {
                            if($data->masters == 1) {
                                    return "Enabled";
                            } elseif($data->masters == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'user_details',
                    'value' => function($data) {
                            if($data->user_details == 1) {
                                    return "Enabled";
                            } elseif($data->user_details == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
                ),
                array(
                    'name' => 'reports',
                    'value' => function($data) {
                            if($data->reports == 1) {
                                    return "Enabled";
                            } elseif($data->reports == 0) {
                                    return "Disabled";
                            } else {
                                    return "Invalid";
                            }
                    },
                    'filter' => array('1' => "Enabled", '0' => "Disabled")
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
                /* 'CB',
                  'UB',
                  'DOC',
                  'DOU',
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
