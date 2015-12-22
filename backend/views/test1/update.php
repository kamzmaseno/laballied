<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Test1 */

$this->title = 'Update Test1: ' . ' ' . $model->age;
$this->params['breadcrumbs'][] = ['label' => 'Test1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->age, 'url' => ['view', 'id' => $model->age]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
