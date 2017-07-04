
<?php 
use yii\helpers\Html ;
use yii\helpers\HtmlPurifier;

$artcl = $article['data'];

?>

<article class="artcl">
	<h2 class="w3-xxlarge w3-serif" ><?=  Html::encode($artcl['titre']) ?></h2>
	<hr>
		<span><?=  Html::encode($artcl['date_art']) ?></span> | 
			<span class="fa fa-eye"></span> 
			<span id="nbrviews"></span>
	<hr>
	<img src=" <?= $artcl['file'] ?> " class="w3-round" alt="Norway">
	<div class="content">
		<p>
			<?= HtmlPurifier::process($artcl['contenu']) ?>
		</p>
	</div>
</article>

<?php

$id=$artcl['id_art'];

$script = <<< JS

  
  $.get("http://localhost/yii/advanced2/backend/web/index.php?r=article/count-article", { id: $id },'json').done(function( data ) {
		$("#nbrviews").fadeIn().html(data.info.count_views);
		});
JS;
$this->registerJs($script)

 ?>
