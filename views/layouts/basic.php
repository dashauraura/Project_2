<?php

use app\assets\AppAsset;

use yii\helpers\html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

    <div class="wrap">
      <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation" class="active"><?= Html::a('Главная страница', '/web/')?></li>
            <li role="presentation"><?= html::a('Статьи', ['post/index'])?></li>
            <li role="presentation"><?= html::a('Статья', 'post/show')?></li>
        </ul>

        <?= $content ?>

      </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>