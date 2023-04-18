<?php

/*referências, em PHP, significa acessar o mesmo conteúdo de variável através de vários nomes. +
Porém é comum ouvir erroneamente a expressão "uso de ponteiros" em PHP, o que por sua vez não chega nem a ser parecido como os ponteiros em C: 
temos em PHP apelidos numa tabela simbólica (em C endereço de memória).

*/


$a = 10;
$b= 22;


$b = &$a;
/*Referencia a variavel $a*/

$a = 'Lucas';
echo "{$b}";
