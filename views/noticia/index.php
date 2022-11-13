<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Noticias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codNoticia',
            'titular',
            'entradilla:ntext',
            'contenido:ntext',
            array (
                'attribute' => 'Imagen',
                'format'=>'image',
                'value'=> function($data){return $data->imageurl;},

                ),
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action,  $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'codNoticia' => $model->codNoticia]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
