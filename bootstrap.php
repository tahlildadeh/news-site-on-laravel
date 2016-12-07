<?php
class app
{

    private static function registerAutoLoad()
    {
        spl_autoload_register(function($className){
            $path = __DIR__ .'/src/' . str_replace('\\', '/', $className) . '.php';
            if(file_exists($path)){
                require_once($path);
            }else{
                die($className . '<br>' .$path);
            }
        });


        /*
        spl_autoload_register(function($className){
            $path = __DIR__ .'/src/' . str_replace('_', '/', $className) . '.php';
            if(file_exists($path)){
                require_once($path);
            }
        });
        */

    }

    public static function run()
    {
        session_start();

        self::registerAutoLoad();
    }
}

