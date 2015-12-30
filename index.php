<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>

    </head>
    <body>
        <div class="container">
            <div style="height: 50px"></div>
            <?php
            require_once './Formulario.php';
            require_once './CampoInput.php';
            require_once './CampoSelect.php';
            require_once './CampoTextArea.php';
            require_once './CampoButton.php';
            require_once './Campo.php';

            $formClientes = new Formulario();

            $campo1 = new CampoInput();
            $campo1->setId('campo1')
                    ->setName('campo1')
                    ->setLabel('Campo 1');
            
             $campo4 = new CampoTextarea();
            $campo4->setId('campo4')
                    ->setName('campo4')
                    ->setLabel('Campo 4');

            $campo2 = new CampoSelect();
            $campo2->setId('campo2')
                    ->setName('campo2')
                    ->setLabel('Campo 2')
                    ->setOpcoes(array('a' => '1', 'b' => '2', 'c' => '3'));

            $campo3 = new CampoButton();
            $campo3->setId('campo3')
                    ->setName('campo3')
                    ->setLabel('Campo 3');


            $formClientes->setName('frmClientes')
                    ->setMetodo('post')
                    ->addCampo($campo1)
                    ->addCampo($campo4)
                    ->addCampo($campo2)
                    ->addCampo($campo3)
                    
                    ->render();
            ?>

    </body>
</html>
