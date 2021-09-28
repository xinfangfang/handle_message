<?php

namespace InitQueue\src;

/**
 * Created by PhpStorm.
 * User: xinfangfang
 * Date: 2021/9/27
 * Time: 5:27 PM
 */

use Phalcon\Di\Injectable;
use MessageHandle\src\InitRobotService;

class InitQueueService extends Injectable
{
    public $queue = 'jms_default';
    public $redis;
    public $initRobotService;
    const REDIS = 'redis';

    public function __construct(InitRobotService $initRobotService)
    {
        $this->redis = $this->getDI()->get(self::REDIS);
        $this->initRobotService = $initRobotService;
    }

    /**
     * push the message
     */
    public function lPushMessage()
    {
        $this->redis->lpush($this->queue, $this->initRobotService->getMessage());
    }


    /**
     * pop the message
     *
     * @return mixed
     */
    public function lPopMessage()
    {
        return $this->redis->lpop($this->queue);
    }
}