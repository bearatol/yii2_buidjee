<?php
/**
 * @var $this yii\web\View
 * @var $model
 */

use yii\helpers\Html;

$this->title                   = 'Data confirm';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
