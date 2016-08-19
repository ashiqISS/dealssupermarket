<div>
    <ul class="breadcrumb">
        <li>
            <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/site/home">Dashboard</a>
        </li>

        <li class="active"> Product List </li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <h3>Products</h3>
        <a href="<?php echo Yii::app()->request->baseUrl . '/admin.php/catalog/products/create'; ?>" class='btn btn-danger'>New Product</a>

        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'type' => ' bordered condensed hover',
            'id' => 'products-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'sku',
                array(
                    'name' => 'product_name',
                    'value' => function($data) {
                            return '<a href="' . Yii::app()->request->baseUrl . '/admin.php/catalog/products/update/id/' . $data->id . '" title="' . $data->product_name . '">' . $data->product_name . '</a>';
                    },
                    'type' => 'raw',
                ),
                array('name' => 'category_id',
                    'value' => function($data) {
                            $cats = array_filter(explode(',', $data->category_id));

                            $catt = '';
                            foreach($cats as $cat) {
                                    unset($_SESSION['category']);
                                    $category = ProductCategory::model()->findByPk($cat);
                                    $catt .= Yii::app()->category->selectCategories($category) . ', ';
                            }
                            return $catt;
                    },
                ),
                'price_in_marina',
                'price_in_barsha',
                'quantity',
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

