<?php

include("../application/config/loadStageConfig.php");

// change the following paths if necessary
$yii = $parameters['yiiPath'].'/yii.php';

// comment out the following two lines when deployed to production
if (strcmp($stage, "prod") != 0) {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
}

defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require $parameters['yiiPath'] . '/vendor/autoload.php';
require $parameters['yiiPath'] . '/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../application/config/main.php';

(new yii\web\Application($config))->run();
