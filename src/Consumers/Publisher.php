<?php

namespace RPurinton\peacekeeper\Consumers;

use RPurinton\peacekeeper\{Log, Error};
use RPurinton\peacekeeper\RabbitMQ\Publisher as MQPublisher;

class Publisher
{

    private ?MQPublisher $pub = null;

    public function __construct(private Log $log)
    {
        $this->log->debug("Publisher construct");
    }

    public function init(): bool
    {
        $this->log->debug("Publisher init");
        if (!$this->pub) $this->pub = new MQPublisher() or throw new Error("failed to create Publisher");
        return true;
    }
}
