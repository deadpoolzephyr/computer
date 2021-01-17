<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\computer\models\Computer */

$this->title = 'Update Computer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Computers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="computer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
