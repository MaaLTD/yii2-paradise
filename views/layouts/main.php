<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php $this->head(); ?>
    <title>Learn "Yes It Is" (yii2) framework</title>
</head>
<body>
<?php $this->beginBody(); ?>
    <?php
        use yii\bootstrap\NavBar;
        use yii\bootstrap\Nav;

        NavBar::begin([
            'brandLabel'    => 'MaaLTD',
            // 'barndUrl'      => Yii::$app->homeUrl,
            'options'       =>
            [
                'class' => 'navbar-default navbar-fixed-top'
            ]
        ]);

        NavBar::end();
    ?>
    <!-- Создать в корне папку assets -->
    <div class="container" style="margin-top: 60px">
        <?= $content;?>
    </div>

<?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>