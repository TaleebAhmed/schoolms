<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionStudents $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admission Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admission-students-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'admission_application_id',
            'admission_type',
            'first_name',
            'surname',
            'date_of_birth',
            'age',
            'gender',
            'any_learning_difficulties:ntext',
            'any_known_disabilities:ntext',
            'any_known_allergies:ntext',
            'medications:ntext',
            'any_medication_allergies:ntext',
            'previous_school_name',
            'school_suburb',
            'previous_class',
        ],
    ]) ?>

</div>
