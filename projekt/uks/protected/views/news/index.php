<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>News</h1>


<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items}\n{pager}",
    'attributes'=>array(
    'title',
    'content',
    'date_added',
  ),
));

/*
$data = array();
foreach($model as $m){  // loop to get the data (this is different from the complex way)
$data[] = $m->attributes;
}
// the pagination widget with some options to mess
$this->widget('zii.widgets.CsView', array(
    'dataProvider'=>$dataProvider,
    'enablePagination'=>true,
    'itemView'=>'_view',
));

*/
?>
