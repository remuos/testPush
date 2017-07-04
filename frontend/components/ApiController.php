<?php 
namespace frontend\components;
 
 
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class ApiController extends Component{

	//public  $KEY_TOKEN = Yii::$app->params['keyToken'];

	public function urlAddKey($url){

		return $url."&key=".Yii::$app->params['keyToken'];

	}

	/*public function getKey(){
		return $this->$key ;
	}*/


}

 ?>