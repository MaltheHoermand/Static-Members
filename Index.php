<?php

require_once "classes/Calculator.php";

print ("Add 5 + 3: ".Calculator::sum([5, 3])."<br>");
print ("Subtract 5 + 3: ".Calculator::subtract(5, 3)."<br>");
print ("Multiply 5 + 3: ".Calculator::multiply([5, 3])."<br>");
print ("Divide 5 + 3: ".Calculator::divide(5, 3)."<br>");


