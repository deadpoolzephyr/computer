<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\computer\models\Computer */

$this->title = 'Create Computer';
$this->params['breadcrumbs'][] = ['label' => 'Computers & Computer Components', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
