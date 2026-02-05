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

    <?= $form->field($model, 'policies')->checkboxList([
    'trips' => 'I consent for my child/children to go on supervised excursion/trips outside school and indemnify school of all liabilities.',
    'photos' => 'I agree to permit the school to take photographs of my child/children and to publish the photographs/work of child on different occasions such as school newsletter, school website etc.',
    'use info' => 'I agree to permit the school to use the provided information about my child/children for the purpose of applying for and monitoring funding under the NSW Community Languages Schools Program',
    'fee' => 'I agree to pay term fees during the first two weeks of the Term.',
    'term fee' => 'I agree to pay term fees regardless of however many classes my child(/ren) attend or is/are absent from.',
    'volunteer' => 'I agree to volunteer for school events and activities.',
    'punctuality' => 'I agree to ensure my child/children arrive on time for all classes and school events.',
    'najis' => 'I agree that I am responsible to ensure that the child is not najis while at the school. If the child needs assistance to use the toilet I will be available to help my child.. Although it might be part of the curriculum it is not the school duty to ensure your child follows Islamic toilet manners.',
    'dress code' => 'I agree that the child shall always attend the school in the proper Islamic Dress Code (long sleeves and long pants for all children above 9 years, hijab for all girls).',
    'look after' => 'I agree and understand that I shall look after the child after classes.',
    'tech gadgets' => 'I understand that if the child is found to be using/displaying video games, consoles, iPods, mobile phones or similar devices during the school hours the devices might be confiscated and may not be returned.',
    'confess' => 'I state that all the details provided on this form are correct.',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
