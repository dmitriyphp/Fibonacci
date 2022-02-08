<?php

require_once dirname(__FILE__) . '/../classes/Fibonacci.php';
use Math\Fibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase {

    /**
     * @var Fibonacci
     */
    private $fibo;

    public function __construct()
    {
        parent::__construct();
        $this->fibo = new Fibonacci();
    }

    public function test_get_2_number_of_fibonacci() {
        $this->assertSame(1, $this->fibo->getElementByNumber(2));
    }

    public function test_get_6_number_of_fibonacci() {
        $this->assertSame(8, $this->fibo->getElementByNumber(6));
    }

    public function test_get_0_number_of_fibonacci() {
        $this->assertSame('Invalid number passed: 0', $this->fibo->getElementByNumber(0));
    }
}