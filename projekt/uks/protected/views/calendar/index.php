<?php
/* @var $this CalendarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terminarz',
);

$this->menu=array(
	array('label'=>'Utwórz wydarzenie', 'url'=>array('create')),
	array('label'=>'Zarządzaj wydarzeniem', 'url'=>array('admin')),
);
?>

<h1>Terminarz</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
