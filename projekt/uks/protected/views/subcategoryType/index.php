<?php
/* @var $this SubcategoryTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Subcategory Types',
);

$this->menu=array(
	array('label'=>'Create SubcategoryType', 'url'=>array('create')),
	array('label'=>'Manage SubcategoryType', 'url'=>array('admin')),
);
?>

<h1>Subcategory Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
