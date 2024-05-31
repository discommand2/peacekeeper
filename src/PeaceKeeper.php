<?php

namespace Discommand2\PeaceKeeper;

use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\Intents;
use Discord\WebSockets\Event;

class PeaceKeeper
{
    public function __construct(private Discord $discord)
    {
        echo "PeaceKeeper is here to keep the peace!\n";
    }

    public function run(): void
    {
        $this->discord->on(Event::READY, $this->ready(...));
        $this->discord->run();
        echo "PeaceKeeper is running!\n";
    }

    public function ready(): void
    {
        echo "PeaceKeeper is ready!\n";
    }
}
