<?php

$start_time = microtime(3);
$start_memory = memory_get_usage();


// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();

echo '<br>';
$end_memory = memory_get_usage();
echo $end_memory - $start_memory;
echo '<br>';
$end_time = microtime(3);
echo $time = $end_time-$start_time;
