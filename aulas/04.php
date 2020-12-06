<?php
    //Tipos de Dados
    /*******************ESCALARES*************************/
    // String
    $nome = "Olá, Mundo";
    var_dump($nome);
    echo "<br>";
    if (is_string($nome)):
        echo "É uma string";
    else:
        echo "Não é uma string";
    endif;
    echo "<hr>";

    //int
    $idade = 14;
    var_dump($idade);
    echo "<br>";
    if (is_int($idade)):
        echo "É um numero inteiro";
    else:
        echo "Não é um numero inteiro";
    endif;
    echo "<hr>";

    //float
    $saldo = 134.97;
    var_dump($saldo);
    if (is_float($saldo)):
        echo "É um numero real";
    else:
        echo "Não é um numero real";
    endif;
    echo "<hr>";

    //bool
    $voce = true;
    var_dump($voce);
    echo "<br>";
    if(is_bool($voce)):
        echo "É um valor bool";
    else:
        echo "Não é um valor bool";
    endif;
    echo "<hr>";
    /*********************COMPOSTOS*********************/
    //Arrays
    $carros = array("Fusca",'Palio');
    print "$carros[0] e $carros[1] <br>";
    var_dump($carros);
    echo "<br>";
    if (is_array($carros)):
        echo "É um array";
    else:
        echo "Não é um array";
    endif;
    echo "<hr>";
    //Object
    class client{
        public $nome;
        public function atribuirNome($nome){
            $this->$nome = $nome;
        }
    }
    $client = new client();
    $client-> atribuirNome("Arthur");
    var_dump($client);
    print "<br>";
    if (is_object($client)):
        echo "É um objeto";
    else:
        echo "Não é um objeto";
    endif;
    echo "<hr>";
    /*********************ESPECIAS*********************/
    //null
    $cidade = null;
    var_dump($cidade);
    echo "<br>";
    if (is_null($cidade)):
        echo "É um valor nulo";
    else:
        echo "Não é um valor nulo";
    endif;

    //resoure
?>