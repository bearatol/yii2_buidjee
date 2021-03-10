<?php
/**
 * @var $this yii\web\View
 * @var $model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title                   = 'Form';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Ваше имя') ?>

    <?= $form->field($model, 'email')->label('Ваш Email') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>