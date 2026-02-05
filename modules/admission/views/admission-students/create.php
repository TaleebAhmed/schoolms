<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionStudents $model */

$this->title = 'Create Admission Students';
$this->params['breadcrumbs'][] = ['label' => 'Admission Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-students-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
