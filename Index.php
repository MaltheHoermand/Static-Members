<?php

require_once "classes/Calculator.php";

print ("Add 5 + 3: ".Calculator::sum([5, 3])."<br>");
print ("Subtract 5 + 3: ".Calculator::subtract(5, 3)."<br>");
print ("Multiply 5 + 3: ".Calculator::multiply([5, 3])."<br>");
print ("Divide 5 + 3: ".Calculator::divide(5, 3)."<br>");


print ("Area of rectangle: Length = 5 width= 3: ".Calculator::rectangle_area(5, 3)."<br>");

print ("Circomference of Circle: Diameter = 5: ".Calculator::circle_circumference(5)."<br>");

print ("Area of Circle: Radius = 5: ".Calculator::circle_area(5)."<br>");