<?php

namespace Discommand2\PeaceKeeper;

use Discord\Discord;
use Discord\WebSockets\Event;
use stdClass;

class PeaceKeeper
{
    public function __construct(private Discord $discord)
    {
        echo "PeaceKeeper is here to keep the peace!\n";
    }

    public function run(): void
    {
        $this->discord->on(Event::READY, $this->event_ready(...));
        $this->discord->on(Event::VOICE_STATE_UPDATE, $this->voice_state_update(...));
        $this->discord->run();
        echo "PeaceKeeper is running!\n";
    }

    public function event_ready(): void
    {
        echo "PeaceKeeper is ready!\n";
    }

    public function voice_state_update(stdClass $message): void
    {
        print_r($message);
    }
    
}
