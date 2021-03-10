<?php


namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\BuidjeeTasks;
use yii\data\Pagination;

/**
 * Class BuidjeeeController
 * @package app\controllers
 */
class BuidjeeeController extends Controller
{
    public $layout = 'buidjee_layouts';

    public function actionIndex()
    {


        if ($_GET['sort']) {
            $tasks = BuidjeeTasks::find()->orderBy($_GET['sort'])->asArray()->all();
        } else {
            $tasks = BuidjeeTasks::find()->asArray()->all();
        }

        $query = BuidjeeTasks::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        if ($_GET['sort']) {
            $list = $query->asArray()
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->orderBy($_GET['sort'])
                ->all();
        } else {
            $list = $query->asArray()
                ->offset($pages->offset)
                ->limit($pages->limit)
                ->all();
        }


        return $this->render('index', compact('list', 'pages'));
    }
}