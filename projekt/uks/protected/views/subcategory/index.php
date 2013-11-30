<?php
/* @var $this SubcategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subcategories',
);

$this->menu=array(
	array('label'=>'Create Subcategory', 'url'=>array('create')),
	array('label'=>'Manage Subcategory', 'url'=>array('admin')),
);
?>

<h1>Subcategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
