<?php // Yes it is (yii2)
require_once __DIR__. '/../vendor/yiisoft/yii2/Yii.php';

$config = require_once '../config/web.php';

$app = new yii\web\Application($config);
$app->run();