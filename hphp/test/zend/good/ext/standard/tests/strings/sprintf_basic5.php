<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string 
 * Source code: ext/standard/formatted_print.c
 */
<<__EntryPoint>> function main() {
echo "*** Testing sprintf() : basic functionality - using char format ***\n";


// Initialise all required variables
$format = "format";
$format1 = "%c";
$format2 = "%c %c";
$format3 = "%c %c %c";
$arg1 = 65;
$arg2 = 66;
$arg3 = 67;

// Calling sprintf() with default arguments
var_dump( sprintf($format) );

// Calling sprintf() with two arguments
var_dump( sprintf($format1, $arg1) );

// Calling sprintf() with three arguments
var_dump( sprintf($format2, $arg1, $arg2) );

// Calling sprintf() with four arguments
var_dump( sprintf($format3, $arg1, $arg2, $arg3) );

echo "Done";
}
