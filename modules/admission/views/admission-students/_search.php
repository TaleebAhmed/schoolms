<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionStudentsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admission-students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'admission_application_id') ?>

    <?= $form->field($model, 'admission_type') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'surname') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'any_learning_difficulties') ?>

    <?php // echo $form->field($model, 'any_known_disabilities') ?>

    <?php // echo $form->field($model, 'any_known_allergies') ?>

    <?php // echo $form->field($model, 'medications') ?>

    <?php // echo $form->field($model, 'any_medication_allergies') ?>

    <?php // echo $form->field($model, 'previous_school_name') ?>

    <?php // echo $form->field($model, 'school_suburb') ?>

    <?php // echo $form->field($model, 'previous_class') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
