<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionApplicationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admission-application-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'father_first_name') ?>

    <?= $form->field($model, 'father_surname') ?>

    <?= $form->field($model, 'father_mobile') ?>

    <?= $form->field($model, 'father_email') ?>

    <?php // echo $form->field($model, 'mother_first_name') ?>

    <?php // echo $form->field($model, 'mother_surname') ?>

    <?php // echo $form->field($model, 'mother_mobile') ?>

    <?php // echo $form->field($model, 'mother_email') ?>

    <?php // echo $form->field($model, 'emergency_contact_name') ?>

    <?php // echo $form->field($model, 'emergency_contact_number') ?>

    <?php // echo $form->field($model, 'relationship_to_student') ?>

    <?php // echo $form->field($model, 'policies') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
