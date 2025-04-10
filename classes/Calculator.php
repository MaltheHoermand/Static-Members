<?php



class Calculator{

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