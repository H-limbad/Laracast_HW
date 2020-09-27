<?php
    function connectToDb()
    {
        
    }
    function fetchAllTasks($pdo)
    {
        $stateent = $pdo->prepare('select * from login');
        $stateent->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS,'Task');
    }
    function dd($data){
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }
?>