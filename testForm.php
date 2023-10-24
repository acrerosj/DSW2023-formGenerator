<?php
    require_once 'Form.php';
    require_once 'Field.php';
    require_once 'SimpleField.php';

    $form1 = new Form("validate.php", "Prueba formulario", "post");

    $simpleField1 = new SimpleField('nombre', 'text', 'Escribe el nombre');
    $form1->add($simpleField1);
    $form1->add(new SimpleField('edad', 'number','¿Qué edad tienes?', '18'));
    $form1->add(new SimpleField('color', 'color', '¿Cuál es tu color preferido?', '#00FF00'));
    $form1->add(new SimpleField('suscripcion', 'checkbox', '¿quieres suscribirte?', 'true'));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Pruebas con formulario</h1>
    <?php $form1->render(); ?>
</body>
</html>