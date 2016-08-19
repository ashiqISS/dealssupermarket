
<div class="box-content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'products-form',
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <fieldset>
        <legend>Product Details</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'category_id', array('class' => 'control-label')); ?>


            <?php echo $form->hiddenField($model, 'category_id'); ?>
            <?php
            $this->widget('application.admin.components.CatSelect', array(
                'type' => 'category',
                'field_val' => $model->category_id,
                'category_tag_id' => 'Products_category_id', /* id of hidden field */
                'form_id' => 'product-category-form',
            ));
            ?>

            <?php echo $form->error($model, 'category_id'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'sku', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'sku', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

            <?php echo $form->error($model, 'sku'); ?>
        </div>
        <div class="form-group" >
            <?php echo $form->labelEx($model, 'product_name', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'product_name', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control slug', 'autocomplete' => 'off')); ?>

            <?php echo $form->error($model, 'product_name'); ?>
        </div>


        <div class="form-group">
            <?php echo $form->labelEx($model, 'canonical_name', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'canonical_name', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

            <?php echo $form->error($model, 'canonical_name'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'price_in_marina', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'price_in_marina', array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'price_in_marina'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'price_in_barsha', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'price_in_barsha', array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'price_in_barsha'); ?>
        </div>
        <div class="form-group">

            <?php echo $form->checkBox($model, 'featured_product', array('value' => 1, 'uncheckValue' => 0, 'checked' => ($model->id == "" ? true : $model->featured_product), 'style' => 'margin-top:7px;')); ?>
            <?php echo $form->labelEx($model, 'featured_product', array('class' => 'control-label')); ?>


            <?php echo $form->checkBox($model, 'popular_product', array('value' => 1, 'uncheckValue' => 0, 'checked' => ($model->id == "" ? true : $model->popular_product), 'style' => 'margin-top:7px;')); ?>
            <?php echo $form->labelEx($model, 'popular_product', array('class' => 'control-label')); ?>



        </div>
    </fieldset>
    <fieldset>
        <legend>Images</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'Main Image ( image size : 322 X 500 )', array('class' => 'control-label')); ?>
            <?php echo $form->fileField($model, 'main_image', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php
            if($model->main_image != '' && $model->id != "") {
                    $folder = Yii::app()->Upload->folderName(0, 1000, $model->id);
                    echo '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->baseUrl . '/uploads/products/' . $folder . '/' . $model->id . '/small' . '.' . $model->main_image . '" />';
            }
            ?>

            <?php echo $form->error($model, 'main_image'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'Hover Images ( image size : 322 X 500 )', array('class' => 'control-label')); ?>
            <?php echo $form->fileField($model, 'hover_image', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php
            if($model->hover_image != '' && $model->id != "") {
                    $folder = Yii::app()->Upload->folderName(0, 1000, $model->id);
                    echo '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->baseUrl . '/uploads/products/' . $folder . '/' . $model->id . '/hover/hover.' . $model->hover_image . '" />';
            }
            ?>

            <?php echo $form->error($model, 'hover_image'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'Special Product Image for home page ( image size : 322 X 500 )', array('class' => 'control-label')); ?>
            <?php echo $form->fileField($model, 'special_product_image', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
            <?php
            if($model->special_product_image != '' && $model->id != "") {
                    $folder = Yii::app()->Upload->folderName(0, 1000, $model->id);
                    echo '<img width="125" style="border: 2px solid #d2d2d2;" src="' . Yii::app()->baseUrl . '/uploads/products/' . $folder . '/' . $model->id . '/special.' . $model->special_product_image . '" />';
            }
            ?>

            <?php echo $form->error($model, 'special_product_image'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'Gallery Images ( image size : 1508 X 2015 )', array('class' => 'control-label')); ?>

            <?php
            $this->widget('CMultiFileUpload', array(
                'name' => 'gallery_images',
                'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
                'duplicate' => 'Duplicate file!', // useful, i think
                'denied' => 'Invalid file type', // useful, i think
            ));
            ?>

            <?php
            if(!$model->isNewRecord) {
                    $folder = Yii::app()->Upload->folderName(0, 1000, $model->id);

                    // $path = Yii::getPathOfAlias('webroot') . '/uploads/products/' . $folder . '/' . $model->id . '/gallery/big';

                    $path = Yii::getPathOfAlias('webroot') . '/uploads/products/' . $folder . '/' . $model->id . '/gallery/big';


                    $path2 = Yii::getPathOfAlias('webroot') . '/uploads/products/' . $folder . '/' . $model->id . '/gallery/';


                    foreach(glob("{$path}/*") as $file) {

                            $info = pathinfo($file);
                            $file_name = basename($file, '.' . $info['basename']);

                            //  var_dump($file_name);



                            if($file != '') {
                                    $arry = explode('/', $file);
                                    echo '<div style="float:left;margin:5px;position:relative;">'
                                    . '<a style="position:absolute;top:43%;left:40%;color:red;" href="' . Yii::app()->baseUrl . '/admin.php/products/products/NewDelete?id=' . $model->id . '&path=' . $file_name . '"><i class="glyphicon glyphicon-trash"></i></a>'
                                    . ' <img style="width:100px;height:100px;" src="' . Yii::app()->baseUrl . '/uploads/products/' . $folder . '/' . $model->id . '/gallery/' . end($arry) . '"> </div>';
                            }
                    }
            }
            ?>

            <?php echo $form->error($model, 'gallery_images'); ?>
        </div>



    </fieldset>

    <fieldset>
        <legend>Description</legend>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'description', array('class' => 'control-label')); ?>
            <?php
            $this->widget('application.admin.extensions.eckeditor.ECKEditor', array(
                'model' => $model,
                'attribute' => 'description',
            ));
            ?>

            <?php echo $form->error($model, 'description'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'product_details', array('class' => 'control-label')); ?>
            <?php
            $this->widget('application.admin.extensions.eckeditor.ECKEditor', array(
                'model' => $model,
                'attribute' => 'product_details',
            ));
            ?>
            <?php echo $form->error($model, 'product_details'); ?>
        </div>
    </fieldset>

    <fieldset>
        <legend>Stock Details</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'quantity', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'quantity', array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'quantity'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'subtract_stock', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($model, 'subtract_stock', array('1' => "Yes", '0' => "No"), array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'subtract_stock'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'stock_availability', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($model, 'stock_availability', array('1' => "Yes", '0' => "No"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'stock_availability'); ?>
        </div>
    </fieldset>
    <fieldset>
        <legend>Meta Details</legend>
        <div class="form-group">

            <?php echo $form->labelEx($model, 'meta_title', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'meta_title', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

            <?php echo $form->error($model, 'meta_title'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'meta_description', array('class' => 'control-label')); ?>
            <?php echo $form->textArea($model, 'meta_description', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

            <?php echo $form->error($model, 'meta_description'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'meta_keywords', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'meta_keywords', array('size' => 60, 'maxlength' => 225, 'class' => 'form-control')); ?>

            <?php echo $form->error($model, 'meta_keywords'); ?>
        </div>

    </fieldset>







    <fieldset>
        <legend>Discount Details</legend>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'discount_type', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($model, 'discount_type', array('1' => "Fixed", '0' => "Classic"), array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'discount_type'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'discount_rate', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'discount_rate', array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'discount_rate'); ?>
        </div>
    </fieldset>



    <fieldset>
        <legend>New Tag</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'new_from', array('class' => 'control-label')); ?>
            <?php
            $from = date('Y') - 2;
            $to = date('Y') + 20;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'new_from',
                'value' => 'new_from',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'new_from',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'new_from'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'new_to', array('class' => 'control-label')); ?>
            <?php
            $from = date('Y') - 2;
            $to = date('Y') + 20;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'new_to',
                'value' => 'new_to',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'new_to',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'new_to'); ?>
        </div>
    </fieldset>
    <fieldset>
        <legend>Sale Tag</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'sale_from', array('class' => 'control-label')); ?>
            <?php
            $from = date('Y') - 2;
            $to = date('Y') + 20;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'sale_from',
                'value' => 'sale_from',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'sale_from',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'sale_from'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'sale_to', array('class' => 'control-label')); ?>
            <?php
            $from = date('Y') - 2;
            $to = date('Y') + 20;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'sale_to',
                'value' => 'sale_to',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'sale_to',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'sale_to'); ?>
        </div>
    </fieldset>
    <fieldset>
        <legend>Special Price</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'special_price_from', array('class' => 'control-label')); ?>
            <?php
            $from = date('Y') - 2;
            $to = date('Y') + 20;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'special_price_from',
                'value' => 'special_price_from',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'special_price_from',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'special_price_from'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'special_price_to', array('class' => 'control-label')); ?>
            <?php
            $from = date('Y') - 2;
            $to = date('Y') + 20;
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'special_price_to',
                'value' => 'special_price_to',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeYear' => true, // can change year
                    'changeMonth' => true, // can change month
                    'yearRange' => $from . ':' . $to, // range of year
                    'showButtonPanel' => true, // show button panel
                ),
                'htmlOptions' => array(
                    'size' => '10', // textField size
                    'maxlength' => '10', // textField maxlength
                    'class' => 'form-control',
                    'placeholder' => 'special_price_to',
                ),
            ));
            ?>
            <?php echo $form->error($model, 'special_price_to'); ?>
        </div>
    </fieldset>
    <fieldset>
        <legend>Weight Details</legend>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'weight', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'weight', array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'weight'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'weight_class', array('class' => 'control-label')); ?>
            <?php echo CHtml::activeDropDownList($model, 'weight_class', CHtml::listData(WeightClass::model()->findAll(), 'id', 'title'), array('empty' => '--Select--', 'class' => 'form-control')); ?>

            <?php echo $form->error($model, 'weight_class'); ?>
        </div>
    </fieldset>
    <fieldset>
        <legend>Other Details</legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'tax', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'tax', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tax'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'gift_option', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($model, 'gift_option', array('1' => "Yes", '0' => "No"), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'gift_option'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'requires_shipping', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($model, 'subtract_stock', array('1' => "Yes", '0' => "No"), array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'requires_shipping'); ?>
        </div>



        <div class="form-group">
            <?php echo $form->labelEx($model, 'sort_order', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'sort_order', array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'sort_order'); ?>
        </div>
        <div class="form-group" style="min-height: 152px;">
            <?php echo $form->labelEx($model, 'search_tag', array('class' => 'control-label')); ?>
            <?php echo $form->hiddenField($model, 'search_tag'); ?>
            <?php
            $this->widget('application.admin.components.TagSelect', array(
                'type' => 'product',
                'field_val' => $model->search_tag,
                'category_tag_id' => 'Products_search_tag', /* id of hidden field */
                'form_id' => 'products-form',
            ));
            ?></div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'related_products', array('class' => 'control-label')); ?>

            <?php
            if(!is_array($model->related_products)) {
                    $myArray = explode(',', $model->related_products);
            } else {
                    $myArray = $model->related_products;
            }


            $related_products = array();

            foreach($myArray as $value) {
                    $related_products[$value] = array('selected' => 'selected');
            }
            ?>

            <?php echo CHtml::activeDropDownList($model, 'related_products', CHtml::listData(Products::model()->findAll(), 'id', 'product_name'), array('empty' => '-Select-', 'class' => 'form-control', 'multiple' => true, 'options' => $related_products));
            ?>


            <?php echo $form->error($model, 'related_products'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'status', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($model, 'status', array('1' => "Enabled", '0' => "Disabled"), array('class' => 'form-control')); ?>

            <?php echo $form->error($model, 'status'); ?>
        </div>
    </fieldset>

    <div class="form-group">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update', array('class' => 'btn btn-success')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>

<script>
        $(document).ready(function () {
            $('.slug').keyup(function () {
                $('#Products_canonical_name').val(slug($(this).val()));
            });

        });
        var slug = function (str) {
            var $slug = '';
            var trimmed = $.trim(str);
            $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                    replace(/-+/g, '-').
                    replace(/^-|-$/g, '');
            return $slug.toLowerCase();
        };

</script>
