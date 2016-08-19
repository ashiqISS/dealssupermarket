<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active">  Category </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3> Category</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/catalog/productCategory/create'; ?>" class='btn btn-danger'>New Category</a>

        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'product-category-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                //'parent',
                array(
                    'name' => 'parent',
                    'filter' => CHtml::listData(ProductCategory::model()->findAll(array('condition' => 'id=parent and status=1')), 'id', 'category_name'),
                    'value' => function($data) {
                    $value = ProductCategory::model()->findByPk($data->parent);
                    return $value->category_name;
            },
                ),
                array(
                    'name' => 'category_name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/catalog/productCategory/update/id/' . $data->id . '" title="' . $data->category_name . '">' . $data->category_name . '</a>';
                    },
                    'type' => 'raw',
                ),
                array(
                    'name' => 'header_visibility',
                    'filter' => array('1' => "Yes", '0' => "No"),
                    'value' => function($data) {

                    return $data->header_visibility == 1 ? 'Yes' : 'No';
            },
                ),
                array(
                    'header' => 'Sub-category',
                    'value' => function($data) {
                            echo $sub = ProductCategory::model()->count(array('condition' => '`parent`=' . $data->id . ' and id!=parent and status=1'));
                    }
                        ),
                        array(
                            'header' => 'Products',
                            'value' => function($data) {
                                    echo $sub = Products::model()->count(array('condition' => 'find_in_set("' . $data->id . '",category_id) and status=1'));
                            }
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
                                    'filter' => array('1' => "Enabled", '0' => "disabled")
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


