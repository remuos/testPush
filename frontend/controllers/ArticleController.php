<?php

namespace frontend\controllers;
use frontend\models\Article;


use yii\helpers\Url;
use yii\helpers\Json;
use yii\data\Pagination;
use yii\data\ArrayDataProvider;
use Yii;

use frontend\components\ApiController;

class ArticleController extends \yii\web\Controller
{
	public $layout='main1';
	public $enableCsrfValidation = false;

    public function actionIndex($page=1)
    {

  		$jsonUrl=Yii::$app->Api->urlAddKey("http://localhost/yii/advanced2/backend/web/index.php?r=article/list-article");

    	$post = file_get_contents(str_replace(' ', '+', $jsonUrl."&page=".$page));
    	$articles = json_decode($post, true);
    	

    	if($articles['status']==true){

			        $dataProvider = new ArrayDataProvider([
			            'Models' => $articles['data'],
			            'pagination' => [
			                'pageSize' => 5,
			                'totalCount'=>$articles['info']['totalCount'],
			            ],
			            'TotalCount' =>$articles['info']['totalCount'],
			            //'keys'=>array(0,1,2,3,4),
			        ]);

			        $this->view->title = 'Articles List';

	    			return $this->render('index',[
		            'listDataProvider' => $dataProvider,
		        ]);

	    	}else{
	    		return $this->render('index-0',['articles' => $articles]);
	    	}
    }


    public function actionView($id){

    	$jsonUrl=Yii::$app->Api->urlAddKey("http://localhost/yii/advanced2/backend/web/index.php?r=article/list-article-by-id");

    	$post = file_get_contents(str_replace(' ', '+',$jsonUrl."&id=".$id));
    	$article= json_decode($post, true);


	    	if($article['status']==true){
	    			return $this->render('view',[
		            'article' => $article,
		        ]);

	    	}else{
	    		return $this->render('view-0',['article' => $article,]);
	    	}
    }

    public function actionArticlesByCategorie($page=1,$cat)
    {
    	$jsonUrl=Yii::$app->Api->urlAddKey("http://localhost/yii/advanced2/backend/web/index.php?r=article/list-article-by-categorie");

    	$post = file_get_contents(str_replace(' ','+',$jsonUrl."&cat=".$cat."&page=".$page.""));

    	$articles = json_decode($post, true);

    	$url = Url::to(['article/articles-by-categorie','cat'=>$cat]) ;

	    	if($articles['status']==true){

	    			$dataProvider = new ArrayDataProvider([
			            'Models' => $articles['data'],
			            'pagination' => [
			                'pageSize' => 5,
			                'totalCount'=>$articles['info']['totalCount'],
			            ],
			            'TotalCount' =>$articles['info']['totalCount'],
			            //'keys'=>array(0,1,2,3,4),
			        ]);

			        $this->view->title = $cat .'-List';

	    			return $this->render('index',[
		            'listDataProvider' => $dataProvider,
		        ]);

	    	}else{
	    		return $this->render('index-0',['articles' => $articles]);
	    	}
    }




/*public function actionList()
    {

    	$jsonUrl=Yii::$app->Api->urlAddKey("http://localhost/yii/advanced2/backend/web/index.php?r=article/list-article");
    	
    	if(isset($_GET['page']) && $_GET['page']>1){
    		$page=$_GET['page'];
    	}else{
    		$page=1;
    	}

    	$post = file_get_contents(str_replace(' ', '+', $jsonUrl."&page=$page"));

    	$articles = json_decode($post, true);
    	//if()
        $dataProvider = new ArrayDataProvider([
            'Models' => $articles['data'],
            'pagination' => [
                'pageSize' => 5,
                'totalCount'=>$articles['info']['totalCount'],
            ],
            //'TotalCount' =>$articles['info']['totalCount'],
            'keys'=>array(0,1,2,3,4),
        ]);

        $this->view->title = 'Posts List';
        return $this->render('list', ['listDataProvider' => $dataProvider]);
    }*/







}
