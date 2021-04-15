<?php

require_once 'vendor/autoload.php';
use UAParser\Parser;

$ua = "Mozilla/5.0 (iPhone; CPU iPhone OS 14_4_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.0.3 Mobile/15E148 Safari/604.1";

$parser = Parser::create();
$result = $parser->parse($ua);

var_dump($result);

