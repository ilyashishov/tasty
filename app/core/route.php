<?php

class Route
{
    static function start()
    {
        $params = array();

        if(!isset($_GET["q"]) || $_GET["q"] == "/"){
            $module = 'main';
            $action = 'index';
        }else{
            $uri = $_GET["q"];
            $uri_parts = explode('/', trim($uri, ' /'));
            if(count($uri_parts) == 0 || count($uri_parts) % 2 == 1){
                $action = 'index';
                $module = array_shift($uri_parts);
                if($module === ""){
                    $module = 'main';
                }
            }else{
                $module = array_shift($uri_parts);
                $action = array_shift($uri_parts);
            }
            for ($i = 0; $i < count($uri_parts); $i++) {
                $params[$uri_parts[$i]] = $uri_parts[++$i];
            }
        }

            $model_name = 'Model_' . $module;
            $controller_name = 'Controller_' . $module;
            $action_name = 'action_' . $action;
            $model_file = strtolower($model_name) . '.php';
            $model_path = "app/models/" . $model_file;
            if (file_exists($model_path)) {
                include "app/models/" . $model_file;
            }
            // подцепляем файл с классом контроллера
            $controller_file = strtolower($controller_name) . '.php';
            $controller_path = "app/controllers/" . $controller_file;
            if (file_exists($controller_path)) {
                include "app/controllers/" . $controller_file;
            } else {
                /*
                правильно было бы кинуть здесь исключение,
                но для упрощения сразу сделаем редирект на страницу 404
                */             
                // if($module == 'login.ru'){
                //     header('Location: http://test.mfovashidengi.ru/login.html');
                // }else{
                // }
                
                echo "404 Not Found";
            }
            // создаем контроллер
            $controller = new $controller_name($params);
            $action = $action_name;
            if (method_exists($controller, $action)) {
                // вызываем действие контроллера
                $controller->$action();
            } else {
                Route::ErrorPage404();
            }
    }
    function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . 'Error/404/');
    }
}