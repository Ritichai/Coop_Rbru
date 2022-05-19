<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SubCompanySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'สถานประกอบการที่นักศึกษาเลือก');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-company-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                   
            'doc01.Fname_th',
            'doc01.Lname_th',
            'doc01.facultyIdFaculty.name_faculty',
            
         
                                    [
    'attribute'=> 'namecompany.Name_Company',
    'value'=>'namecompany.Name_Company',
    'filter'=> yii\bootstrap\Html::activeDropDownList($searchModel,'ID_Company',
 yii\helpers\ArrayHelper::map(common\models\Company::find()->asArray()->all(),'ID_Company','Name_Company'),
        ['class'=>'form-control','prompt'=>'เลือกสถานประกอบการ']),

],
         

            
        ],
    ]); ?>
</div>
