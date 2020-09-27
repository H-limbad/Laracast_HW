<?php
class Connection
{
    public static function make($config)
{
    try 
    {
        return new PDO('mysql:host=127.0.0.1;dbname=registration','root','');

        return new PDO(
            $config['conection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['options']
        );

    } catch(PDOException $e)
    {
        die($e->getMessage());
    }
}
}