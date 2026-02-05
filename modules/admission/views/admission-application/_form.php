<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionApplication $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="admission-application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'father_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_mobile')->textInput() ?>

    <?= $form->field($model, 'father_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother_mobile')->textInput() ?>

    <?= $form->field($model, 'mother_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emergency_contact_number')->textInput() ?>

    <?= $form->field($model, 'relationship_to_student')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'policies')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
