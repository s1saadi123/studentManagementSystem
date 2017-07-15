<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAssets;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LoginAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
      <?php $this->head() ?>
  </head>
  <body class="login-page">
<?php $this->beginBody() ?>
<div class="wrap">
  <div class="container">
        <?= $content ?>
  </div>
</div>

<footer class="footer">
    <div class="container">
      
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
