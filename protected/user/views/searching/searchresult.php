<div class="container">
        <div class="row">
                <div class="col-md-12">
                        <div class="breadcrumbs">

                                <a href="<?php echo Yii::app()->request->baseUrl; ?>">HOME</a>
                                <span>/</span>Search Result</div>
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







