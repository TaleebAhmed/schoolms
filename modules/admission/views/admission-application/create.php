<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionApplication $model */

$this->title = 'Create Admission Application';
$this->params['breadcrumbs'][] = ['label' => 'Admission Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-application-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        //'students' => $students,
    ]) ?>

</div>
