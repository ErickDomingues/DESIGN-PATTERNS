<?php
define('CLASS_DIR', 'src/');
set_include_path(get_include_path() . PATH_SEPARATOR . CLASS_DIR);
spl_autoload_register();

use DesignPatterns\FormGenerator\Formulario;
use DesignPatterns\FormGenerator\Campos\Tipos\CampoInput;
use DesignPatterns\FormGenerator\Campos\Tipos\CampoSelect;
use DesignPatterns\FormGenerator\Campos\Tipos\CampoTextarea;
use DesignPatterns\FormGenerator\Campos\Tipos\CampoButton;
use DesignPatterns\FormGenerator\Validator;
use DesignPatterns\FormGenerator\Request;
?>
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
$campo1 = new CampoInput();
$campo1->setId('campo1')
        ->setName('campo1')
        ->setLabel('Campo 1');

$campo2 = new CampoTextarea();
$campo2->setId('campo2')
        ->setName('campo2')
        ->setLabel('Campo 2');

$campo3 = new CampoSelect();
$campo3->setId('campo3')
        ->setName('campo3')
        ->setLabel('Campo 3')
        ->setOpcoes(array('a' => '1', 'b' => '2', 'c' => '3'));

$campo4 = new CampoButton();
$campo4->setId('campo4')
        ->setName('campo4')
        ->setLabel('Campo 4');

$request1 = new Request();
$validador1 = new Validator($request1);
$formClientes1 = new Formulario($validador1);

$formClientes1->setName('frmClientes')
        ->setMetodo('post')
        ->addCampo('campo1', $campo1)
        ->addCampo('campo2', $campo2)
        ->addCampo('campo3', $campo3)
        ->addCampo('campo4', $campo4)
        ->render();


$request2 = new Request();
$validador2 = new Validator($request2);
$formClientes2 = new Formulario($validador2);

$formClientes2->setName('frmClientes')
        ->setMetodo('post')
        ->addCampo('campo4', $campo4)
        ->addCampo('campo3', $campo3)
        ->addCampo('campo2', $campo2)
        ->addCampo('campo1', $campo1)
        ->render();

$request3 = new Request();
$validador3 = new Validator($request3);
$formClientes3 = new Formulario($validador3);

$formClientes3->setName('frmClientes')
        ->setMetodo('post')
        ->addCampo('campo3', $campo3)
        ->addCampo('campo4', $campo4)
        ->addCampo('campo1', $campo1)
        ->addCampo('campo2', $campo2)
        ->render();

$request4 = new Request();
$validador4 = new Validator($request4);
$formClientes4 = new Formulario($validador4);

$formClientes4->setName('frmClientes')
        ->setMetodo('post')
        ->addCampo('campo1', $campo1)
        ->addCampo('campo4', $campo4)
        ->addCampo('campo3', $campo3)
        ->addCampo('campo2', $campo2)
        ->render();
?>

            <hr class='divider'>
<?php
$formClientes1->createField('campo1');
?>



    </body>
</html>
