<?php

/**
 * @var $this yii\web\View
 * @var string $message
 */

use yii\helpers\Html;

$this->title = 'Test';
$this->params['breadcrumbs'][] = $this->title;
?>

<?= Html::encode($message) ?>
