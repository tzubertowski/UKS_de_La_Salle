<?php
/* @var $this SubcategoryTypeController */
/* @var $model SubcategoryType */

$this->breadcrumbs=array(
	'Subcategory Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubcategoryType', 'url'=>array('index')),
	array('label'=>'Create SubcategoryType', 'url'=>array('create')),
	array('label'=>'View SubcategoryType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubcategoryType', 'url'=>array('admin')),
);
?>

<h1>Update SubcategoryType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>