<?php

    require '../vendor/autoload.php';

    $elemente = new \App\HtmlElement('p', [], 'Este es le contenido');

    echo htmlentities($element->render(), ENT_QUOTES);

