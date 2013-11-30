<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */

$this->breadcrumbs=array(
	'Subcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subcategory', 'url'=>array('index')),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
);
?>

<h1>Create Subcategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>