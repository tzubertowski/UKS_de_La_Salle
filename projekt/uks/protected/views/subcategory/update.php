<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */

$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subcategory', 'url'=>array('index')),
	array('label'=>'Create Subcategory', 'url'=>array('create')),
	array('label'=>'View Subcategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
);
?>

<h1>Update Subcategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>