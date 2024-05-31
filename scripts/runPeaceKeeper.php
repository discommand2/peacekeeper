#!/usr/bin/env php
<?php

namespace Discommand2\PeaceKeeper;

use Discord\Discord;

require_once __DIR__ . '/../vendor/autoload.php';

(new PeaceKeeper(new Discord(Config::get('discord'))))->run();

