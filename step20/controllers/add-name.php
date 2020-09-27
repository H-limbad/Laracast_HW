<?php

$app['database']->insert('login', [
    'username' => $_POST['username'],
    
]);

header('Location: /');