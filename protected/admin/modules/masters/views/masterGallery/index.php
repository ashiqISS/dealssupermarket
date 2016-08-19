<?php
/* @var $this MasterGalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Master Galleries',
);

$this->menu=array(
	array('label'=>'Create MasterGallery', 'url'=>array('create')),
	array('label'=>'Manage MasterGallery', 'url'=>array('admin')),
);
?>

<h1>Master Galleries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
