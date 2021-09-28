<?php

namespace MessageHandle\src;

/**
 * Created by PhpStorm.
 * User: xinfangfang
 * Date: 2021/9/27
 * Time: 4:42 PM
 */
class InitRobotService
{
    public $message;

    public $code;

    public $country;

    public $title;

    public $url;

    public $file;

    public $line;


    public function __construct($message, $code, $country, $title, $url, $file, $line)
    {
        $this->message = $message;
        $this->code = $code;
        $this->country = $country;
        $this->title = $title;
        $this->url = $url;
        $this->file = $file;
        $this->line = $line;
    }


    public function getMessage()
    {
        return $this->message;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getLine()
    {
        return $this->line;
    }
}
