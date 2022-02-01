<?php
/**
 * This class provides some crucial math operations for our application.
 *
 * @author        ACME Development
 * @version        1.1
 */

class Math
{

    // some useless constants
    public const PI = 3.14;

    /**
     * add
     * Returns the sum of two numbers
     *
     * @param float $num1 Number one
     * @param float $num2 Number two
     * @return float The sum
     */
    public static function add(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }

    /**
     * subtract
     * Returns the difference of two numbers
     * @param float $num1 Number one
     * @param float $num2 Number two
     * @return float The difference
     */
    public static function subtract(float $num1, float $num2): float
    {
        return $num1 - $num2;
    }
}