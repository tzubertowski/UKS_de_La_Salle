<?php
/* @var $this SubcategoryTypeController */
/* @var $model SubcategoryType */

$this->breadcrumbs=array(
	'Subcategory Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubcategoryType', 'url'=>array('index')),
	array('label'=>'Manage SubcategoryType', 'url'=>array('admin')),
);
?>

<h1>Create SubcategoryType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>