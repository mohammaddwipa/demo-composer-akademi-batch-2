<?php

require __DIR__.'/../vendor/autoload.php';

use dwipaicube\HelloWorld;

$helloWorld = new HelloWorld();

echo $helloWorld->getMessage();
