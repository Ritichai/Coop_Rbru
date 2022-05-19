<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    
    $this->title = 'ค้นหาสถานประกอบการที่นักศึกษาเลือก';
    $this->params['breadcrumbs'][] = ['label' => 'ออกรายงาน', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;

?>

<style>
    .box-header { padding: 0 10px 10px 15px; }
    .btn-right { position:absolute;right:15px;top:15px;float:right; }
    .box-grid-view { padding:0 5px 10px 5px; }
    .summary { padding-bottom: 15px; }
</style>

<div class="box box-success">
    <div class="box-header with-border">
        
    </div>
    <?php echo $this->render('_form', [ 'model' => $model, 'search' => $search ]); ?>
</div>

<div class="box box-success">
    <div class="box-header with-border">
        <h3>ลายละเอียดสถานประกอบการ</h3>
        <a href="/report/sub-company?format=pdf" class="btn btn-success btn-right"><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;ออกรายงาน (PDF)</a>
    </div>
    <div class="box-grid-view">
        <?php 
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [ 
                        'header' => 'ลำดับ',
                        'class' => 'yii\grid\SerialColumn',
                        'headerOptions' => ['width' => '10', 'class' => 'text-center'],
                        'contentOptions' => function () {
                            return [ 'class' => 'text-center' ];
                        }
                    ],
                            
                            
                                  [
                        'label' => 'ชื่อ',
                        'headerOptions' => [ 'width' => '100'],
                        'attribute' => 'created_by',
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->doc01->Fname_th.' '.$data->doc01->Lname_th;
                        }
                    ],
                            
                            
                    [
                        'label' => 'ชื่อสถานประกอบการ',
                        'headerOptions' => [ 'width' => '100'],
                        'attribute' => 'ID_Company',
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->namecompany->Name_Company;
                        }
                    ],
                            
                            
                   
                            
               [
                        'label' => 'ช่วงที่เปิดรับ',
                        'headerOptions' => ['width' => '5'],
                        'attribute' => 'created_at',
                           
                        
                    ],
                             
                      
                       
                    
                   
                             
                   
                ],
                'options' => [ 'class' => 'grid-view', 'style' => 'margin: 15px;' ],
                'tableOptions' => [ 'class' => 'table table-striped table-bordered' ]
            ]); 
        ?>
</div>
    
</div>