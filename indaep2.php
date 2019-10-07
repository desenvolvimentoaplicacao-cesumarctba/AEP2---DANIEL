<html>
    <head>
        <title>Pessoa</title>
    </head>
    <body>
    <pre>
        <?php
            require_once 'aep2.php';
            
            $p1= new Pessoa('Daniel','24/04/2000',3245,1.88,90.00);
            $p1->calculoIMC();
            $p1->validarCPF();
            $p1->calculoIdade();
            
            
        ?>
    </pre>
    </body>
</html>