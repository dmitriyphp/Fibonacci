<?php

namespace Math;

class Fibonacci {

    /**
     * Returns the sequence number from Fibonacci
     * @param $number
     * @return int|mixed|string
     */
    public function getElementByNumber($number) {
        if ( ! $this->validateNumber($number)) {
            return "Invalid number passed: $number";
        }

        $defaultRange = $this->getDefaultRange();
        if ($number <= 2) {
            return $defaultRange[$number - 1];
        }

        $prev = $defaultRange[0];
        $next = $defaultRange[1];
        $i = sizeof($defaultRange);
        while ($i != $number) {
            $i++;
            $next += $prev;
            $prev = $next - $prev;
        }

        return $next;
    }

    /**
     * Returns default Fibonacci range
     * @return int[]
     */
    private function getDefaultRange(): array {
        return array(1, 1);
    }

    /**
     * Validates number to be searched
     * @param $number
     * @return bool
     */
    private function validateNumber($number): bool {
        return is_int($number) && ($number > 0);
    }

}