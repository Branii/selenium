<?php 
require 'vendor/autoload.php';
use Revolt\EventLoop;
EventLoop::repeat(1, function () : void {
    echo date("s") . PHP_EOL;
});
EventLoop::run();

// echo "... starting ";
// $driver = Core::startDriver();
// $result = (new Lottery)->getChineseLotteryDraws($driver);
// echo $result;