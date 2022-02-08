<?php

require_once dirname(__FILE__) . '/classes/Fibonacci.php';
require_once dirname(__FILE__) . '/classes/Request.php';

use Input\Request;
use Math\Fibonacci;

$number    = new Request();
$fibonacci = new Fibonacci();

echo $fibonacci->getElementByNumber($number->get());
