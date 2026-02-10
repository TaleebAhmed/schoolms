<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionApplication $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Admission Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="admission-application-view">

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
            'father_first_name',
            'father_surname',
            'father_mobile',
            'father_email:email',
            'mother_first_name',
            'mother_surname',
            'mother_mobile',
            'mother_email:email',
            'emergency_contact_name',
            'emergency_contact_number',
            'relationship_to_student',
            [
    'attribute' => 'policies',
    'format' => 'raw',
    'value' => function ($model) {
        if (empty($model->policies)) {
            return '-';
        }

        $policies = is_array($model->policies)
            ? $model->policies
            : json_decode($model->policies, true);

        return '<ul><li>' . implode('</li><li>', $policies) . '</li></ul>';
    },
],

        ],
    ]) ?>

</div>
