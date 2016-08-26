<div class="container main_container product_archive">
        <?php
        $category_name = Yii::app()->request->getParam('name');
        if ($category_name != "") {
                $get_cat_name = ProductCategory::model()->findByAttributes(array('canonical_name' => $category_name));
        }
        ?>
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="breadcrumbs">

                                        <?php echo $this->renderPartial('_bread_crumb', array('category_name' => $category_name)); ?>
                                </div>
                        </div>
                </div>

        </div>


        <?php
        if (Yii::app()->session['user']) {
                $cnt = 8;
                ?>
                <div class="anim-menu visible-xs">
                        <a href="#" class="navicon"></a>
                        <div class="toggle">

                                <div class="toggle-menu mob-sidebar">

                                        <?php
                                        echo $this->renderPartial('_togglemenu');
                                        ?>


                                </div>
                        </div>
                </div>
                <?php
        } else {
                $cnt = 12;
        }
        ?>
        <section class="wishlist">
                <div class="container">
                        <div class="row">
                                <div class="col-md-<?php echo $cnt; ?>">

                                        <div class="left-content">
                                                <h2>Search Result</h2>
                                                <div class="row">

                                                        <div class="rowc">
                                                                <?php
                                                                if (!empty($dataprovider) || $dataProvider != '') {
                                                                        $this->widget('zii.widgets.CListView', array(
                                                                            'dataProvider' => $dataProvider,
                                                                            'itemView' => '_view',
                                                                            'template' => "{pager}\n{items}\n{pager}",
                                                                        ));
                                                                } else {

                                                                }
                                                                ?>

                                                        </div>


                                                </div>




                                        </div>

                                </div>
                                <?php
                                if (Yii::app()->session['user']) {
                                        ?>
                                        <div class="col-md-4 sidebar hidden-xs">

                                                <?php echo $this->renderPartial('_menu'); ?>
                                        </div>
                                        <?php
                                }
                                ?>
                        </div>
                </div>
        </section>




        <!-- /.container -->

        <script>
                function products() {
                        document.getElementById("form_id").submit();
                }
                // Size Selector
                $(".size_selector label").click(function() {

                        $('.size_selector label').removeClass('active');
                        $("input[name=size_selector]").removeAttr('checked');
                        if ($(this).addClass('active')) {
                                $("input[name=size_selector][value='" + this.id + "']").attr("checked", true);
                                $('#selected_size').val(this.id);
                                productFilter();
                        }
                });
                ///

        </script>


        <script>



                $(document).ready(function() {
                        var min = <?php echo Yii::app()->Currency->convertPrice(100); ?>;
                        var max = <?php echo Yii::app()->Currency->convertPrice(50000); ?>;
                        //alert(test);
                        $("#slider-range").slider({range: true,
                                min: min,
                                max: max,
                                values: [min, max],
                                slide: function(event, ui) {
                                        var min_amount = $("#amount").val(ui.values[ 0 ]);
                                        var max_amount = $("#amount1").val(ui.values[ 1 ]);
                                        var categ_id = $("#cat_name").val();
                                        //                    if ($(".min_value").html("<i class='fa fa-rupee'></i> " + ui.values[ 0 ]) && $(".max_value").html("<i class='fa fa-rupee'></i> " + ui.values[ 1 ]))
                                        //                    {
                                        //                        pricerange();
                                        $(".min_value").html("<i class='fa <?= Yii::app()->session['currency'] != '' ? Yii::app()->session['currency']->symbol : 'fa-inr'; ?>'></i> " + ui.values[ 0 ]);
                                        $(".max_value").html("<i class='fa <?= Yii::app()->session['currency'] != '' ? Yii::app()->session['currency']->symbol : 'fa-inr'; ?>'></i> " + ui.values[ 1 ]);
                                },
                                stop: function(event, ui) {

                                        //debugger;
                                        productFilter();
                                }
                                //alert();
                        });
                        //            $("#amount").val("$" +$("#slider-range").slider("values", 0));
                        //            $("#amount1").val("$" + $("#slider-range").slider("values", 1));
                        $("#amount").val($("#slider-range").slider("values", 0));
                        $("#amount1").val($("#slider-range").slider("values", 1));
                        $(".min_value").html("<i class='fa <?= Yii::app()->session['currency']->symbol; ?>'></i> " + $("#slider-range").slider("values", 0));
                        $(".max_value").html("<i class='fa <?= Yii::app()->session['currency']->symbol; ?>'></i> " + $("#slider-range").slider("values", 1));
                        $(".add_to_cart").click(function() {
                                var id = $(this).attr('id');
                                var canname = $("#cano_name_" + id).val();
                                var qty = $(".qty_" + id).val();
                                addtocart(canname, qty);
                        });


                });

                function productFilter() {
                        var size;
                        var form = $("#slide_rnge");
                        var min_amount = $("#amount").val();
                        var max_amount = $("#amount1").val();
                        var categ_id = $("#cat_name").val();
                        size = $('#selected_size').val();

                        var value = <?php echo Yii::app()->session['temp_product_filter']; ?>
                        $.ajax({
                                url: baseurl + 'Products/PriceRange',
                                type: "POST",
                                beforeSend: function() {
                                        showLoader();
                                },
                                complete: function() {
                                        hideLoader();
                                },
                                //data: form.serialize()
                                data: {min: min_amount, max: max_amount, cat: categ_id, size: size}
                        }).done(function(data) {
                                if (value == 1) {
                                        $("#content").html(data);
                                } else {
                                        $(".product_list").html(data);
                                }

                                hideLoader();
                        });
                }
                function addtocart(canname, qty) {

                        $.ajax({
                                type: "POST",
                                url: baseurl + 'cart/Buynow',
                                data: {cano_name: canname, qty: qty}
                        }).done(function(data) {
                                getcartcount();
                                getcarttotal();
                                $(".cart_box").html(data);
                                $(".cart_box").show();
                                $("html, body").animate({scrollTop: 0}, "slow");
                                hideLoader();
                        });
                }

                function showLoader() {
                        $('.over-lay').show();
                }
                function hideLoader() {
                        $('.over-lay').hide();
                }

        </script>
