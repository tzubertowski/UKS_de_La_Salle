<?php
/* @var $this CalendarController */
/* @var $model Calendar */

$this->breadcrumbs=array(
	'Wydarzenia'=>array('index'),
	'Zarządzaj',
);

$this->menu=array(
	array('label'=>'Lista wydarzeń', 'url'=>array('index')),
	array('label'=>'Utwórz wydarzenie', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#calendar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Calendars</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'calendar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_user',
		'id_category',
		'title',
		'description',
                'place',
		'date_start',
		'date_end',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
