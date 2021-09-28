<?php
/**
 * Created by PhpStorm.
 * User: xinfangfang
 * Date: 2021/9/27
 * Time: 5:12 PM
 */

namespace FlyBook\src;

use InitQueue\src\InitQueueService;
use MessageHandle\src\InitRobotService;

class RobotSend
{
    public $content;

    public $initQueueService;

    public $initRobotService;


    public function __construct(InitRobotService $initRobotService)
    {
        $this->initRobotService = $initRobotService;
    }

    public function send()
    {
        $service = new InitQueueService($this->initRobotService);

        return $service->lPopMessage();
    }
}