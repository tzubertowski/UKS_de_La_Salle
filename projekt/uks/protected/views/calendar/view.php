<?php
/* @var $this CalendarController */
/* @var $model Calendar */

$this->breadcrumbs=array(
	'Terminarz'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Lista wydarzeń', 'url'=>array('index')),
	array('label'=>'Utwórz wydarzenie', 'url'=>array('create')),
	array('label'=>'Aktualizuj wydarzenie', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Usuń wydarzenie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Zarządzaj wydarzeniem', 'url'=>array('admin')),
);
?>

<h1>Wydarzenie #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_category',
		'title',
		'description',
                'place',
		'date_start',
		'date_end',
	),
)); ?>
