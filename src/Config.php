<?php

namespace Discommand2\PeaceKeeper;

use Exception;

class Config
{
    public static function get(string $file): mixed
    {
        $config = json_decode(file_get_contents(__DIR__ . "/../config/$file.json"), true);
        if (!$config) throw new Exception("Failed to load config file: $file.json");
        return $config;
    }

    public static function set(string $file, array $data): void
    {
        file_put_contents(__DIR__ . "/../config/$file.json", json_encode($data, JSON_PRETTY_PRINT));
    }
}
