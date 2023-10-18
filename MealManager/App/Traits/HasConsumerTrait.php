<?php

namespace app\Traits;

trait HasConsumerTrait
{
    protected $consumer;

    public function setConsumer($name)
    {
        $this->consumer = $name;
    }
    public function getConsumer()
    {
        return $this->consumer;
    }

}