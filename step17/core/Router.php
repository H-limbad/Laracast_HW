<?php
class Router
{
    protected $routes = [];

    public function define($routes)
    { 
        $this->routes = $routes;

 }
    public function direct($uri)
    {
        // example.com/about/culture
        if (array_key_exists($uri,$this->routes))
        {
            return $this->routes['about/culture'];
        }
        throw new Exception('Routes not defined for this URI');
    }
}

?>