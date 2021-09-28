<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2018/8/2 13341007105@163.com
 * Time: 下午8:56
 */

require_once __DIR__."/../../vendor/autoload.php";
use MessageHandle\src\InitRobotService;
use InitQueue\src\InitQueueService;
use FlyBook\src\RobotSend;

$service = new InitRobotService(1,1,1,1,1,1,1);
$queue = new InitQueueService($service);
$queue->lPushMessage();
$message = new RobotSend($service);
$message->send();
echo "ok";

