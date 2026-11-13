<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre> // o pre arruma o var_dump
            <?php
            setcookie("dia-da-semana", "SEGUNDA", time()+ 3600); 
            // função(nome da função, até que dia ele vai durar, time)

            session_start();    
            $_SESSION["teste"] = "FUNCIONOU!!!";
    
            echo "<h1> Superglobal GET</h1>";
            var_dump($_GET) ;

            echo "<h1> SuperGlobal POST</h1>";
            var_dump($_POST) ;

            echo "<h1> SuperGlobal REQUEST</h1>";
            var_dump($_REQUEST) ;

            echo "<h1> SuperGlobal COOKIES</h1>";
            var_dump($_COOKIE) ;

            echo "<h1> SuperGlobal SESSION</h1>";
            var_dump($_SESSION) ;

            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV) ;
            // foreach(getenv() as $c => $v){
            //     echo"<br> $c -> $v";
            // }
            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER) ;

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS) ;

            ?>
        </pre>
    </main>
</body>
</html>