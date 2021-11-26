<?php

require __DIR__.'/../vendor/autoload.php';

use Dwipaicube\HelloWorld;

$helloWorld = new HelloWorld();

echo $helloWorld->getMessage();