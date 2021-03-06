<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">@</span><span class="logo-lg">' . "Welcome Admin" . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/logo.jpg" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">( Logout ) <?php echo Yii::$app->user->identity->username;?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/img/logo.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <?php echo Yii::$app->user->identity->username;?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            
                            <div>
                                <?= Html::a(
                                    'ออกจากระบบ',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default col-md-12 ']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>

                
            </ul>
        </div>
    </nav>
</header>
