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
));

/*
$data = array();
foreach($model as $m){  
$data[] = $m->attributes;
}

// widgetem mozna zmieniac strony ajaxowo
$this->widget('zii.widgets.CsView', array(
    'dataProvider'=>$dataProvider,
    'enablePagination'=>true,
    'itemView'=>'_view',
));

*/
?>
