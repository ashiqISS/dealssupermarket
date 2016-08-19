<?php
/* @var $this MasterGalleryController */
/* @var $model MasterGallery */

$this->breadcrumbs=array(
	'Master Galleries'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MasterGallery', 'url'=>array('index')),
	array('label'=>'Create MasterGallery', 'url'=>array('create')),
	array('label'=>'Update MasterGallery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MasterGallery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MasterGallery', 'url'=>array('admin')),
);
?>

<h1>View MasterGallery #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'canonical_name',
		'name',
		'description',
		'CB',
		'UB',
		'DOC',
		'DOU',
	),
)); ?>
