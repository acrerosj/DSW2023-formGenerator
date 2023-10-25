<?php
    require_once 'Element.php';
    require_once 'Paragraph.php';
    require_once 'Form.php';
    require_once 'Field.php';
    require_once 'SimpleField.php';
    require_once 'MultipleField.php';
    require_once 'Document.php';

    $form1 = new Form("validate.php", "Prueba formulario", "post");

    $simpleField1 = new SimpleField('nombre', 'text', 'Escribe el nombre');
    $form1->add($simpleField1);
    $form1->add(new SimpleField('edad', 'number','¿Qué edad tienes?', '18'));
    $form1->add(new SimpleField('color', 'color', '¿Cuál es tu color preferido?', '#00FF00'));
    $form1->add(new SimpleField('suscripcion', 'checkbox', '¿quieres suscribirte?', 'true'));
    $options = [
        "Desarrollo en entorno servidor" => "DSW",
        "Desarrollo en entorno cliente" => "DEW",
        "Despliegue de aplicaciones" => "DPL"
    ];
    $multipleField1 = new MultipleField('preferido', 'radio', '¿cuál es tu módulo preferido?', 'Despliegue de aplicaciones', $options);
    $form1->add($multipleField1);
    $multipleField1->addOption('Diseño de intefaces web', 'DOR');
    $parrafo1 = new Paragraph('Hola mundo');

    $document = new Document('prueba documento');
    $document->add($parrafo1);
    $document->add($form1);
    $document->add($parrafo1);
    $document->add(new SimpleField('nombre2', 'text', 'Escribe el nombre2'));
    $document->render();
?>
