<?php 
    require 'database/connection.php';
    require 'database/QueryBuilder.php';
    require 'Task.php';

    $pdo = connection::make();

    $query = new QueryBuilder($pdo);
    
    $pdo = $query->selectAll('login');
    require 'index.view.php';



?>