<?php

    use yii\helpers\Html;
    use yii\grid\GridView;
    
    $this->title = ' ';
    $this->params['breadcrumbs'][] = ['label' => 'ออกรายงาน', 'url' => ['index']];
    $this->params['breadcrumbs'][] = 'รายละเอียดตำแหน่งงานนักศึกษาเลือก';

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
        <h3>รายละเอียดตำแหน่งงานที่นักศึกษาเลือก และรอการอนุมัติ</h3>
        <a href="/report/sub-position?format=pdf" class="btn btn-success btn-right"><i class="glyphicon glyphicon-print"></i>&nbsp;&nbsp;สร้างรายงาน</a>
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
                        'headerOptions' => [ 'width' => '20', 'class' => 'text-center' ],
                        'attribute' => 'created_bys',
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->user->Fname_th.' '.$data->user->Lname_th;
                        }
                    ],
                            
                                  [
                        'label' => 'คณะ',
                        'headerOptions' => [ 'width' => '20', 'class' => 'text-center' ],
                        'attribute' => 'created_bys',
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->detailposition->fac->name_faculty;
                        }
                    ],
                                
                   [
                        'label' => 'สถานประกอบการ',
                        'headerOptions' => [ 'width' => '10' ],                      
                           'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },                               
                                'content' => function($data){
                            return $data->detailposition->namecompany->Name_Company;
                        }
                                
                    ],

                                  [
                        'label' => 'ประเภทงาน',
                        'headerOptions' => [ 'width' => '20', 'class' => 'text-center' ],
                        'attribute' => 'ID_ttl_positions',
                        'contentOptions' => function () {
                            return [ 'class' => 'text-left' ];
                        },
                        'content' => function($data){
                            return $data->detailposition->name_position;
                        }
                    ],
                    

                   [
                        'label' => 'ช่วงที่เปิดรับ',
                        'headerOptions' => ['width' => '5'],
                        'content' => function($data){
                            return $data->created_at;
                        }
                    ],

                   [
                        'label' => 'สถานะ',
                        'headerOptions' => ['width' => '5'],
                      
                       'content' => function($data){
                            return $data->status;
                        }

                    ],
                             
                   
                ],
                'options' => [ 'class' => 'grid-view', 'style' => 'margin: 15px;' ],
                'tableOptions' => [ 'class' => 'table table-striped table-bordered' ]
            ]); 
        ?>
</div>
    
</div>