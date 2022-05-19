<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<aside class="main-sidebar">
   

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/logo3.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
          <?php
            
          echo  '<h4>'.Yii::$app->user->identity->username.'</h4>';
          ?>
               
            </div>
        </div>

        

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu',''],
                'items' => [
                    ['label' => 'เมนูหลัก', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'ข้อมูลบัญชีผู้ใช้งาน', 'icon' => 'fa fa-users', 'url' => ['/user']],
//                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    
                    [
                        
                        'label' => 'นักศึกษา',
                        'icon' => 'fa  fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'ข้อมูลนศ.เตรียมสหกิจศึกษา', 'icon' => 'fa fa-file-code-o', 'url' => ['/doc01']],
                            ['label' => 'ตำแหน่งงานที่นศ.เลือก', 'icon' => 'fa fa-file-code-o', 'url' => ['/sub-position/index'],],
                            ['label' => 'ตำแหน่งงานที่อนุมัติแล้ว', 'icon' => 'fa fa-file-code-o', 'url' => ['/sub-position/approve'],],
                            ['label' => 'ตำแหน่งงานที่รอการอนุมัติ', 'icon' => 'fa fa-file-code-o', 'url' => ['/sub-position/unapprove'],],
                        ],
                    ],
                     
                    [
                        'label' => 'สถานประกอบการ',
                        'icon' => 'fa fa-university',
                        'url' => '#',
                        'items' => [
                            ['label' => 'เพิ่มข้อมูลสถานประกอบการ', 'icon' => 'fa fa-file-code-o', 'url' => ['/company'],],
                            ['label' => 'เพิ่มข้อมูลตำแหน่งงาน', 'icon' => 'fa fa-file-code-o', 'url' => ['/detail-position'],],
                            
                        ],
                    ],
                    
                     [
                        'label' => 'ข้อมูลระบบ',
                        'icon' => 'fa fa-database',
                        'url' => '#',
                        'items' => [
                            ['label' => 'เพิ่มคณะ', 'icon' => 'fa fa-file-code-o', 'url' => ['/faculty'],],
                            ['label' => 'เพิ่มสาขาวิชา', 'icon' => 'fa fa-file-code-o', 'url' => ['/department'],],
                            ['label' => 'เพิ่มประเภทตำแหน่งงาน', 'icon' => 'fa fa-file-code-o', 'url' => ['/title-position'],],
                          
                            
                        ],
                    ],
                       ['label' => 'สร้างรายงาน', 'icon' => 'fa fa-print', 'url' => ['/report'],],

                ],
            ]
        ) ?>

    </section>

</aside>
