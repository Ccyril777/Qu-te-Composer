<?php

    require "../vendor/autoload.php";

    use HelloWorld\SayHello;
    
    $varHelloWorld = new SayHello;

        echo $varHelloWorld->World();
        echo '<br/>';

    use App\Wcs\Hello;

        $var = new Hello;
        echo $var->talk();  