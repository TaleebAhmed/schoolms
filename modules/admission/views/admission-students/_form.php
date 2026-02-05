<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionStudents $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admission-students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'admission_application_id')->textInput() ?>

    <?= $form->field($model, 'admission_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'any_learning_difficulties')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'any_known_disabilities')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'any_known_allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medications')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'any_medication_allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'previous_school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_suburb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previous_class')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
