<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos me PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
    // $num = 010;
    // echo" O valor da variável \$num é: $num <br>";

    // $v = "bruno";
    // var_dump( $v ); // essa função mostra o tipo da variável e o valor dela. e ajuda a testar o tipo de variável que estamos lidando.

    // $num1 = (int) 3e2; // 3 * 10(2) = 300 
    // echo"teste de variável " . $num1;
    // var_dump($num1);

    /*Colocar o tipo depois do nome da variável é coerção de tipo, ou seja, você está forçando a variável a ser do tipo que você quer. isso é muito usado na programação orientada a objetos, onde você quer que uma variável seja de um tipo específico. Por exemplo, se você quer que uma variável seja do tipo inteiro, você pode fazer assim: $num = (int) 3e2; ou $num = (int) "300";. Isso é útil quando você quer garantir que a variável seja do tipo que você espera, e não de outro tipo.
     */

    // $casado = true;
    // var_dump( $casado );
    // print "o valor para casado é $casado";

    // o Boolean quando é false, fica vazio, e quando é true, fica 1. então quando você imprime uma variável booleana, se ela for false, não vai aparecer nada, e se for true, vai aparecer 1. por isso que no print acima, quando a variável $casado é false, não aparece nada depois do "é", e quando é true, aparece 1.

    // $vet = [6,3,5.9," Bruno",6,7,8,9, true, false, null];
    // var_dump($vet);

    // $php = "PHP\u{1F418}";
    // $nome = 'Bruno';
    // $sobrenome = 'Leal \u{1F596}';
    // echo "olá, $php.$nome $sobrenome!";
    // echo 'olá, $php!';

    // const ESTADO = "MG";
    // echo " moto no ESTADO " . ESTADO; // constante tem que usar o operador ". " para concatenar, e não o operador de soma "+", porque a constante é uma string, e o operador de soma só funciona com números. então se você tentar fazer "moto no ESTADO " + ESTADO, vai dar erro, porque você está tentando somar uma string com uma constante que é uma string. por isso que tem que usar o operador ". " para concatenar strings.

    // $nome = "Bruno";
    // $sobrenome = "Leal";
    // $apelido = "Arcnet";
    // echo "$nome \n \"$apelido\" \t\t $sobrenome";

    $curso = "PHP";
    $ano = date("Y");
    echo <<< TESTE
    Olá, seja bem-vindo ao curso de $curso.
    Estamos no ano de $ano.     
    TESTE;
    ?>
</body>
</html>