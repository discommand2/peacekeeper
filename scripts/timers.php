#!/usr/bin/env php
<?php

namespace RPurinton\Framework2;

use React\EventLoop\Loop;
use RPurinton\Framework2\Error;
use RPurinton\Framework2\Consumers\Timers;

$worker_id = $argv[1] ?? 0;

// enable all errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    require_once __DIR__ . "/../Composer.php";
    $log = LogFactory::create("timers-$worker_id") or throw new Error("failed to create log");
    set_exception_handler(function ($e) use ($log) {
        $log->debug($e->getMessage(), ["trace" => $e->getTrace()]);
        $log->error($e->getMessage());
        exit(1);
    });
} catch (\Exception $e) {
    echo ("Fatal Exception " . $e->getMessage() . "\n");
    exit(1);
} catch (\Throwable $e) {
    echo ("Fatal Throwable " . $e->getMessage() . "\n");
    exit(1);
} catch (\Error $e) {
    echo ("Fatal Error " . $e->getMessage() . "\n");
    exit(1);
}
$loop = Loop::get();

$nlc = new Timers($log, $loop) or throw new Error("failed to construct Timers");
$nlc->init() or throw new Error("failed to initialize Timers");
$loop->addSignal(SIGINT, function () use ($loop, $log) {
    $log->info("SIGINT received, exiting...");
    $loop->stop();
});
$loop->addSignal(SIGTERM, function () use ($loop, $log) {
    $log->info("SIGTERM received, exiting...");
    $loop->stop();
});