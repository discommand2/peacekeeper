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

    public function run()
    {
        echo "PeaceKeeper is running!\n";
    }
}
