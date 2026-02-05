<?php

use app\modules\admission\models\AdmissionApplication;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionApplicationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Admission Applications';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-application-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Admission Application', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'father_first_name',
            'father_surname',
            'father_mobile',
            'father_email:email',
            //'mother_first_name',
            //'mother_surname',
            //'mother_mobile',
            //'mother_email:email',
            //'emergency_contact_name',
            //'emergency_contact_number',
            //'relationship_to_student',
            //'policies:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AdmissionApplication $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
