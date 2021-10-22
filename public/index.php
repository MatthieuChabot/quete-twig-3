<?php

require_once __DIR__ . '/../config/twig.php';

$name = 'Matthieu';

echo $twig->render('home.html.twig', ['name' => $name]);
