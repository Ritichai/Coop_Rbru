<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'COOP RBRU',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        


    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'ลงทะเบียน', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']];
        
    } else {
        
           $menuItems = [
            ['label' => 'รายการเอกสาร', 'url' => ['#'], 'items' => [
            ['label' => 'แบบแจ้งรายละเอียดการเข้าปฏิบัติสหกิจศึกษา เอกสารสหกิจ 01', 'url' => ['/doc01/create']],
            //  ['label' => 'รายละเอียดสถานประกอบการ เอกสารสหกิจ 02', 'url' => ['/sub-company/create']],
               ]],
               
            ['label' => 'จัดการเอกสาร', 'url' => ['#'], 'items' => [
            ['label' => 'จัดการเอกสาร เอกสารสหกิจ 01', 'url' => ['/doc01']], 
            // ['label' => 'จัดการเอกสาร เอกสารสหกิจ 02', 'url' => ['/sub-company']], 
            ]],    
               
        
        //  ['label' => 'รายละเอียดและตำแหน่งงาน', 'url' => ['/detail-position']],
               
               
            ['label' => 'ตำแหน่งงาน', 'url' => ['#'], 'items' => [
            ['label' => 'เลือกตำแหน่งงาน', 'url' => ['/detail-position']], 
            ['label' => 'ตำแหน่งงานที่รอการอนุมัติ', 'url' => ['/sub-position/index']],
            ['label' => 'ตำแหน่งงานที่ได้รับการอนุมัติ', 'url' => ['/sub-position/approve']], 
            ]], 
               
                 ['label' => 'สถานประกอบการที่เปิดนักศึกษาสหกิจศึกษา', 'url' => ['/company']],
          

    ];
           $menuItems[] = [
'label' => 'บัญชีผู้ใช้ (' . Yii::$app->user->identity->username . ')',
              
'items'=>[
    
    ['label' => 'เปลียนรหัสผ่าน','url' => ['/user'],'linkOptions' => ['data-method' => 'post']],
    ['label' => 'ออกจากระบบ','url' => ['/site/logout'],'linkOptions' => ['data-method' => 'post']]
]
];
           
           
      
    }
    
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Cooperative  Education  &  Career  Development Center </p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
