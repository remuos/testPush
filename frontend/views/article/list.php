<?php 
/*
use yii\widgets\ListView;

use yii\data\ArrayDataProvider;
use yii\helpers\Url;

use yii\helpers\Html ;

 ?>

<?= 
ListView::widget([
    'dataProvider' => $listDataProvider,
    'itemView' => function ($model, $key, $index, $widget) {

         ?> <div class="items">
		<div class="item-topic w3-row">
			<a href="<?= Url::to(['article/view','id'=>$model['id_art']]); ?>" class="w3-col m3 l3">
				<img  alt="" src=" <?=  Html::encode($model['file'] )?> " class="img-thumbnail">
			</a>
			<div class="item-info w3-col m9 l9 w3-bordred">
				<!-- <h4>
					<a href="http://lematin.ma/journal/2017/un-refrigerateur-a-lorigine-de-lincendie-de-la-tour-grenfell/274071.html">Royaume-Uni</a>
				</h4 >-->
				<h3>
					<a href="<?= Url::to(['article/view','id'=>$model['id_art']]); ?>">
						<?= Html::encode($model['titre']) ?>
							
					</a>
				</h3>
				<div class="text-danger sub-info-bordered">
					<div class="time">
						<span class="ion-ios-clock-outline"></span> <?= Html::encode($model['date_art']) ?> 
					</div>
				 
				</div>
				<p><?php 
					$contenu=Html::encode($model['contenu']);
				if(strlen($contenu)>151){ echo substr($contenu,0,150).' ....'; }else{ echo $contenu; }?></p>
				<button class="w3-btn w3-white w3-border w3-right"><a href="<?= Url::to(['article/view','id'=>$model['id_art']]); ?>">Lire la suite</a></button>
			</div>
				
		</div>
	</div>
	<?php 
    },
]);*/
?>