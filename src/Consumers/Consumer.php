<?php

namespace RPurinton\peacekeeper\Consumers;

use Bunny\{Channel, Message};
use React\EventLoop\LoopInterface;
use RPurinton\peacekeeper\{Log, Error};
use RPurinton\peacekeeper\RabbitMQ\Consumer as MQConsumer;

class Consumer
{
    public function __construct(private Log $log, private LoopInterface $loop, private MQConsumer $mq)
    {
        $this->log->debug("Consumer construct");
    }

    public function init(): bool
    {
        $this->log->debug("Consumer init");
        $this->mq->connect($this->loop, "peacekeeper", $this->callback(...)) or throw new Error("failed to connect to queue");
        return true;
    }

    public function callback(Message $message, Channel $channel): bool
    {
        $this->log->debug("received callback", [$message->content]);
        $channel->ack($message);
        return true;
    }
}
