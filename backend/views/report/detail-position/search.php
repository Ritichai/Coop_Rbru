<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    
    $this->title = ' ';
    $this->params['breadcrumbs'][] = ['label' => 'ออกรายงาน', 'url' => ['index']];
    $this->params['breadcrumbs'][] = 'รายชื่อสถานประกอบการที่เปิดรับนักศึกษาสหกิจศึกษาทั้งหมด';

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
        <h3>รายชื่อสถานประกอบการและตำแหน่งงานที่เปิดรับ</h3>
            <a href="/report/detail-position?format=pdf" class="btn btn-success btn-right"><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;สร้างรายงาน</a>
    </div>
    <div class="box-grid-view">
        <?php 
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    [ 
                        'header' => 'ลำดับ',
                        'class' => 'yii\grid\SerialColumn',
                        'headerOptions' => ['width' => '5', 'class' => 'text-center'],
                        'contentOptions' => function () {
                            return [ 'class' => 'text-center' ];
                        }
                    ],
                    [
                        'label' => 'สถานประกอบการ',
                        'headerOptions' => [ 'width' => '20', 'class' => 'text-center' ],
                        
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->namecompany->Name_Company;
                        }
                    ],
                            
               
                           [
                        'label' => 'ชื่อตำแหน่งงาน',
                        'headerOptions' => [ 'width' => '20', 'class' => 'text-center' ],
                       
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->name_position;
                        }
                    ],   
                            
                                    [
                        'label' => 'ประเภทงาน',
                        'headerOptions' => [ 'width' => '10', 'class' => 'text-center' ],
                       
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->ttl_position->title_positioncol;
                        }
                    ],    
                    
                 
                            
                       [
                        'label' => 'เปิดรับ',
                        'headerOptions' => [ 'width' => '15','class' => 'text-center'  ],
                        
                           'contentOptions' => function () {
                            return [ 'class' => 'text-center' ];
                        },
                                
                                'content' => function($data){
                            return $data->Num_student." "."คน";
                        }
                                
                    ],

                                  [
                        'label' => 'ช่วงที่เปิดรับ',
                        'headerOptions' => ['width' => '5'],
                       
                         'content' => function($data){
                            return $data->time;
                        }  
                        
                    ],
                             
                   
                ],
                'options' => [ 'class' => 'grid-view', 'style' => 'margin: 15px;' ],
                'tableOptions' => [ 'class' => 'table table-striped table-bordered' ]
            ]); 
        ?>
</div>
    
</div>