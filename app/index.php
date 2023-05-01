<?php

require './vendor/autoload.php';

use JumasCola\K8sPhp\Classes\GetHelloService;

$getHelloService = new GetHelloService();
$helloString = $getHelloService->getHelloString();


echo "<h1>{$helloString}</h1>";
