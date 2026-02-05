<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionApplication $model */

$this->title = 'Update Admission Application: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admission Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admission-application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
