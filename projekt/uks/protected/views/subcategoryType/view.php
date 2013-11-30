<?php
/* @var $this SubcategoryTypeController */
/* @var $model SubcategoryType */

$this->breadcrumbs=array(
	'Subcategory Types'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List SubcategoryType', 'url'=>array('index')),
	array('label'=>'Create SubcategoryType', 'url'=>array('create')),
	array('label'=>'Update SubcategoryType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubcategoryType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubcategoryType', 'url'=>array('admin')),
);
?>

<h1>View SubcategoryType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
	),
)); ?>
