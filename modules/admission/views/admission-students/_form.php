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

    <?= $form->field($model, 'admission_type')->dropDownList([
    'New admission' => 'New admission',
    'Returning student' => 'Returning student'
], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date', 'format' => 'dd-mm-yyyy']) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([
    'Male' => 'Male',
    'Female' => 'Female'
], ['prompt' => 'Select']) ?>

    <?= $form->field($model, 'any_learning_difficulties')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'any_known_disabilities')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'any_known_allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medications')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'any_medication_allergies')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'previous_school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_suburb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'previous_class')->textInput(['maxlength' => true]) ?>

<hr>

<h4>Add another child?</h4>

<label>
    <input type="radio" name="add_another" value="yes"> Yes
</label>

<label style="margin-left:20px;">
    <input type="radio" name="add_another" value="no" checked> No
</label>

<br><br>

    <div class="form-group">
        <?= Html::submitButton('Submit Student', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
