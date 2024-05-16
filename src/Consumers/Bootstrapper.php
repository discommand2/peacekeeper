<?php

namespace RPurinton\peacekeeper\Consumers;

use RPurinton\peacekeeper\{Log, Error};

class Bootstrapper
{
    public function __construct(private Log $log)
    {
        $this->log->debug("Bootstrapper construct");
    }

    public function init(): bool
    {
        $this->log->debug("Bootstrapper init");
        return true;
    }
}
