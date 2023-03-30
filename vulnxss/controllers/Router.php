<?php

class Route
{
    private static $routes = [];

    public static function add($url, $handler)
    {
        self::$routes[$url] = $handler;
    }

    public static function dispatch()
    {
        $url = $_SERVER['REQUEST_URI'];
        $handler = self::$routes[$url] ?? null;
        if ($handler) {
            if (is_callable($handler)) {
                $handler();
            } elseif (is_string($handler) && strpos($handler, '@') !== false) {
                [$class, $method] = explode('@', $handler);
                $instance = new $class;
                $instance->$method();
            }
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
