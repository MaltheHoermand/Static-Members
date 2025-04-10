<?php



class Calculator{
    // 4 decimals of pi
    public static $PI = 3.1415;

    // calculates the are of a rectangle from length and width
    public static function rectangle_area($l, $w) {
        return $l * $w;
    }
    // takes in diameter to calculate circumference
    public static function circle_circumference($D) {
        $radius = $D / 2;
        return 2 * self::$PI * $radius;

    }
    // calculates the area of a circle from radius
    public static function circle_area($r) {
        return ($r * $r) * self::$PI;
    }
    public static function sum($array) {

        return array_sum($array);
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }
    public static function multiply($array) {

        return array_product($array);
    }
    public static function divide($a, $b) {
        return $a / $b;
    }

}