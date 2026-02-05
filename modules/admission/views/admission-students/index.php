<?php

use app\modules\admission\models\AdmissionStudents;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\modules\admission\models\AdmissionStudentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Admission Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admission-students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Admission Students', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'admission_application_id',
            'admission_type',
            'first_name',
            'surname',
            //'date_of_birth',
            //'age',
            //'gender',
            //'any_learning_difficulties:ntext',
            //'any_known_disabilities:ntext',
            //'any_known_allergies:ntext',
            //'medications:ntext',
            //'any_medication_allergies:ntext',
            //'previous_school_name',
            //'school_suburb',
            //'previous_class',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AdmissionStudents $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
