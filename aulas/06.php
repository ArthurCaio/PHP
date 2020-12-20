<?php
    $a = 1;
    $b = 5;
    $c = 7;
    ///////////////////////
    $nome = 'Arthur Caio';
    function exibirnome(){
        global $nome;
        print $nome;
    }
    exibirnome();
    echo "<hr>";
    //////////////////////
    function cidade(){
        global $cidade;
        $cidade = 'Paulista';
    }
    cidade();
    echo $cidade;
    //////////////////////
    function soma(){
        /*
        global $soma;
        global $a;
        global $b;
        global $c;
        $soma = $a + $b + $c;
        echo " A soma de $a, $b e $c é igual á $soma";
        */
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }
    echo "<hr>";
    soma();
?>