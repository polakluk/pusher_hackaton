<?php

require("vendor/autoload.php");

$f3 = \Base::instance();

$f3->set('AUTOLOAD', 
        __dir__.'/apps/;'
        );

$api = new \Api\Rest($f3);
$api->InitializeParts();

$f3->route('GET /', function() {echo 'root';});
$f3->route('GET /test', function() {echo 'asdf';});

$f3->run();
