<?php 


use yii\widgets\ListView;
use yii\data\ArrayDataProvider;
 ?>

<div class="listArticle">
<?= 
	ListView::widget([
	    'dataProvider' => $listDataProvider,
	    'itemView' => function ($model, $key, $index, $widget) {
	    		return $this->render('__item-view',['model'=>$model]);
	    },
	    'layout' => "{items}\n{pager}",
	    //'summary' => "begin: {begin} - page : {page}- pagecount: {pageCount}-totalcount : {totalCount}- count : {count}- end : {end}",
	]);
?>
</div>

