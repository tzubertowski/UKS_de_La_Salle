<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */

$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Subcategory', 'url'=>array('index')),
	array('label'=>'Create Subcategory', 'url'=>array('create')),
	array('label'=>'Update Subcategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subcategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
);
?>

<h1>View Subcategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'weight',
		'id_category',
		'id_subcategory_type',
	),
)); ?>
