<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    
    $this->title = ' ';
    $this->params['breadcrumbs'][] = ['label' => 'ออกรายงาน', 'url' => ['index']];
    $this->params['breadcrumbs'][] = 'รายชื่อสถานประกอบการทั้งหมด';

?>

<style>
    .box-header { padding: 0 10px 10px 15px; }
    .btn-right { position:absolute;right:15px;top:15px;float:right; }
    .box-grid-view { padding:0 5px 10px 5px; }
    .summary { padding-bottom: 15px; }
</style>


    <?php echo $this->render('_form', [ 'model' => $model, 'search' => $search ]); ?>


<div class="box box-default">
    <div class="box-header with-border">
        <h3>รายชื่อสถานประกอบทั้งหมด</h3>
        <a href="/report/company-name?format=pdf" class="btn btn-success btn-right"><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;สร้างรายงาน</a>
    </div>
    <div class="box-grid-view">
        <?php 
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [ 
                        'header' => 'ลำดับ',    
                        'class' => 'yii\grid\SerialColumn',
                        'headerOptions' => [ 'width' => '80', 'class' => 'text-center' ],
                        'contentOptions' => function () {
                            return [ 'class' => 'text-center' ];
                        }
                    ],
                    
                    [
                        'label' => 'ชื่อสถานประกอบการ',
                        
                        'content' => function($data){
                            return $data->Name_Company;
                        }
                    ],
                 
                ],
                'options' => [ 'class' => 'grid-view', 'style' => 'margin: 15px;' ],
                'tableOptions' => [ 'class' => 'table table-striped table-bordered' ]
            ]); 
        ?>
</div>
    
</div>