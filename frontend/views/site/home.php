
  <!-- Slideshow -->
  <div class="w3-content w3-display-container slideshow w3-margin-top w3-margin-bottom bordred">
<?php 
use yii\helpers\Url;
use yii\helpers\Html;
$i=0;
foreach ($articles['data'] as $article) {
  ?>
        <div class="w3-display-container mySlides w3-animate-opacity" style="display: none;" >
          <a href="<?= Url::to(['article/view','id'=>$article['id_art']]); ?>">
            <img src="<?=  Html::encode($article['file'] )?>" style="width:100%" class="img-thumbnail w3-image" style="height: 300;min-width: 100%;">
          </a>
          <div class="divslidecaption">
            <span class=" w3-padding-large"><a href="<?= Url::to(['article/view','id'=>$article['id_art']]); ?>"><?= Html::encode($article['titre']) ?></a></span>
          </div>
        </div>
<?php 
$i++;
if($i==3)break;
}//end for each
 ?>
      <button class="w3-button w3-light-grey noselection w3-display-left" onclick="plusDivs(-1)"><b><</b></button>
      <button class="w3-button w3-light-grey noselection w3-display-right" onclick="plusDivs(+1)"><b>></b></button>

</div>
<?php if($nations['status']==true){ ?>
<div class="w3-row">
  <div class="title-cat w3-col l3 m6 s12">

    <h2 >
          Nation
    </h2>
  </div>
  <hr class="blw-title">   
</div>
<div class="w3-row-padding">
<!--     -->
  <div class="w3-col m6">
    <a href="<?= Url::to(['article/view','id'=>$nations['data'][0]['id_art']]); ?>">
        <img src="<?= Html::encode($nations['data'][0]['file']) ?>" alt="" class="w3-image">
    </a>
    
    <h3 class="title-art">
      <a href="<?= Url::to(['article/view','id'=>$nations['data'][0]['id_art']]); ?>"><?= Html::encode($nations['data'][0]['titre']) ?></a>
    </h3>
    <div class="date-art">
      <i class="glyphicon glyphicon-time"></i>
      <?= Html::encode($nations['data'][0]['date_art']) ?>
    </div>
    <p style="color: #999;font-size: 13px;">
      <?= substr(Html::encode($nations['data'][0]['contenu']),0,190)." ...." ?>
    </p>
    
  </div>
<!-- -->

  <div class="w3-col m6 s12">

  <?php for($i=0;$i<5 || $i<count($nations['data']);$i++ ){?>

    <div class="w3-row right-art">
      <div class="" style="width:25%;float:left">
          <a href="<?= Url::to(['article/view','id'=>$nations['data'][$i]['id_art']]); ?>">
            <img src="<?= Html::encode($nations['data'][$i]['file']) ?>" alt="" class="img-thumbnail">
          </a>
      </div>
      <div class="titre-date" style="width: 70%;float:left">
          <h3 class="title-art">
            <a href="<?= Url::to(['article/view','id'=>$nations['data'][$i]['id_art']]); ?>"><?= Html::encode($nations['data'][$i]['titre']) ?></a>
          </h3>
          <div class="date-art">
          <i class="glyphicon glyphicon-time"></i>
            <?= $nations['data'][$i]['date_art'] ?>
          </div>
      </div>
    </div>

    <?php } //end for?>

  </div>

</div>
<?php } ?>

<script>

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}

</script>