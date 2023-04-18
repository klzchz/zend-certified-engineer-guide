<?php
/*
                    ##Bitwise Operators##
##########################################################################################################################
##  Example	           Name	        Result                                                                               ##      
##  $a & $b	           And  	     Bits that are set in both $a and $b are set.                                        ##
##  $a | $b	           Or            (inclusive or)	Bits that are set in either $a or $b are set.                        ##
##  $a ^ $b	           Xor           (exclusive or)	Bits that are set in $a or $b but not both are set.                  ##
##  ~ $a	           Not	          Bits that are set in $a are not set, and vice versa.                               ##
##  $a << $b	      Shift left   	  Shift the bits of $a $b steps to the left (each step means "multiply by two")      ##
##  $a >> $b	      Shift right	  Shift the bits of $a $b steps to the right (each step means "divide by two")       ## 
##########################################################################################################################

*/


/* */

//Basicamente  a equação seria  $a << $b  =  ($a * 2 ^ $b) 

$a = 7;
$b = 9;
$result = $a << $b;

echo ("bits Shifting Left: \n {$result}"); //3584
echo "<br/><br/>";

/*Shift right*/

// A expressão seria  $a >> $b  =  ($a / 2 ^ $b) 

$a = 4;
$b = 6;
$result = $a >> $b;

echo ("Bits Shifting Right:\n {$result}");  // 0.0625
echo "<br/><br/>";


// A expressão seria  Not	 Negação (~x) = ~x = -x -1 

$x = ~7;


echo ("Bits Not:\n {$x}");  //  -8
echo "<br/><br/>";


// A expressão seria   And &  $a & $b (Operação de tabela binaria)

$a = 5;
$b = 2;

$result = $a & $b;

echo ("Bits And:\n {$result}"); 
echo "<br/><br/>";

// A expressão seria  Or   $a |  $b (Operação de tabela binaria)

$a = 5;
$b = 2;

$result = $a |  $b;

echo ("Bits Or:\n {$result}"); 
echo "<br/><br/>";


// A expressão seria  Xor   $a ^  $b (Operação de tabela binaria)

$a = 3;
$b = 2;

$result = $a ^ $b;

echo ("Bits Xor:\n {$result}"); 
echo "<br/><br/>";






